<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
{
    $product_id = $request->input('product_id');
    $quantity = $request->input('quantity');

    $product = Product::find($product_id);

    $cart = session()->get('cart');

    if (!$cart) {
        $cart = [
            $product_id => [
                'name' => $product->name,

                'price' => $product->sale_price,
                'image' => $product->image
            ]
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    if (isset($cart[$product_id])) {
        $cart[$product_id]['quantity'] += $quantity;

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    $cart[$product_id] = [
        'name' => $product->name,
        'quantity' => $quantity,
        'price' => $product->price,
        'image' => $product->image
    ];

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}

}
