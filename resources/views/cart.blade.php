<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <tbody><tr>
                                <td rowspan="2" style="width:100px;">
                                        <img class="img-fluid" src="{{asset('/frontend/assets/images/S01.JPG')}}" alt="Áo Thun Thiết Kế BG03">
                                    <div>
                                        <form action="#RemoveItem" id="formRemoveItem" method="POST">
                                            <input type="hidden" name="__ProductUpc" value="0019711001">
                                            <a href="#Remove" class="js-removeFromCart">Xóa</a>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1">
                                        <a href="https://yame.vn/shop/best/ao-thun-nam-y2010-basic-bg03-0019711?c=Tr%E1%BA%AFng">Áo Thun Thiết Kế BG03</a>
                                    </p>
                                    <p class="mb-0">Trắng, S / <span class="text-black">185,000</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <form action="#UpdateQty" method="POST">
                                            <input type="hidden" name="__ProductUpc" value="0019711001">
                                            <div class="d-flex">
                                                <div class="w-100 flex-fill pr-2"><input type="text" class="form-control" value="1" name="__QtyUpdate"></div>
                                                <div class="flex-fill"><button type="submit" class="btn btn-outline-dark btn-sm">Update</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    = <span>đ</span> <b>185,000</b>
                                </td>
                            </tr>
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
                    <button class="js-btnPlaceOrder btn btn-info fw" style="width:100%;">Đặt hàng</button>
                    <hr>
                </div>
            </div>
    
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/CssFramework.css')}}">
    </div>
</body>
</html>