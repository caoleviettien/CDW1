<?php

namespace App\Http\Controllers;

use App\Model\Airport;

class AirportController extends Controller{
    public function index(){
        $airport = Airport::all();
        return view('airport-list', ['airport' => $airport]);
    }
}