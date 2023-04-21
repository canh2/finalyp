<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
class SearchComponent extends Component
{
     use withPagination;
     public $pageSize=12;
     public $orderBy="Default Sorting";
     public $q;
     public $search_term;
     public function mount()
     {
      $this->fill(request()->only('q'));
      $this->search_term='%'.$this->q . '%';
     }
   public function store($product_id,$product_name,$product_price)
   {
        Cart::add($product_id,$product_name,$product_price,1)->associate('App\Models\Product');
        session()->flash('success_message','Item added to cart');
        return redirect()->route('shop.cart');
   }
   public function changePageSize($size){
    $this->pageSize = $size;
   }
   public function changeOrderBy($orderBy){
    $this->orderBy =$orderBy;
   }
    public function render()
    {
        if($this->orderBy =='Price: Low to High'){
            $products = Product::where('name','like',$this->search_term)->orderBy('sale_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low'){
            $products = Product::where('name','like',$this->search_term)->orderBy('sale_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort by date :new to old' ){
            $products = Product::where('name','like',$this->search_term)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }else{
             $products = Product::where('name','like',$this->search_term)->paginate($this->pageSize);
        }
          $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.search-component',['products'=>$products,'categories'=>$categories]);
    }
}
