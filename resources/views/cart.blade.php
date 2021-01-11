<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{asset('/frontend/assets/images/icon.jpg')}}">
    <title>Giỏ hàng</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  --}}
     
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
            .rr{
                text-align: center;
                
            }
            </style>


</head>
<body>
    
        <div class="row mb-4">
            <div class="col-sm-12">
            <div class="breadcrumb">
                <a href="../"><i class="icon fa fa-home"></i></a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-right">Thông tin giỏ hàng</strong>
            </div>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4 class="redd rr font-size:30px">Chi tiết đơn hàng</h4>
                    <table class="table" style="color:#111;">
                    <tbody>
                        @if($purchase_details ?? '')
                        @foreach ($purchase_details ?? '' ?? '' as $purchase_detail)
                        <tr>
                            <td rowspan="2" style="width:100px;">
                                    <img class="img-fluid" src="{{asset('/frontend/assets/images/')}}/{{ $purchase_detail->Image}}" alt="{{ $purchase_detail->Image }}">
                                <div>
                                    <form action="#RemoveItem" id="formRemoveItem" method="POST">
                                        {{-- <input type="hidden" name="__ProductUpc" value="0019711001"> --}}
                                        <a href="#Remove" class="js-removeFromCart">Xóa</a>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <p class="mb-1">
                                    <a href="https://yame.vn/shop/best/ao-thun-nam-y2010-basic-bg03-0019711?c=Tr%E1%BA%AFng">{{ $purchase_detail->Name }}</a>
                                </p>
                                <p class="mb-0"> $ <span class="text-black">{{$purchase_detail->Price}}</span></p>
                            </td>
                        </tr>
                        <tr id="deleteItem">
                            <td>
                                <div>
                                    <form action="" class="btn-submit" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="{{ $purchase_detail->id + $purchase_detail->id }}" value="{{ $purchase_detail->id }}">
                                        <div class="d-flex">
                                            <div class="w-100 flex-fill pr-2"><input type="text" class="form-control" value="{{ $purchase_detail->Quantity }}" name="__QtyUpdate"></div>
                                            <div class="flex-fill"><div class="flex-fill">
                                                <div class="form-group">
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                = <span>đ</span> <b>{{ $purchase_detail->SubTotal }}</b>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        <tr class="rr">
                            <td class="text-right">
                                Tổng:
                            </td>
                            <td class="text-left">
                                <div id="grandTotal"><span>$</span> <b>{{$sum}}</b></div>
                            </td>
                        </tr>
                    </tbody></table>
        
                </div>
        
                <div class="col-sm-12 col-md-6">
                    <h4 class="redd rr font-size:30px"> Thông tin người mua/nhận hàng</h4>
                    <form id="formPlaceOrder" action="#PlaceOrder" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="txtCustomerName">Tên</label>
                            <input type="text" class="required form-control" id="txtCustomerName" name="txtCustomerName" placeholder="Tên người nhận">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Điện thoại liên lạc</label>
                            <input type="text" class="required form-control" id="txtPhone" name="txtPhone" placeholder="Số điện thoại">
                            <input type="hidden" name="txtEmail" value="" id="txtEmail">
                        </div>                   
                        
                        <div class="form-group" id="pnlAddress" style="">
                        <label>
                                Nhận hàng tại:
                                </label>
                            <input type="text" class="required form-control" id="txtAddressLine" name="txtAddressLine" placeholder="Địa chỉ nhận hàng">
                        </div>
                        <div class="form-group" id="pnlChoseShop" style="display: none;">
                        </div>      
                        <div class="form-group">
                            <label for="txtNote">Ghi chú</label>
                            <textarea rows="2" class="form-control" id="txtNote" name="txtNote"></textarea>
                        </div>

                    </form>
                    <button class="js-btnPlaceOrder btn btn-info fw" id="btnDatHang" style="width:100%;">Đặt hàng</button>

                    <hr>
                </div>
            </div>

        <link rel="stylesheet" href="{{asset('/frontend/assets/css/CssFramework.css')}}">


        <link rel="stylesheet" href="{{asset('/frontend/assets/css/CssFramework.css')}}">
    
    
    {{-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $("#").click(function(e){
            
            e.preventDefault();
    
            var __QtyUpdate = $('input[name={{ $purchase_detail->id + $purchase_detail->id }}]').val();
            var url = '{{ url('#') }}';
            alert(JSON.stringify(__QtyUpdate, null, 4));
            console.log(JSON.stringify(__QtyUpdate, null, 4))
            $.ajax({
               url:url,
               method:'POST',
               data:{
                      Quantity:__QtyUpdate
                    },
               success:function(response){
                  if(response.success){
                      alert(response.message) //Message come from controller
                  }else{
                      alert("Error")
                  }
               },
               error:function(error){
                  console.log(error)
               }
            });
        });
    
    </script> --}}

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#btnDatHang").click(function(e){
        
        e.preventDefault();

        var nameCus = $('#txtCustomerName').val();

        var telCus = $('#txtPhone').val();

        var addressCus = $('#txtAddressLine').val();

        var noteCus = $('#txtNote').val();

        var _purchaseId = {{ $_purchaseId}};
        var url = '{{ url('updatePurchase') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                    NameCus:nameCus, 
                    TelCus:telCus,
                    AddressCus:addressCus,
                    NoteCus:noteCus,
                    PurchaseId:_purchaseId
                },
           success:function(response){
              if(response.success){
                  alert(response.message) //Message come from controller
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });

        </script>
    </body>
</html>