
<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2205398-24"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-2205398-24');
    </script>

    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "3xdyrg1i0n");
    </script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="xFnIbRiqlbUWt2-5yqv6TejVhQ1oYB1hZiZ1jRXLzHw" />
    <link rel="icon" type="image/png" href="http://localhost/project-ltw1\public\frontend\assets\images\icon.jpg">

    <title>Meow~Meow Store</title>
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,700,500italic,700italic,900&subset=latin,greek,greek-ext,vietnamese,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    

    <link href="https://res.yame.vn/1/Content/CssFramework.css" rel="stylesheet"/>

    <link href="https://res.yame.vn/1/Content/theme1/fonts/icomoon/style.css" rel="stylesheet"/>

    <link href="https://res.yame.vn/1/Content/theme1.css" rel="stylesheet"/>

    <link href="https://res.yame.vn/1/Content/Custom.css" rel="stylesheet"/> 
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
        </style>
</head>
<body>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=1772218379751100&ev=PageView&noscript=1" />
    </noscript>

<div class="row mb-4">
    <div class="col-sm-12">
    <div class="breadcrumb">
            <a href="../../"><i class="icon fa fa-home"></i></a>
            <span class="mx-2 mb-0">/</span>
            <a href="../../">Home</a>
            <span class="mx-2 mb-0">/</span>
            <a href="../{{$data_product->Catid}}">Page</a>
            <span class="mx-2 mb-0">/</span>
            <strong class="text-black">{{$data_product->Name}}</strong>
            

        </div>
    </div>
</div>

<div class="row product-info">
    <div class="col-md-4 col-12">
        <div class="row">

            <div class="col-9" style="padding-right:0px;">
                <div class="mb-4">
                    <img class="img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$data_product->Image}}" alt="{{$data_product->Name}}" />
                </div>


            </div>
            <div class="col-3">
                    <div class="circular mb-2">
                        <a href="./{{ $data_product->id }}">
                            <img class="img-fluid" src="{{ asset('/frontend/assets/images/')}}/{{$data_product->Image}}" alt="" />
                        </a>
                    </div>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div class="ditem">
            <div class="row">
                <div class="col-md-8">
                        <p class="text-black">Free Ship</p>

                        <!-- <h5 class="price" style="text-decoration: line-through;">$1673</h5> -->
                        <h5 class="price"><span>$<span>{{$data_product->Price}}</span></span></h5>
                        <!-- <h5 class="text-black display-6"><span>Tiết kiệm <span class="">-50,000 đ</span></span></h5> -->
                    <div class="row mt-4">
                            <div class="col-12 mb-2">
                                <b>...</b><br />
                                <span class="small">...</span>
                            </div>
                            <div class="col-12 mb-4">
                                

                                </div>
                            </div>
                        </div>
                </div>
                    <div class="col-md-4 mb-8">
                        <h5 class="hny-title mb-0 text-center">Mô tả sản phẩm</h5>
                        {{$data_product->Description}}                      
                    </div>
            </div>
        </div>
    </div>
</div>





    




<div class="row">
           
        <div class="col-12 text-center">
            <div class="card-columns twocols">
            @foreach($data_images as $imagess)         
                        <div class="card mb-4">
                            <img class="img-fluid text-center detailImageItem" src="{{ asset('/frontend/assets/images/')}}/{{$imagess->Name}}" alt="" style="margin: auto;" />
                        </div>
            @endforeach 
            </div>

        </div>
       
</div>


<section class="w3l-customers-sec-6">
                <div class="customers-sec-6-cintent py-5">
                    <!-- /customers-->
                    <div class="container py-lg-5">
                            <h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
                            <p class="mb-5 text-center">What People Say</p>
                        <div class="row customerhny my-lg-5 my-4">
                            <div class="col-md-12">
                                <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                                    </ol>
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        
                                        <div class="carousel-item active">
                                            <div class="row">
                                           
                                                <div class="col-md-3">
                                                    <div class="customer-info text-center">
                                                    
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">				
                                                                day la cmt</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="{{asset('/frontend/assets/images/c1.jpg')}}" class="img-fluid" alt="">
                                                            <h5>Smith Roy</h5>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                                                                                                 
                                        </div>
                                        
                                    </div>                                                                                                            
                                </div>
                                <!--.Carousel-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //customers-->
            <section class="w3l-subscription-6">
                <!--/customers -->
                <div class="subscription-infhny">
                    <div class="container-fluid">

                        <div class="subscription-grids row">
                        </div>

                        <!--//customers -->
                    </div>
            </section>
            <!-- //customers-6-->



<a href="#0" class="cd-top">Top</a>

    </div>

    <script src="https://res.yame.vn/2021/Content/JsFramework.js"></script>

    <script src="https://res.yame.vn/2021/Content/theme1.js"></script>

    <script src="https://res.yame.vn/2021/Scripts/app.js"></script>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-auth.js"></script>

