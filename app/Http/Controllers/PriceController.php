<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.price');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.price');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mbps' => 'required|integer',
            'price' => 'required|numeric',
            'gmail' => 'required|email',
        ]);

        // Create a new Price entry with the default status of "waiting"
        Price::create([
            'mbps' => $validatedData['mbps'],
            'price' => $validatedData['price'],
            'status' => 'waiting',
            'gmail' => $validatedData['gmail'],
        ]);

        return redirect()->back()->with('success', 'Package selected successfully!');
    }

    // Other methods remain unchanged
}
