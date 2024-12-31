<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function index()
    {
        // Fetch all clients from the database
        $clients = Client::all();

        // Pass the data to the view
        return view('clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        // Validate and create a new client entry
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'mbps' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'gmail' => 'required|email',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'status' => 'required|string|in:waiting,approved,rejected', // Only allow specific statuses
        ]);

        Client::create($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }
    public function approve($id)
    {
        $client = Client::find($id);
        $client->status = 'approved';
        $client->save();

        return redirect()->back()->with('success', 'Client approved successfully!');
    }


    public function rejected($id)
{
    $client = Client::find($id);
    if ($client) {
        $client->status = 'rejected';
        $client->save();
        return redirect()->back()->with('success', 'Client rejected successfully!');
    }
    return redirect()->back()->with('error', 'Client not found!');
}
public function delete($id)
{
    $client = Client::find($id);
    if ($client) {
        $client->delete();
        return redirect()->back()->with('success', 'Client deleted successfully!');
    }
    return redirect()->back()->with('error', 'Client not found!');
}

 }
