<?php

namespace App\Http\Controllers;

use App\Model\Flight_list;
use Illuminate\Http\Request;

class FlightListController extends Controller {
	public function index() {
		$flights = Flight_list::all();
		return view('/flight-list', ['flights' => $flights]);
	}
}