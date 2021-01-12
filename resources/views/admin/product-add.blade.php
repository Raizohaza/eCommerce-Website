@extends('layouts.master')

@section('title')
Thêm mới Sản phẩm
@endsection

@section('feature-title')
Thêm mới Sản phẩm    
@endsection

@section('feature-description')
Thêm mới Sản phẩm. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('custom-css')
<style>
    .preview-upload {
        border: 1px dashed red;
        padding: 10px;
    }
    .preview-upload img {
        width: 100%;
    }
</style>
@endsection

@section('content')
<form method="post" action="{{ route('admin.store') }}">
    {{ csrf_field() }}
 
    <div class="form-group">
        <label for="Name">Tên sản phẩm</label>
        <input type="text" class="form-control" id="Name" name="Name" value="{{ old('Name') }}">
    </div>
    <div class="form-group">
        <label for="Price">Giá bán</label>
        <input type="number" class="form-control" id="Price" name="Price" value="{{ old('Price') }}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="Image" type="file" name="Image">
            <div class="preview-upload">
                <img id='Image-upload'/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="Description">Thông tin</label>
        <input type="text" class="form-control" id="Description" name="Description" value="{{ old('Description') }}">
    </div>
    <div class="form-group">
        <label for="created_at">Ngày tạo mới</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{ old('created_at') }}" data-mask-datetime>
    </div>
    <!-- <select name="sp_trangThai" class="form-control">
        <option value="1" {{ old('sp_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('sp_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select> -->
    <button class="btn btn-primary">Save</button>
</form>
@endsection

@section('custom-scripts')
<script>
    // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#Image-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
    $("#Image").change(function(){
        readURL(this);
    }); 
</script>
@endsection