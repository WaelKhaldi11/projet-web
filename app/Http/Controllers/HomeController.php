<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $voitures=Voiture::get();
        return view("home",['voitures'=> $voitures]);
    }

}
