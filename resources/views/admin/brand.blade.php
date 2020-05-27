@extends('admin.layout')

@section('layout')

<style>
  .fade{
    animation: fadeout 3.5s;
  }
  .fade2{
    animation: fadeout 12s;
  }


  @keyframes fadeout{
    from{opacity: 1;}
    to{opacity: 0;}
  }
</style>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Add Brand
              <small>Homeu admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active"><a href="{{ route('getBrandList') }}">Brand</a></li>
            <li class="breadcrumb-item active">Add Brand</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row product-adding">
      <div class="col-xl-6">
        <div class="card">
          <div class="card-header">
            <h5>General</h5>
            @if(session()->has('success'))
            <div class="highlight fade" style="opacity: 0;position:fixed;left:55%;top:15%;z-index: 999;left:50%;top:15%;padding:5px 60px 5px 60px;background-color:#bfbfd6;border-radius: 20px;">
              <lable><b>{{ session()->get('success') }}</b></lable>
            </div>
            @elseif(session()->has('same'))
            <div class="highlight fade2" style="opacity: 0;position:fixed;left:55%;top:15%;z-index: 999;left:50%;top:15%;padding:5px 60px 5px 60px;background-color:#bfbfd6;border-radius: 20px;">
              <lable><b>{{ session()->get('same') }}</b></lable>
            </div>
            @endif
          </div>
          <div class="card-body">
            <div class="digital-add needs-validation">
              <form id="form" action="{{ route('addBrand') }}" method="post" enctype="multipart/form-data" class="col-form-label pt-0"> 
               @csrf  
              <label>Brand Name</label>
              <div style="margin-bottom: 10px">
                <input class="form-control" type="text" name="brand" required="">
              </div>                   
              <label class="col-form-label pt-0">Brand Logo Upload</label>
              <div class="dropzone digits dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                <input required class="mb-0 f-w-600" type="file" id="image" name="image" accept="image/gif, image/jpeg, image/png">
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-header">
            <h5>Image Preview</h5>
          </div>
          <div class="card-body">
            <div class="digital-add needs-validation">
              <div class="form-group mb-0">
                <div class="description-sm">
                  <div id="imglist" style="text-align: center">    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="col-xl-12" style="text-align: center">
        <div class="card">
          <div class="card-header">
            <button id="submit" type="submit" class="btn btn-primary">Add</button>
            <input id="discard" class="btn btn-light" type="reset" value="Discard"/>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
<script>
$(document).ready(function(){
  function readURL(input) {
    $('#imglist').html("");
    for(var a = 0;a<input.files.length;a++){
      if (input.files && input.files[a]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imglist').append("<img src="+e.target.result+" width=300 height=300>");
        }
        reader.readAsDataURL(input.files[a]); // convert to base64 string
      }
    }
  }

  $("#discard").click(function(){
    location.reload();
  });

  $("#image").change(function() {
    readURL(this);
  }); 

});
</script>
@endsection