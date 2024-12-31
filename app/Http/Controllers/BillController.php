<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'screenshot' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('screenshot')) {
            $file = $request->file('screenshot');
            $filePath = $file->store('screenshots', 'public'); // Save to storage/app/public/screenshots
        }

        // Create the new Bill record
        Bill::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'screenshot' => $filePath ?? null, // Save file path to database
        ]);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Bill submitted successfully!');
    }
}
