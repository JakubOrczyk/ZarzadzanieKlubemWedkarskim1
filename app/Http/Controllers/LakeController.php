<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lake;
use App\Models\Fish;
use App\Models\LakeFish;
use App\Http\Requests\StoreLakeRequest;
use App\Http\Requests\UpdateLakeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class LakeController extends Controller
{
    public function index()
    {
        return view('lake.lake', [
            'lakes' => Lake::all()
        ]);
    }

    public function show($id)
    {
        $lake = Lake::findOrFail($id);
        $fishes = $lake->fishes;
        return view('lake.show', [
            'lake' => $lake,
            'fishes' => $fishes,
        ]);
    }

    public function create()
    {
        Gate::authorize('is-admin');
        return view('lake.create');
    }

    public function addFish($id)
    {
        Gate::authorize('is-admin');
        $lake = Lake::findOrFail($id);
        $fishes = Fish::all();

    return view('lake.add', compact('lake', 'fishes'));
    }

    public function assignFish(Request $request, $lakeId, $fishId)
    {
        Gate::authorize('is-admin');
        LakeFish::create([
            'lake_id' => $lakeId,
            'fish_id' => $fishId,
        ]);

        return redirect()->route('lake.show', $lakeId)->with('success', 'Ryba została przypisana do łowiska.');
    }


    public function unassignFish(Request $request, $lakeId, $fishId)
    {
        Gate::authorize('is-admin');
        LakeFish::where('lake_id', $lakeId)->where('fish_id', $fishId)->delete();

        return redirect()->route('lake.show', $lakeId)->with('success', 'Ryba została usunięta z łowiska.');
    }



    public function store(StoreLakeRequest $request)
    {
        $input = $request->all();
        Lake::create($input);

        return redirect()->route('lake.index');
    }


    public function edit(Lake $lake)
    {

        Gate::authorize('is-admin');

        return view('lake.edit', ['lake' => $lake]);
    }

    public function update(UpdateLakeRequest $request, Lake $lake)
    {

        Gate::authorize('is-admin');
        $input = $request->all();
        $lake->update($input);
        return redirect()->route('lake.index');
    }

    public function destroy(Lake $lake)
    {
        Gate::authorize('is-admin');
        $lake->delete();
        return redirect()->route('lake.index');
    }

    public function imageUpload()
    {
        return view('lake.image-upload');
    }

    public function imageUploadStore(Request $request)
    {
        $request->validate([
            'files' => 'required|max:5',
            'files.*' => 'required|mimes:jpg,jpeg|max:1000',
        ], [
            'files.required' => 'Nie wybrano plików.',
            'files.*.mimes' => 'Wymagane rozszerzenia: .jpg lub .jpeg.',
            'files.*.max' => 'Maksymalny rozmiar jednego pliku: ok. 1MB.',
        ]);

        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                Storage::putFileAs(env('UPLOAD_PATH'), $file, $file->getClientOriginalName());
            }
        }

        return redirect()->route('lake.index')->with('successMessage','Przesyłanie plików zakończone pomyślnie.');
    }
}
