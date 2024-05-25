<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fish;
use App\Http\Requests\StoreFishRequest;
use App\Http\Requests\UpdateFishRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class FishController extends Controller
{


    public function index()
    {
        return view('fish.fish', [
            'fishes' => Fish::all()
        ]);
    }

    public function create()
    {

        Gate::authorize('is-admin');
        return view('fish.create');
    }

    public function store(StoreFishRequest $request)
    {
        Gate::authorize('is-admin');
        $input = $request->all();
        Fish::create($input);
        return redirect()->route('fish.index');
    }


    public function edit(Fish $fish)
    {
        Gate::authorize('is-admin');
        return view('fish.edit', ['fish' => $fish]);
    }

    public function update(UpdateFishRequest $request, Fish $fish)
    {
        Gate::authorize('is-admin');
        $input = $request->all();
        $fish->update($input);
        return redirect()->route('fish.index');
    }

    public function destroy(Fish $fish)
    {
        Gate::authorize('is-admin');
        $fish->delete();
        return redirect()->route('fish.index');
    }

    public function imageUpload()
    {
        return view('fish.image-upload');
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

        return redirect()->route('fish.index')->with('successMessage','Przesyłanie plików zakończone pomyślnie.');
    }
}
