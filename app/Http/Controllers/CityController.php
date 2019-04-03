<?php

namespace App\Http\Controllers;

use App\Model\City;

class CityController extends Controller{
    public function index(){
        $cities = City::all();
        return view('index', ['cities' => $cities]);
    }
}