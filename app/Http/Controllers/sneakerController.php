<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\SneakerSize;
use App\Models\Brand;

class sneakerController extends Controller
{
    public function index($id)
    {
        $sneakers = Sneaker::findOrfail($id);
        $sizes = SneakerSize::where('sneaker_id', $id)->with('size')->get();

        return view('sneaker', compact('sneakers', 'sizes'));
    }
}
