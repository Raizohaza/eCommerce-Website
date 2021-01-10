
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="http://localhost/project-ltw1\public\frontend\assets\images\icon.jpg">
        
        <title>Meow~Meow Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/style-starter.css')}}" >
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">

        <!-- Template CSS -->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
        <!-- Template CSS -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            .redd{
    color: #E00B0B 
}
        </style>



    </head>
    <body >

            <section class="w3l-banner-slider-main">
                <div class="top-header-content">
                    <header class="tophny-header">
                        <div class="container-fluid">
                            <div class="top-right-strip row">
                                <!--/left-->
                                <div class="top-hny-left-content col-lg-6 pl-lg-0">
                                    <span aria-hidden="true"></span> <span
                                                class="hignlaite"></span></a>
                                </div>
                                <!--//left-->
                                <!--/right-->
                                <ul class="top-hnt-right-content col-lg-6">

                                    <li class="button-log usernhy">
                                        <a class="btn-open" href="./role-register">
                                            <span class="fa fa-user" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li class="transmitvcart galssescart2 cart cart box_1">
                                        <form action="Cart" method="get" >
                                            <button class="top_transmitv_cart" type="submit" name="submit" value="">
                                                My Cart
                                                <span class="fa fa-shopping-cart"></span>
                                                                                          
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                                <!--//right-->
                                
                            </div>
                        </div>
                        <!--/nav-->
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid serarc-fluid">
                                <a class="navbar-brand" href="index.html">
                                    Meow~<span class="lohny">S</span>tore</a>
                                <!-- if logo is image enable this   -->
                                        <a class="navbar-brand" href="./welcome">
                                            <img src="/project-ltw1\public\frontend\assets\images\icon.jpg" alt="Meow~" title="Meow~" style="height:50px;" />
                                        </a> 
                                <!--/search-right-->
                                <div class="search-right">

                                    <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                                        <span class="search-text">Search here</span></a>
                                    <!-- search popup -->
                                    <div id="search" class="pop-overlay">
                                        <div class="popup">

                                            <form action="#" method="post" class="search-box">
                                                <input type="search" placeholder="Keyword" name="search" required="required"
                                                    autofocus="">
                                                <button type="submit" class="btn">Search</button>
                                            </form>

                                        </div>
                                        <a class="close" href="#">×</a>
                                    </div>
                                    <!-- /search popup -->
                                </div>
                                <!--//search-right-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fa fa-bars"> </span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#spCategory">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href='#spHOT'>Sản phẩm HOT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href='#spFav'>Mới</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href='./favorite/{{$getUserId}}'>Sản phẩm Yêu thích</a>
                                        </li>

                                        
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">Đăng xuất</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </nav>
                        <!--//nav-->
                    </header>
                    <div class="bannerhny-content">

                        <!--/banner-slider-->
                        <div class="content-baner-inf">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <h3>Mùa đông không lạnh
                                                    Giá giảm không phanh
                                                    </h3>
                                                    <br><p  class="mb-4 text-center">Khuyến mãi mùa đông lên đến 30%</p>
                                                <a href="./category/2" class="shop-button btn">
                                                    Shop Now
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item item2">
                                        <div class="container">
                                            <div class="carousel-caption">
                                            <h3>Không ăn cơm tró
                                                    Couple Meow~ có
                                                    </h3>
                                                    <br><p  class="mb-4 text-center">Khuyến mãi mùa tình yêu lên đến 40%</p>
                                                
                                                <a href="./category/1" class="shop-button btn">
                                                    Shop Now
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item item3">
                                        <div class="container">
                                            <div class="carousel-caption">
                                            <h3>Trang sức sương sương
                                                    Đảm bảo nàng thươngg
                                                    </h3>
                                                    <br><p  class="mb-4 text-center">Hàng loại trang sức kim cương mới</p>
                                                <a href="./category/5" class="shop-button btn">
                                                    Shop Now
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item item4">
                                        <div class="container">
                                            <div class="carousel-caption">
                                            <h3>Trang phục đi chơi
                                                    </h3>
                                                    <br><p  class="mb-4 text-center">Giảm giá mùa tết lên đến 20%</p>
                                                
                                                <a href="./category/4" class="shop-button btn">
                                                    Shop Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--//banner-slider-->
                        <!--//banner-slider-->
                        <div class="right-banner">
                            <div class="right-1">
                                <h4>
                                    Hàng loạt các trang phục HOT đang chờ bạn
                                    <br>Meow~ ngay</h4>
                            </div>
                        </div>

                    </div>

            </section>
            <!-- //w3l-banner-slider-main -->
            <section id="spCategory" class="w3l-grids-hny-2">
                <!-- /content-6-section -->
                <div class="grids-hny-2-mian py-5">
                    <div class="container py-lg-5">
                            
                        <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
                        <p class="mb-4 text-center">Handpicked Favourites just for you</p>
                        <div class="welcome-grids row mt-5">

                        @foreach ($data_category as $category)
                        
                            <div class="col-lg-2 col-md-4 col-6 welcome-image">
                                    <div class="boxhny13">
                                            <a href="./category/{{ $category->id }}">
                                                <img src="{{ asset('/frontend/assets/images/')}}/{{$category->Name}}.jpg" class="img-fluid" alt="" />
                                                <div class="boxhny-content">
                                                    <h3 class="title">View</h3>
                                                </div>
                                            </a>
                                    </div>
                                    <h4><a href="./category/{{ $category->id }}">{{$category->Name}}</a></h4>

                            </div>

                        @endforeach
                        </div>

                    </div>
                </div>
            </section>
            <!-- //content-6-section -->
            <section class="w3l-content-w-photo-6">
                <!-- /specification-6-->
                <div class="content-photo-6-mian py-5">
                        <div class="container py-lg-5">
                                <div class="align-photo-6-inf-cols row">
                                    
                                    <div class="photo-6-inf-right col-lg-6">
                                            <h3 class="hny-title text-left"></h3>
                                    </div>
                                    <div class="photo-6-inf-left col-lg-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            <!-- //specification-6-->    
            <!-- //video-6-->
            <section id="spHOT" class="w3l-ecommerce-main">
                <!-- /products-->
                <div class="ecom-contenthny py-5">
                    <div class="container py-lg-5">
                        <h3 class="hny-title mb-0 text-center">Top sản phẩm <span>HOT</span></h3>
                            <p class="text-center">Những sản phẩm thời trang mới nhất/Hot nhất</p>
                        <!-- /row-->

                       
                       
                                    <div class="ecom-products-grids row mt-lg-5 mt-3">

