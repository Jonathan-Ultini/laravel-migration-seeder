<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['passenger', 'train'])->get();
        return view('tickets.index', compact('tickets'));
    }
}
