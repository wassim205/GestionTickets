<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->category);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Tickets::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => auth()->id(),
            'status_id' => 1,
        ]);
        return redirect()->back()->with('success', 'Ticket créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = Tickets::findOrFail($id);
        $agents = User::where('role_id', 2)->get();
        return view('tickets.edit', compact('ticket', 'agents'));
        // return view('tickets.edit', []);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'agent_id' => 'required|exists:users,id',
        ]);

        $ticket = Tickets::findOrFail($id);
        $ticket->update([
            'agent_id' => $request->agent_id,
        ]);

        // return redirect()->back();
        return redirect()->route('admin.dashboard')->with('success', 'Agent assigné avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
