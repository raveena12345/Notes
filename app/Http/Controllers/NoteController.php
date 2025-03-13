<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoteModel;

class NoteController extends Controller
{
    // Show all notes
    public function index()
    {
        $notes = NoteModel::all();
        return view('dashboard', compact('notes'));
    }

    // Store a new note
    public function store(Request $request)
    {
        NoteModel::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard'); // Redirect back to dashboard
    }

    // Show edit form
    public function edit($id)
    {
        $note = NoteModel::findOrFail($id);
        return view('edit', compact('note'));
    }

    // Update an existing note
    public function update(Request $request, $id)
    {
        $note = NoteModel::findOrFail($id);
        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard');
    }

    // Delete a note
    public function destroy($id)
    {
        NoteModel::destroy($id);
        return redirect()->route('dashboard');
    }
}
