<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionMenuCuisinierController extends Controller
{
    //fonction permettant d'afficher la vue de la gestion  du menu du cuisinier
    public function index()
    {
        return view('GestionMenuCuisiniers');
    }
}
