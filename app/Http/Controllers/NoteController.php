<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $noteData = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ];
        $note = Note::create($noteData);
        return redirect('/notes/' . $note->id . '/edit');
    }

    public function edit(Request $request, Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $noteData = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ];
        $note->update($noteData);
        return redirect('/notes/' . $note->id . '/edit');
    }

    public function index(Request $request)
    {
        return view('notes.index', ['notes' => Note::limit(15)->get()]);
    }

    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        return redirect('/notes');
    }
}
