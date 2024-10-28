<?php

namespace App\Http\Controllers;

use App\Models\TrainStation;
use Illuminate\Http\Request;

class TrainStationController extends Controller
{
    public function index()
    {
        $stations = TrainStation::all();
        return view('trainStations\index', compact('stations'));
    }
}
