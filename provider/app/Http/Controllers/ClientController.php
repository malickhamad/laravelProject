<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required|string',
            'mbps' => 'required|string',
            'price' => 'required|string',
            'role' => 'required|string',
            'address' => 'required|string',
            'location' => 'required|string',
        ]);

        // Create the Client
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mbps' => $request->mbps,
            'price' => $request->price,
            'role' => $request->role,
            'address' => $request->address,
            'location' => $request->location,
        ]);

        // Create the User
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Registered successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('client.details', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('clients')->ignore($client->id),
            ],
            'password' => 'nullable|string', // Optional password update
            'mbps' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Update client data
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->mbps = $request->mbps;
        $client->address = $request->address;
        $client->location = $request->location;

        // Update the password only if it's provided
        if ($request->filled('password')) {
            $client->password = Hash::make($request->password);
        }

        $client->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Client deleted successfully.');
    }
}
