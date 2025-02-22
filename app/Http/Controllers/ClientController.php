<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Tickets;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $user_id = auth()->user()->id;
        $tickets = Tickets::where('user_id', $user_id)->with('categories')->get();
        // dd($tickets);
        return view('client.dashboard', compact('categories', 'tickets'));
    }
}
