<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillController extends Controller
{
    // Display the form and list of bills
    public function index()
    {
        $bills = Bill::all(); // Retrieve all bills from the database
        return view('bills.index', compact('bills'));
    }

    // Handle the form submission and store the bill data
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

