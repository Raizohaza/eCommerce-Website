<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     {{-- <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script> --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
     
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb">
                    <a href="#Home"><i class="icon fa fa-home"></i></a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Thông tin giỏ hàng của bạn</strong>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4>Chi tiết đơn hàng</h4>
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
                                <p class="mb-0">Trắng, S / <span class="text-black">185,000</span></p>
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
                        <tr>
                            <td class="text-right">
                                Tổng:
                            </td>
                            <td>
                                <div id="grandTotal"><span>đ</span> <b>185,000</b></div>
                            </td>
                        </tr>
                    </tbody></table>
        
                </div>
        
                <div class="col-sm-12 col-md-6">
                    <h4>Người mua/nhận hàng</h4>
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
                        <div>
                            <div class="radio">
                                <label>
                                    Nhận hàng tại nhà/công ty/bưu điện
                                </label>
                            </div>
                            <div class="radio">   
                            </div>
                        </div>
                        <div class="form-group" id="pnlAddress" style="">
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
        </div>

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

        // alert(nameCus);
        // alert(telCus);
        // alert(addressCus);
        // alert(noteCus);
        var url = '{{ url('postinsert') }}';
        alert(url);


        $.ajax({
           url:url,
           method:'POST',
           data:{
                  Code:nameCus, 
                  Chief:telCus
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