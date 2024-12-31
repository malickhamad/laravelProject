<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;


class HomeController extends Controller
{
    public function index(){
        $packages = Packages::all();

        return view('frontend.index', compact('packages'));
    }
}
