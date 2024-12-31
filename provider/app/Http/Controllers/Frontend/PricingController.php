<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;

class PricingController extends Controller
{
    public function index()
    {
        $packages = Packages::all();
        return view('frontend.price', compact('packages'));
    }
}
