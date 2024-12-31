<?php
// app/Http/Controllers/ComplaintController.php
namespace App\Http\Controllers;

use App\Models\Complaint; // Ensure you have the Complaint model
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        // Retrieve all complaints from the database
        $complaints = Complaint::all();
        
        // Pass the complaints data to the view
        return view('complaints.index', compact('complaints'));
    }
                 
       // ComplaintController.php
         public function destroy($id)
      {
          $complaint = Complaint::findOrFail($id);
          $complaint->delete();
          return redirect()->back()->with('success', 'Complaint deleted successfully');
      }

}
