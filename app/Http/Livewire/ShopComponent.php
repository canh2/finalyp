<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShopComponent extends Component
{
     use withPagination;
   public function store($product_id,$product_name,$product_price)
   {

        Cart::add($product_id,$product_name,floatval(($product_price)))->associate('App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
     }
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$products]);
    }
}
