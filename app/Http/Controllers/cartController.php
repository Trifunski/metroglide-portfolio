<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

class cartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function store(Request $request)
    {
        $sneaker = Sneaker::findOrFail($request->product_id);
        $sizeId = $request->size_id;
        $quantity = $request->quantity;

        $cart = session()->get('cart', []);
        $cartItemKey = $request->product_id . '-' . $sizeId;

        if (!$cart) {
            $cart = [
                $cartItemKey => [
                    "name" => $sneaker->sneaker_name,
                    "quantity" => $quantity,
                    "price" => $sneaker->sneaker_price,
                    "image" => $sneaker->sneaker_image,
                    "size_id" => $sizeId
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$cartItemKey])) {
            $cart[$cartItemKey]['quantity'] += $quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$cartItemKey] = [
            "name" => $sneaker->sneaker_name,
            "quantity" => $quantity,
            "price" => $sneaker->sneaker_price,
            "image" => $sneaker->sneaker_image,
            "size_id" => $sizeId
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request, $key)
    {
        if ($request->quantity && $request->quantity > 0) {
            $cart = session()->get('cart', []);
            $cart[$key]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect()->route('cart.index');
    }

    public function remove(Request $request, $key)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->route('cart.index');
    }
}
