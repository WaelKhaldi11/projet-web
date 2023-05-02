<?php

namespace App\Http\Controllers;

use App\Models\reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reclamation = Reclamation::all();

        return view('reclamations.index', compact('reclamations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reclamation/ajoutReclamation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reclamation = new Reclamation();
        $reclamation->title = $request->title;
        $reclamation->body = $request->body;
        $reclamation->save();

        return redirect()->route('reclamations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(reclamation $reclamation)
    {
        return view('reclamations.show', compact('reclamations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reclamation $reclamation)
    {
        return view('reclamations.edit', compact('reclamations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reclamation $reclamation)
    {
        $reclamation->title = $request->title;
        $reclamation->body = $request->body;
        $reclamation->save();

        return redirect()->route('reclamations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect()->route('reclamations.index');
    }
}
