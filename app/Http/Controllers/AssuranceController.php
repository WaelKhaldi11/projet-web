<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assurance;

class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = assurance::all();

        return view('assurances.index', compact('assurances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assurances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $assurance = new Assurance();
        $assurance->title = $request->title;
        $assurance->body = $request->body;
        $assurance->save();

        return redirect()->route('Assurances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(assurance $assurance)
    {
        return view('assurances.show', compact('assurances'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(assurance $assurance)
    {
        return view('assurances.edit', compact('assurances'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, assurance $assurance)
    {
        $assurance->title = $request->title;
        $assurance->body = $request->body;
        $assurance->save();

        return redirect()->route('assurances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(assurance $assurance)
    {
        $assurance->delete();

        return redirect()->route('assurances.index');
    }
}
