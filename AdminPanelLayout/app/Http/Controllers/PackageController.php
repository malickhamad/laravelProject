<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */


   public function index()
    {
      $packages = Package::all(); // Retrieve all packages without pagination
      return view('package.index', [
        'packages' => $packages
      ]);
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('package.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'mbps' => 'required',
        'rs' => 'required',
        ]);

        Package::create([
            'mbps' => $request->mbps,
            'rs' => $request->rs,
        ]);
        return redirect('/packages')->with('status','Package created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return view('package.show', compact('package'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('package.edit' , compact('package'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'mbps' => 'required',
            'rs' => 'required',
            ]);

            $package->update([
                'mbps' => $request->mbps,
                'rs' => $request->rs,
            ]);
            return redirect('/packages')->with('status','Package updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/packages')->with('status','Package Deleted successfully');

    }
}
