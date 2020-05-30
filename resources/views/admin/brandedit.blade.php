@extends('admin.layout')

@section('layout')

@if(session()->has('success'))
  <script>alert("{{ session()->get('success') }}")</script>
@endif
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="page-header">
          <div class="row">
              <div class="col-lg-6">
                  <div class="page-header-left">
                      <h3>Edit Brand
                          <small>Homeu Admin Panel</small>
                      </h3>
                  </div>
              </div>
              <div class="col-lg-6">
                  <ol class="breadcrumb pull-right">
                      <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item active">Edit Brand</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Brand</h5>
            </div>

            <form action="{{ route('postBrandEdit') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="text" value="{{ $brand->id }}" hidden name="id">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4" >
                    <h4>Current Logo Image</h4>
                    <img src="{{ Storage::url($brand->path) }}" height=250 width=250>
                  </div>
                  <div class="col-sm-8">
                    <h4>Brand Name</h4>
                    <input class="form-control" type="text" required name="brand" value="{{ $brand->brand }}" style="width:75%;margin-bottom:10px">
                    <input class="btn btn-primary" type="submit" value="Edit">
                    <button type="button" id="discard" class="btn btn-alert">Discard</button>
                  </div>
                  <div class="col-sm-4">
                    <h4 style="margin-top: 20px">New Logo Image</h4>
                    <input id="brand-logo" required class="form-control" type="file" name="image" style="width:75%;margin-bottom: 10px">
                    <div id="preview">
                    </div>
                  </div>
                </div>
              </div>
            </form>

        </div>
      </div>
    </div>
  </div>

</div>
<script>
$(document).ready(function(){

  function readURL(input) {
    $('#preview').html("");
    for(var a = 0;a<input.files.length;a++){
      if (input.files && input.files[a]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#preview').append("<img src="+e.target.result+" width=250 height=250>");
        }
        reader.readAsDataURL(input.files[a]); // convert to base64 string
      }
    }
  }

  $("#brand-logo").change(function() {
    readURL(this);
  });

  $("#discard").click(function(){
    location.reload();
  });

});
</script>
@endsection