<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

class welcomeController extends Controller
{
    public function index()
    {
        $sneakers = Sneaker::take(9)->get();
        return view('welcome', compact('sneakers'));
    }
}
