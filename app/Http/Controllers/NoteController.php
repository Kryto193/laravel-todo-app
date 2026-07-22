<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes=Notes::query()->where([
            'user_id'=>Auth::id(),
        ])->get();
        return view("notes.index", compact("notes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("notes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>["required","string"],
            "description"=>["required","string"],
    ]);

    Notes::create([
        "title"=> $request->title,
        "description"=> $request->description,
        "user_id"=>Auth::id(),
    ]);

    return redirect('/notes');

    }

    /**
     * Display the specified resource.
     */
    public function show(Notes $note)
    {
        return view('notes.show',[
            'note'=> $note,
        ]);

    //return view("notes.show", compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notes $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notes $note)
    {
        $request->validate([
            'title'=>['required','string'],
            'description'=>['required','string'],
        ]);

        $note->update([
            'title'=> $request->title,
            'description'=> $request->description,
        ]);

        return redirect('/notes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $note)
    {
        $note->delete();
    }
}
