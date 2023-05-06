
<div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>

    nav svg{
        height:20px;
    }
    nav .hidden{
        display: block;
    }
    .wishlisted{
        background-color : #f15412 !important;
        border : 1px solid transparent !important;

    }
    .wishlisted i{
        color : #fff !important;


    }

</style>
    <main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{route('home.index')}}" rel="nofollow">Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand">{{$products->total()}}</strong> items for you from <strong class="text-brand">{{$category_name}}</Strong> category !</p>
                        </div>

                        <div class="sort-by-product-area">
                            <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary rounded-0 dropdown-toggle d-flex align-items-center justify-content-between"
                                  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                  style="background-color: transparent; border: none; padding: 0.01rem 0.3rem; font-size: 0.750rem; height: 0.5rem;">
                                  <span style="color: #777;"> {{$pageSize}}<i class="fi-rs-angle-small-down"></i></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item {{$pageSize == 12 ? 'active' : ''}}" href="#" wire:click.prevent="changePageSize(12)">12</a>
                                  <a class="dropdown-item {{$pageSize == 25 ? 'active' : ''}}" href="#" wire:click.prevent="changePageSize(25)">25</a>
                                  <a class="dropdown-item {{$pageSize == 50 ? 'active' : ''}}" href="#" wire:click.prevent="changePageSize(50)">50</a>
                                  <a class="dropdown-item {{$pageSize == 150 ? 'active' : ''}}" href="#" wire:click.prevent="changePageSize(150)">150</a>
                                  <a class="dropdown-item {{$pageSize == 300 ? 'active' : ''}}" href="#" wire:click.prevent="changePageSize(300)">All</a>
                                </div>
                              </div>
                            </div>


                          <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary rounded-0 dropdown-toggle d-flex align-items-center justify-content-between"
                                  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                  style="background-color: transparent; border: none; padding: 0.01rem 0.3rem; font-size: 0.750rem; height: 0.5rem;">
                                  <span style="color: #777;">{{$orderBy}} <i class="fi-rs-angle-small-down"></i></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item {{$orderBy == 'Default Sorting' ? 'active' : ''}}"          href="#" wire:click.prevent="changeOrderBy('Default Sorting')">Default Sorting</a>
                                  <a class="dropdown-item {{$orderBy == 'Price: Low to High' ? 'active' : ''}}"       href="#" wire:click.prevent="changeOrderBy('Price: Low to High')">Price: Low to High</a>
                                  <a class="dropdown-item {{$orderBy == 'Price: High to Low' ? 'active' : ''}}"       href="#" wire:click.prevent="changeOrderBy('Price: High to Low')">Price: High to Low</a>
                                  <a class="dropdown-item {{$orderBy == 'Sort by date :new to old' ? 'active' : ''}}" href="#" wire:click.prevent="changeOrderBy('Sort by date :new to old')">Sort by date :new to old </a>

                                </div>
                              </div>

                        </div>

                        </div>
                    </div>
                    <div class="row product-grid-3">
                        @php
                        $witems= Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                   @foreach($products as $product)

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                            <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}">
                                            <img class="hover-img"  src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}">
                                        </a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop.html">Music</a>
                                    </div>
                                    <h2><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        @if($product->sale_price>1000)
                                        <span>L.L{{$product->sale_price}}  </span>
                                      @else
                                         <span>${{$product->sale_price}}  </span>
                                     @endif

                                    </div>
                                      <div class="product-action-1 show">
                                        @if($witems->contains($product->id))
                                        <a aria-label="remove from Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fi-rs-heart"></i></a>
                                        @else
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"><i class="fi-rs-heart"></i></a>
                                        @endif

                                       <a button="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                       @endforeach
                    </div>

                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        {{$products->links()}}

                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            @foreach($categories as $category)
                            <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by price</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span>
                                        <span class="text-info" id="min_price">${{$min_value}}</span> -
                                        <span class="text-info" id="max_price">${{$max_value}}</span>
                                      </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
</div>
@push('scripts')
<script>
       var sliderrange = $('#slider-range');
     var amountprice = $('#amount');
    $(function() {
    var min_price = 0;
    var max_price = 1000;
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 1000,
      values: [0, 1000],
      slide: function(event, ui) {
        min_price = ui.values[0];
        max_price = ui.values[1];
        $("#min_price").text("$" + min_price);
        $("#max_price").text("$" + max_price);
          @this.set('min_value',min_price);
          @this.set('max_value',max_price);
      }
    });
  });
    </script>
@endpush
