@extends('admin.layout')

@section('layout')
<style>
	span{
		font-size:16px;
	}
	.row{
		margin:10px 10px 30px 10px;
	}
</style>
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
	    <div class="page-header">
	        <div class="row">
	            <div class="col-lg-6">
	                <div class="page-header-left">
	                    <h3>Banner
	                        <small>Homeu Admin Panel</small>
	                    </h3>
	                </div>
	            </div>
	            <div class="col-lg-6">
	                <ol class="breadcrumb pull-right">
	                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
	                    <li class="breadcrumb-item active">Add Banner</li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Container-fluid Ends-->
	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
          	<h4>Banner Slider</h4>
          </div>

          <form method="post" action="{{ route('postBannerSlider') }}" enctype="multipart/form-data" >
          	@csrf
	          <div class="card-body">
	          	<div class="row">
		          	<div class="col-md-6">
		          		<span>Title 1</span><input type="text" class="form-control" name="title1" placeholder="Bannner first line text" />
		          	</div>
		          	<div class="col-md-6">
		          		<span>Title 2</span><input type="text" class="form-control" name="title2" placeholder="Bannner second line text" />
		          	</div>
		          </div>

		          <div class="row">
		          	<div class="col-md-6">
		          		<span>Banner Image Upload <b>(Recommended Image Size 1200x800)</b></span><input type="file" accept="image/*" name="banner_image" class="form-control" required>
		          	</div>
		          	<div class="col-md-6">
		          		<span>Target URL</span><input type="text" name="target_url" class="form-control" placeholder="https://google.com">
		          	</div>
		          </div>

		          <div class="row">
		          	<div class="col-md-12">
		          		<span>Description</span><textarea class="form-control" name="description" rows="5" placeholder="Not Necessary"></textarea>
		          	</div>
		          </div>

		          <div class="row">
		          	<div class="col-md-12" style="text-align:center">
		          		<input type="submit" value="Upload" class="btn btn-primary"/>
		          		<input type="reset" value="Reset" class="btn btn-secondary" />
		          	</div>
		          </div>
	          </div>
	        </form>

        </div>
      </div>
    </div>
  </div>


</div>




@endsection

<!-- 1200 x 800 -->
