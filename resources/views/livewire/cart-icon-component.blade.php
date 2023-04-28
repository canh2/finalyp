<div>
    <div class="header-action-icon-2">
        <a class="mini-cart-icon" href="{{route('shop.cart')}}">
            <img alt="Surfside Media" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
            @if(Cart::instance('cart')->count()>0)
            <span class="pro-count blue">{{Cart::instance('cart')->count()}}</span>
            @endif
        </a>
        <div class="cart-dropdown-wrap cart-dropdown-hm2">
            <ul>
                @foreach(Cart::instance('cart')->content() as $item)
                <li>
                    <div class="shopping-cart-img">
                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img alt="{{$item->model->name}}" src="{{asset('assets/imgs/products')}}/{{$item->model->image}}"></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="product-details.html">{{substr($item->model->name,0,20)}}...</a></h4>
                        <h4><span>{{$item->qty}} ×
                            @if($item->model->sale_price>1000)
                             </span>${{$item->model->sale_price/100000}}</h4>
                          @else
                           </span>${{$item->model->sale_price}}</h4>
                         @endif
                    </div>
                 {{--   <div class="shopping-cart-delete">
                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                    </div>--}}
                </li>
                @endforeach
            </ul>
            <div class="shopping-cart-footer">
                <div class="shopping-cart-total">
                    <h4>Total <span>${{Cart::total()}}</span></h4>
                </div>
                <div class="shopping-cart-button">
                    <a href="{{route('shop.cart')}}" class="outline">View cart</a>
                    <a href="checkout.html">Checkout</a>
                </div>
            </div>
        </div>
</div>
