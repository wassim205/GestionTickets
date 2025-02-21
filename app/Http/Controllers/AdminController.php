<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $tickets = Tickets::with('categories')->get();
        return view('admin.dashboard', compact('tickets'));
    }
}