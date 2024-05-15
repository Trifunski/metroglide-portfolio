<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use App\Models\Brand;
use App\Models\Size;

class sneakersController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::all();
        $sizes = Size::all();
        
        $query = Sneaker::query();

        // Filtro de marcas
        if ($request->has('brands') && !empty($request->brands)) {
            $query->whereIn('brand_id', $request->brands);
        }

        // Filtro de tamaños
        if ($request->has('sizes') && !empty($request->sizes)) {
            $query->whereHas('sizes', function($q) use ($request) {
                $q->whereIn('sizes.id', $request->sizes);
            });
        }

        $sneakers = $query->get();

        return view('sneakers', compact('sneakers', 'brands', 'sizes'));
    }
}