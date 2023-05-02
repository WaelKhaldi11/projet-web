<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agence;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = agence::all();

        return view('agences.index', compact('agences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agence = new Agence();
        $agence->title = $request->title;
        $agence->body = $request->body;
        $agence->save();

        return redirect()->route('agences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(agence $agence)
    {
        return view('agences.show', compact('agences'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('agences.edit', compact('agences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, agence $agence)
    {
        $agence->title = $request->title;
        $agence->body = $request->body;
        $agence->save();

        return redirect()->route('agences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(agence $agence)
    {
        $agence->delete();

        return redirect()->route('agences.index');
    }
}
