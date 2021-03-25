<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Funtion affichan les la page dashboard du cuisinier
    public function index(){
        return View("chef.dashboard");
    }
}
