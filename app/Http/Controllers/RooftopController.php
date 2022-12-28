<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooftop;

class RooftopController extends Controller
{
    public function index()
    {
        return view('rooftops', [
            "title" => " Rooftops Moments ",
            "active" => 'rooftops',
            "rooftops" => Rooftop::latest()->get()
        ]);
    }

    public function show(Rooftop $rooftop)
    {
        return view('rooftop', [
            "title" => "Single Rooftop",
            "active" => "rooftop",
            "rooftop" => $rooftop
        ]);
    }
}