@foreach($data_product as $data)
    @if($data->id < 5)
        @foreach($data_favorite as $check)
                                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                                            <div class="product-grid2 transmitv">
                                                <div class="product-image2">
                                   
                                                <a href="./category/product/{{ $data->id }}">
                                                    <img class="pic-1 img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$data->Image}}">
                                                    <img class="pic-2 img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$data->Image}}">
                                            
                                                </a>
                                      
                                                <ul class="social">
                                                    <li><a href="./category/product/{{ $data->id }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
            @if($data->id == $check->id)
                                                    <li id="favID"><a id="favField" href="./category/product/{{ $data->id }}" data-tip="Favorite"><span class="fa fa-heart redd "></span></a>
                                                    </li>
            @else
                                                    <li id="favID"><a id="favField" href="./category/product/{{ $data->id }}" data-tip="Favorite"><span class="fa fa-heart "></span></a>
                                                    </li>
            @endif
        @endforeach
                                                </ul>
                                                <div class="transmitv single-item">
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="transmitv_item" value="{{$data->Name}}">
                                                        <input type="hidden" name="amount" value="{{$data->Price}}">
                                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                            Add to Cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="./category/product/{{ $data->id }}">{{ $data->Name }} </a></h3>
                                                <span class="price"><del>{{$data->Price}}</span>
                                            </div>
                                        </div>
                                    </div>
    @endif
@endforeach  
                            
                       
                        <!-- //row-->
                    </div>
                </div>
            </section>
            <!-- //products-->
          
            <section id="spFav" class="w3l-ecommerce-main">
                <!-- /products-->
                <div class="ecom-contenthny py-5">
                    <div class="container py-lg-5">
                        <h3 class="hny-title mb-0 text-center">Top sản phẩm <span>Mới</span></h3>
                        <p class="text-center">Những sản phẩm thời trang mới nhất</p>
                        <!-- /row-->

                       
                       
                           <div class="ecom-products-grids row mt-lg-5 mt-3">

                           @foreach($data_product as $fa)
                                @if($fa->id < 5 )
                            <div class="col-lg-3 col-6 product-incfhny mt-4">
                                <div class="product-grid2 transmitv">
                                    <div class="product-image2">
                                   
                                        <a href="./category/product/{{ $fa->id }}">
                                            <img class="pic-1 img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$fa->Image}}">
                                            <img class="pic-2 img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$fa->Image}}">
                                            
                                        </a>
                                      
                                        <ul class="social">
                                                <li ><a href="./category/product/{{ $fa->id }}"  data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
                                                <li id="favID"><a id="favField" href="./category/product/{{ $fa->id }}" data-tip="Favorite"><span class="fa fa-heart redd "></span></a>
                                                </li>
                                        </ul>
                                        <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="{{$fa->Name}}">
                                                <input type="hidden" name="amount" value="{{$fa->Price}}">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="./category/product/{{ $data->id }}">{{ $fa->Name }} </a></h3>
                                        <span class="price"><del>{{$fa->Price}}</span>
                                    </div>
                                </div>
                            </div>
                                @endif
                            @endforeach  
                        </div>
                       
                        <!-- //row-->
                    </div>
                </div>
            </section>
            <!-- //content-6-section -->

            <!-- //post-grids-->
            


            <section class="w3l-footer-22">
                <!-- footer-22 -->
                <!-- //titels-5 -->
                <!-- move top -->

                <script>
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function () {
                        scrollFunction()
                    };

                    function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            document.getElementById("movetop").style.display = "block";
                        } else {
                            document.getElementById("movetop").style.display = "none";
                        }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                      <span class="fa fa-angle-double-up"></span>
                  </button>
                <!-- /move top -->
            </section>

        <!-- </div> -->
    </body>
</html>
<script src="{{asset('/frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/frontend/assets/js/jquery-2.1.4.min.js')}}"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
	// 	$('#customerhnyCarousel').carousel({
	// 			interval: 5000
    // });
  </script>
 <!-- cart-js -->
 <script src="{{asset('/frontend/assets/js/minicart.js')}}"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="{{asset('/frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{asset('/frontend/assets/js/bootstrap.min.js')}}"></script>