<script>
    // Your web app's Firebase configuration
    // var firebaseConfig = {
    //     apiKey: "AIzaSyA-Do1DL6kUeFID4A_ejzZpx8kAWgyrfsI",
    //     authDomain: "yame-5cf79.firebaseapp.com",
    //     databaseURL: "https://yame-5cf79.firebaseio.com",
    //     projectId: "yame-5cf79",
    //     storageBucket: "yame-5cf79.appspot.com",
    //     messagingSenderId: "98846041174",
    //     appId: "1:98846041174:web:c253c8e2908bc8b57187f7",
    //     //languageCode: "vn"
    // };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    //set language
    firebase.auth().languageCode = 'vi';
</script>

    <script>
        jQuery(function ($) {
            "use strict";

            //Preloader
            $(window).on('load', function () {

            });
        });

        $(document).ready(function () {
            firebase.auth().onAuthStateChanged(function (user) {
                if (user) {

                } else {

                }
            });
        });

        function __doLogout() {
            firebase.auth().signOut();
            window.location.replace($(location).attr('protocol') + '//' + $(location).attr('host') + "/member/dologout");
        }

    </script>

    
    <script type="text/javascript">
        var google_tag_params = {
            dynx_itemid : '4b83ac48-af13-f37d-b502-00173e1241cd',
            dynx_itemid2 : 'ao-thun-tn-r-ai-hanh-kha-ver1-0019965',
            dynx_pagetype : 'offerdetail',
            dynx_totalvalue : 200000
        };
        /* <![CDATA[ */
        var google_conversion_id = 880703804;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display: inline;">
            <img height="1" width="1" style="border-style: none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/880703804/?value=0&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>



    <script type="text/javascript">

        $(document).ready(function () {
            $('#formAddToCart').submit(function () {
               
                $(this).validate();
                if (!$(this).valid()) {
                    return false;
                }
                return true;
            });

            $('.js-addToCart').click(function () {
               
               
                var form = $('#formAddToCart');
                form.validate();
                if (!form.valid()) {
                    return false;
                }

                $('#__IsCheckOut').val("0");
                form.submit();
                return true;
            });

            $('.js-addVariantToCart').click(function () {

               
                var form = $($(this).parent());
                var url = form.attr("action");

                var __ProductId = form.find("input[name='__ProductId']").val();
                var __VariantId = form.find("input[name='__VariantId']").val();
                var __Category = form.find("input[name='__Category']").val();

                var posting = $.post(url, { __VariantId: __VariantId, __ProductId: __ProductId, __Category: __Category });
                // Put the results in a div
                posting.done(function (data) {
                    var notify = $.notify({
                        message: '<strong>Cập nhật giỏ hàng</strong> <br/> Đã thêm sản phẩm vào giỏ hàng.'
                    }, {
                        type: 'success',
                        allow_dismiss: true,
                        z_index: 999999,
                        delay: 2000,
                        timer: 500,
                        offset: {
                            x: 0,
                            y: 70
                        },
                        spacing: 10,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                    $('#NoOfItemsInCart').html(data);
                });

                return false;
            });

            $('#btnCheckSize').click(function (e) {
                var form = $("#frmCheckSize");
                var url = form.attr("action");
                //console.log(url);
                var posting = $.post(url, {
                    txtCanNang: form.find("input[name='txtCanNang']").val(),
                    txtChieuCao: form.find("input[name='txtChieuCao']").val(),
                    txtTypeOfProduct: form.find("input[name='txtTypeOfProduct']").val(),
                    txtProductForm: form.find("input[name='txtProductForm']").val()
                });
                posting.done(function (data) {
                    $('#divCheckSizeResult').html(data);
                });
            });

        
            //Audio
            //Howler.autoUnlock = true;
            ////~/PName/0019801.mp3
            //var sound = new Howl({
            //    src: ['../../PName/0019801.mp3'],
            //    autoplay: true,
            //    loop: true,
            //    volume: 0.5,
            //    onend: function () {
            //        console.log('Finished!');
            //    },
            //    onplayerror: function () {
            //        console.log('onplayerror');
            //        sound.once('unlock', function () {
            //            console.log('unlock');
            //            sound.play();
            //        });
            //    }
            //});
            //sound.play();

            $('#audioControl i').on('click', function () {
                if ($(this).hasClass('fa-volume-up')) {
                    $(this).toggleClass('fa-volume-up fa-volume-off');
                    //pause playing
                    $('audio').trigger('pause');
                } else {
                    $(this).toggleClass('fa-volume-off fa-volume-up')
                    $("audio").prop("currentTime", 0);
                    $('audio').trigger('play');
                }
            });
        });

    </script>


    


    
</body>

</html>
