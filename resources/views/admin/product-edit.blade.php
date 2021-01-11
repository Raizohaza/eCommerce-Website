@extends('layouts.master')

@section('title')
			Edit-Registered User:
@endsection()

@section('content')
			
<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
			<div class="card">
				<div class="card-header">
					<h3>Edit category's</h3>
				
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> <!--col-md-8 means 8 row  and form put into one row and updtate the button below-->
						<form action="../role-products-update/{{ $products->id}}" method="POST" ><!-- here we update the button-->
								
                                {{ csrf_field() }}
								{{ method_field('PUT') }}
                            <input type="hidden" name="_method" value="PUT" />
                            <!-- <div class="form-group">
                                <label for="l_ma">Loại sản phẩm</label>
                                <select name="l_ma" class="form-control">
                                    @foreach($categories as $loai)
                                        @if(old('Catid', $products->Catid) == $loai->id)
                                        <option value="{{ $loai->id }}" selected>{{ $loai->Name }}</option>
                                        @else
                                        <option value="{{ $loai->id }}">{{ $loai->Name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="Name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="Name" name="Name" value="{{ old('Name', $products->Name) }}">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('/frontend/assets/images/'. $products->Image) }}" width = 100px height = 100px; />
                                <div class="file-loading">
                                    <label>Hình đại diện</label>
                                    <input id="Image" type="file" name="Image">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <input type="text" class="form-control" id="Description" name="Description" value="{{ old('Description', $products->Description) }}">
                            </div>
                            <div class="form-group">
                                <label for="Price">Giá</label>
                                <input type="number" class="form-control" id="Price" name="Price" value="{{ old('Price', $products->Price) }}">
                            </div>
                            

				     	<button type="Submit" class="btn btn-success">Submit</button>
				     	<a href="../role-products" class="btn btn-danger">Cancel</a>
					    </form>
						</div>
					</div>

				</div>
					
			</div>
		</div>
	</div>
</div>
			
@endsection()

@section('scripts')


@endsection()