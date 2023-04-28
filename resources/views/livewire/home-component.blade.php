<div>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.ico')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<style>
    * {
      box-sizing: border-box
    }
    body {
      font-family: Verdana, sans-serif;
      margin: 0
    }
    .mySlides {
      display: none
    }
    img {
      vertical-align: middle;
    }
    .slideshow-container {
      max-width: 1000%;
      position: relative;
      margin: 0;
    }
    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 20s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }
    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,

    /* Caption text */
    .quote {
      color: #ffffff;
      font-size: 30px;
      padding: 8px 12px;
      position: absolute;
      bottom: 600px;
      width: 100%;
    }
    .text {
      color: #ffffff;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    /* Number text (1/3 etc) */
    .numbertext {
      color: #ffffff;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #999999;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 20s ease;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration:2s;
      animation-name: fade;
      animation-duration: 3s;
    }
    @-webkit-keyframes fade {
      from {
        opacity: .4
      }
      to {
        opacity: 1
      }
    }
    @keyframes fade {
      from {
        opacity: .4
      }
      to {
        opacity: 1
      }
    }
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 1000px) {
      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }
  </style>
   <main class="main">

    <section id="aboutt">
        <div class="bg-img">
         <div class="center">
          <div class="col-6 mt-5 ">
                     <h1>
                         <div class="display-6 fw-bold mt-5"><div class="clr"> The Ultimate Hookah Experience</div></div>
                     </h1>
                     <p>
                        <div class="clr"> <small>Upgrade your smoking game with our top-quality hookahs and tobacco products </small></div>
                     </p>
                     <div class="one mt-4 ">
                         <a href="{{route('shop')}}" class="my-button">Shop Now!</a>
                     </div>
          </div>
         </div>
       </div>
       </div>



                    </section>
                    <div class="page2">
                        <div class="bg-img2">
                        <div class="titleee">Our Products</div>
                        <hr></hr>
                            <div class="tab-content wow fadeIn animated" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                    <div class="row product-grid-4">
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}" >
                                                            <img class="default-img"  src="{{asset('assets/imgs/background/fullarguile.jpg')}}" alt="">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Hooakh</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4  col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}">
                                                            <img class="default-img" src="{{asset('assets/imgs/background/elfbar.png')}}" alt="">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Vapes</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4  col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}">
                                                            <img class="default-img" src="{{asset('assets/imgs/background/maasal1.jpeg')}}">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Maasal</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4  col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}">
                                                            <img class="default-img" src="{{asset('assets/imgs/background/charcoal.png')}}"  alt="">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Charcoal</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-xs-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}">
                                                            <img class="default-img"   src="{{asset('assets/imgs/background/cigarettes.jpg')}}"  alt="">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Cigarettes</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4  col-xs-6 col-6">
                                            <div class="product-cart-wrap mb-xs-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('shop')}}">
                                                            <img class="default-img"  src="{{asset('assets/imgs/background/accesories.jpg')}}"  alt="">
                                                            <img class="hover-img" src="{{asset('assets/imgs/background/ordernow.jpg')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html">Accessories</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        </div>

                        <!BEG OF THIRD PAGE>
    <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 6</div>
      <div class="mySlidess"> <img src="{{asset('assets/imgs/background/slider1.jpg')}}">  </div>


            <div class="quote">
       <!--   <h1>If not now , When?</h1>-->
      </div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 /6</div>
          <div class="mySlidess"> <img src="{{asset('assets/imgs/background/slider2.jpg')}}" ></div>


        </div>
        <div class="mySlides fade">
          <div class="numbertext">3/ 6</div>
          <div class="mySlidess">  <img src="{{asset('assets/imgs/background/slider3.jpg')}}">   </div>

        </div>




        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>

      </div>
      <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if(slideIndex > slides.length) {
            slideIndex = 1
          }
          slides[slideIndex - 1].style.display = "block";
          setTimeout(showSlides, 3000); // Change image every 8 seconds
        }
        </script>





<section class="section-padding">

            <div class="titleee">Featured Brands</div>
                        <hr></hr>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                        <div class="brandss">    <img class="img-grey-hover" src="{{asset('assets/imgs/banner/logo1.webp')}}" alt=""></div>
                        </div>
                        <div class="brand-logo">
                        <div class="brandss">    <img class="img-grey-hover" src="{{asset('assets/imgs/banner/logo2.jpg')}}" alt=""></div>
                        </div>
                        <div class="brand-logo">
                        <div class="brandss">     <img class="img-grey-hover" src="{{asset('assets/imgs/banner/logo3.jpg')}}" alt=""></div>
                        </div>
                        <div class="brand-logo">
                        <div class="brandss">     <img class="img-grey-hover" src="{{asset('assets/imgs/banner/logo4.jpg')}}" alt=""></div>
                        </div>

                    </div>
                </div>

        </section>
   </main>

</div>
