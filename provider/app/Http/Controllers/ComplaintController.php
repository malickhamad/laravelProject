<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function showForm()
    {
        return view('frontend.complaint');
    }

    public function submitComplaint(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new complaint record
        Complaint::create($validated);

        // Redirect back with success message
        return redirect()->route('complaint.form')->with('success', 'Your complaint has been submitted successfully!');
    }
}
