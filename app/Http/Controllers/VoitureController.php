<?php

namespace App\Http\Controllers;

use App\Models\voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Voiture::all();

        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $voiture = new Voiture();
        $voiture->marque = $request->marque;
        $voiture->modele = $request->modele;
        $voiture->couleur = $request->couleur;
        $voiture->carburant = $request->carburant;
        $voiture->prix_jour = $request->prix_jour;
        $voiture->nbr_place = $request->nbr_place;
        $voiture->matricule = $request->matricule;
        $voiture->agences_id = 1;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'voitures_images/';
            $file->move($path, $filename);
            $voiture->photo = $path . $filename;
        }


        $voiture->save();
        return dd('voitures ajoutée');

        // return redirect()->route('voitures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(voiture $voiture)
    {
        return view('voitures.show', compact('voitures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voiture $voiture)
    {
        return view('voitures.edit', compact('voitures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voiture $voiture)
    {
        $voiture->title = $request->title;
        $voiture->body = $request->body;
        $voiture->save();

        return redirect()->route('voitures.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voiture $voiture)
    {
        $voiture->delete();

        return redirect()->route('voitures.index');
    }
}
