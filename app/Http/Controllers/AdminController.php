<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $tickets = Tickets::with('categories', 'users', 'agent')->get();
        // $agent = User::where (Tickets::agent_id );
        return view('admin.dashboard', compact('tickets'));
    }
}