<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accident;

class AccidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = accident::all();

        return view('accidents.index', compact('accidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accidents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new accident();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('accidents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('accidents.show', compact('accidents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('accidents.edit', compact('accidents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accident $accident)
    {
        $accident->title = $request->title;
        $accident->body = $request->body;
        $accident->save();

        return redirect()->route('accidents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accident $accident)
    {
        $accident->delete();

        return redirect()->route('accidents.index');
    }
}
