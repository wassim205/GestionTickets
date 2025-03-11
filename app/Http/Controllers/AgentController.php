<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {

        $tickets = Tickets::where('agent_id', auth()->id())->get();
        return view('agent.dashboard', compact('tickets'));
    }
}