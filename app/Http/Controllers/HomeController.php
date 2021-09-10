<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;
class HomeController extends Controller
{
     public function index(){

        $allTrips= Trip::all();
        $tripFiltrati= Trip::where('price', '<', 400.00)->get();
        return view('home', compact('allTrips','tripFiltrati'));
        // return view('filtrato', compact('tripFiltrati'));
       
    }
}
