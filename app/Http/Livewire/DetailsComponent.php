<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\category;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug= $slug;
    }
    public function store($product_id,$product_name,$product_price)
    {
         Cart::instance('cart')->add($product_id,$product_name,$product_price,1)->associate('App\Models\Product');
         session()->flash('success_message','Item added to cart');
         return redirect()->route('shop.cart');
    }
    public function render()
    {
        $product = Product::where('slug' , $this->slug)->first();
        $rproducts =Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.details-component',['product'=>$product ,'categories'=>$categories ,'rproducts'=>$rproducts ,'nproducts'=>$nproducts  ]);
    }
}
