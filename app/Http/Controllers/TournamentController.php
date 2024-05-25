<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\Lake;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class TournamentController extends Controller
{
    public function index()
    {

       $tournaments = Tournament::orderBy('created_at', 'desc')->get();

       return view('tournament.tournament', [
           'tournaments' => $tournaments
       ]);
    }

    public function create()
    {
        Gate::authorize('is-admin');

        $lakes = Lake::all();

        return view('tournament.create', [
            'lakes' => $lakes
        ]);
    }

    public function show($id)
    {
        $tournament = Tournament::findOrFail($id);
        $lake = $tournament->lake;
        return view('tournament.show', compact('tournament', 'lake'));
    }

    public function store(StoreTournamentRequest $request)
    {
        $input = $request->all();
        Tournament::create($input);

        return redirect()->route('tournament.index');
    }


    public function edit(Tournament $tournament)
    {
        Gate::authorize('is-admin');
        $lakes = Lake::all();
        return view('tournament.edit', ['tournament' => $tournament, 'lakes' => $lakes]);
    }

    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        Gate::authorize('is-admin');
        $input = $request->all();
        $tournament->update($input);
        return redirect()->route('tournament.index');
    }

    public function destroy(Tournament $tournament)
    {
        $tournament->delete();
        return redirect()->route('tournament.index');
    }

    public function imageUpload()
    {
        return view('tournament.image-upload');
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

        return redirect()->route('tournament.index')->with('successMessage','Przesyłanie plików zakończone pomyślnie.');
    }
}
