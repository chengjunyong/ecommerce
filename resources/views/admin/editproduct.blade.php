@extends('admin.layout')

@section('layout')

<style>
	.overlay {
		position: absolute;
	   top: 40%;
	   left: 40%;
	   opacity: 0;
	}

	.images{
  		display:block;
  		width:150px;
  		height:150px;
	}

	.container{
		position:relative;
		width: 50%;
  		max-width: 150px;
  		margin: 0px 0px 0px 0px;
    	padding: 0px 0px 0px 0px;
	}

	.container:hover .overlay{
		opacity: 1;
	}

</style>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
	    <div class="page-header">
	        <div class="row">
	            <div class="col-lg-6">
	                <div class="page-header-left">
	                    <h3>Edit Product
	                        <small>Homeu Admin Panel</small>
	                    </h3>
	                </div>
	            </div>
	            <div class="col-lg-6">
	                <ol class="breadcrumb pull-right">
	                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
	                    <li class="breadcrumb-item active">Edit Product</li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Container-fluid Ends-->

	<!-- Container-fluid starts-->
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Edit Product</h5>
	                </div>
	                <div class="card-body">
	                    <div class="row product-adding">
	                        <div class="col-xl-5">
	                            <div class="add">
	                                <div class="row">
	                                		<div class="col-xl-12" style="margin: 0 0 10px 0; padding: 0 0 0 0;"><h4>Current Image Uploaded</h4></div>
	                                		@if($images)
	                                    	@foreach($images as $image)
	                                    		<div class="col-3 container">
	                                    			<img class="images" src="{{ Storage::url($image->path) }}">
	                                    			<i class="far fa-times-circle overlay" style="font-size:35px;" value="{{ $image->id }}"></i>
	                                    		</div>
	                                    	@endforeach
	                                    @endif                                                              	                                 
	                                </div>
	                                <div class="row" style="margin: 15px 0 15px -15px">
	                                		<h4>Upload Another Photo</h4>	
	                                </div>
	                                <form id="editform" class="needs-validation add-product-form" action="{{ route('editPostProduct') }}" method="post" enctype="multipart/form-data">
	                             		<div>
	                                		<input type="file" name="image[]" multiple>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-7">
	        
	                            		@csrf
	                                <div class="form">
	                                    <div class="form-group mb-3 row">
	                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Product Name</label>
	                                        <input class="form-control col-xl-8 col-sm-7" type="text" required="" value="{{ $product_detail[0]->name }}" name="product_name"> 
	                                    </div>
	                                    <div class="form-group mb-3 row">
	                                        <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0"><span>*</span> SKU</label>
	                                        <input class="form-control col-xl-8 col-sm-7" type="text" required="" value="{{ $product_detail[0]->sku }}" name="product_sku">
	                                    </div>
	                                </div>
	                                <input hidden type="text" name="product_id" value="{{ $product_detail[0]->id }}">
												<div class="form">
	                                    <div class="form-group mb-3 row">
	                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Category</label>
	                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category">
	                                            @foreach($category_list as $result)
	                                            		@if($result->category_id == $product_detail[0]->category_id)
	                                            			<option value='{{ $result->category_id }}' selected>
	                                            				{{ $result->category_name }}
	                                            			</option>
	                                            		@else
	                                            			<option value='{{ $result->category_id }}'>
	                                            				{{ $result->category_name }}
	                                            			</option>
	                                            		@endif
	                                            @endforeach
	                                        </select>
	                                    </div>
	                                </div>	
	                                <div class="form">
	                                    <div class="form-group row">
	                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Stock Status</label>
	                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
		                                  		<label class="d-block" for="unlimited">
		                                  			@if($product_detail[0]->stock == -1)
		                                      			<input class="radio_animated" id="unlimited" type="radio" name="s_status" checked>Unlimited
		                                  			@else
		                                  				<input class="radio_animated" id="unlimited" type="radio" name="s_status">Unlimited
		                                  			@endif
		                                  		</label>
		                                  		<label class="d-block" for="limited" style="margin-left: 10px;">
		                                  			@if($product_detail[0]->stock != -1)
		                                      			<input class="radio_animated" id="limited" type="radio" name="s_status" checked>Limited
		                                  			@else
		                                  				<input class="radio_animated" id="limited" type="radio" name="s_status">Limited
		                                  			@endif
		                                  		</label>
		                              		</div>

	                                    </div>
	                                    <div class="form-group mb-3 row">
	                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Quantity Stock</label>
	                                        @if($product_detail[0]->stock == -1)
	                                        	<input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="" readonly name="stock">                          
	                                    	 @else
	                                    	 	<input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="" name="stock" value="{{ $product_detail[0]->stock }}">
	                                    	 @endif
	                                    </div>
	                                    <div class="form-group mb-3 row">
			                              	<label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Product Price</label>
			                              	<input name="price" class="form-control col-xl-8 col-sm-7" id="price_custom" type="number" required step=".01" min=0 value="{{ $product_detail[0]->price }}">
			                          		</div>
	                                </div>
	                  					<div class="form"> 
	                  						<div class="form-group row">
	                  							<label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0"><span>*</span> Description</label>
	                  							<textarea rows=10 cols="80" name="description">{{ $product_detail[0]->description }}</textarea>
	                  						</div>
	                  					</div> 
	                  					<div class="form">
	                  						<div class="form-group mb-3 row">
			                 						<input class="btn btn-primary" type="submit" value="Edit">
			                 						<input class="btn btn-light" type="reset" value="Discard"> 
			                 					</div>     
		                 					</div>     
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Container-fluid Ends-->

	</div>
<script>
$(document).ready(function(){
	var image = []; 

	$(".overlay").click(function(){
		// image.push($(this).attr("value"));
		$(this).parents().eq(0).remove();
		$("#editform").append('<input type=hidden name=removeImage[] value="'+ $(this).attr("value")+'">');	

	});

	$("#unlimited").click(function(){
		$("#validationCustom01").attr("readonly",true);
		$("#validationCustom01").val("");
	});

	$("#limited").click(function(){
		$("#validationCustom01").attr("readonly",false);
	});



});
</script>
@endsection