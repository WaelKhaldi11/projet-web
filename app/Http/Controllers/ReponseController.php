<?php

namespace App\Http\Controllers;

use App\Models\reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reponse = Reponse::all();

        return view('reponses.index', compact('reponses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reponses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reponse = new Reponse();
        $reponse->title = $request->title;
        $reponse->body = $request->body;
        $reponse->save();

        return redirect()->route('reponses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(reponse $reponse)
    {
        return view('reponses.show', compact('reponses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reponse $reponse)
    {
        return view('reponses.edit', compact('reponses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reponse $reponse)
    {
        $reponse->title = $request->title;
        $reponse->body = $request->body;
        $reponse->save();

        return redirect()->route('reponses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reponse $reponse)
    {
        $reponse->delete();

        return redirect()->route('reponses.index');
    }
}
