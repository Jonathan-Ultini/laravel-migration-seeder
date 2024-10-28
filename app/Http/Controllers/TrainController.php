<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();

        // Seleziona i treni in partenza oggi e non cancellati
        $trains = Train::whereDate('orario_di_partenza', $today)
            ->where('cancellato', false)
            ->get();
        // $trains = Train::all();

        return view('trains.index', compact('trains'));
    }
}
