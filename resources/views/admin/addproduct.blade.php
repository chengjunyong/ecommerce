@extends('admin.layout')
<!-- Dropzone css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.css') }}">
<!--dropzone js-->
<script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
@section('layout')

<style>
.fade{
  animation: fadeout 2.5s;
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
                      <h3>Add Products
                          <small>Homeu admin panel</small>
                      </h3>
                  </div>
              </div>
              <div class="col-lg-6">
                  <ol class="breadcrumb pull-right">
                      <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item active">Add Product</li>
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
                        <div class="highlight fade" style="position:fixed;left:55%;top:15%;z-index: 999;left:50%;top:15%;padding:5px 60px 5px 60px;background-color:#bfbfd6;border-radius: 20px;">
                          <lable><b>{{ session()->get('success') }}</b></lable>
                        </div>
                      @endif
                  </div>
                  <div class="card-body">
                      <div class="digital-add needs-validation">
                        <form id="form" action="{{ route('postAddProduct') }}" method="post" enctype="multipart/form-data" class="col-form-label pt-0"> 
                         @csrf                    
                          <div class="form-group">
                              <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Product Name</label>
                              <input class="form-control" id="validationCustom01" type="text" required name="product_name">
                          </div>
                          <div class="form-group">
                              <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> SKU</label>
                              <input class="form-control" id="validationCustomtitle" type="text" required name="sku">
                          </div>
                          <div class="form-group">
                              <label class="col-form-label"><span>*</span> Categories</label>
                              <select class="custom-select" required="" name="category_id">
                                    @foreach($category_list as $list)
                                      <option value={{ $list->category_id }}> {{ $list->category_name }}</option>
                                    @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Stock Status</label>
                              <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                  <label class="d-block" for="unlimited">
                                      <input class="radio_animated" id="unlimited" type="radio" name="s_status" checked>
                                      Unlimited
                                  </label>
                                  <label class="d-block" for="limited">
                                      <input class="radio_animated" id="limited" type="radio" name="s_status">
                                      Limited
                                  </label>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Quantity Stock</label>
                              <input class="form-control" id="quantity" type="number" required name="stock" readonly>
                          </div>
                          <div class="form-group">
                              <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price (2 decimal point)</label>
                              <input name="price" class="form-control" id="price_custom" type="number" required step=".01" min=0>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label"><span>*</span> Status</label>
                              <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                  <label class="d-block" for="edo-ani">
                                      <input class="radio_animated" id="edo-ani" type="radio" name="active" value="1" checked>
                                      Active
                                  </label>
                                  <label class="d-block" for="edo-ani1">
                                      <input class="radio_animated" id="edo-ani1" type="radio" name="active" value=0>
                                      Deactive
                                  </label>
                              </div>
                          </div>
                         <label class="col-form-label pt-0"> Product Image Upload</label>
                         <div class="dropzone digits dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                            <input class="mb-0 f-w-600" type="file" id="image" name="image[]" multiple="" accept="image/gif, image/jpeg, image/png">
                        </div>
                         
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6">
              <div class="card">
                  <div class="card-header">
                      <h5>Add Description</h5>
                  </div>
                  <div class="card-body">
                      <div class="digital-add needs-validation">
                          <div class="form-group mb-0">
                              <div class="description-sm">
                                  <textarea id="editor1" name="description" cols="10" rows="15"></textarea>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header">
                      <h5>Image Preview</h5>
                  </div>
                  <div class="card-body">
                      <div class="digital-add needs-validation">
                          <div class="form-group mb-0">
                              <div class="description-sm">
                                  <div id="imglist">
                                    
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
  $("#unlimited").click(function(){
    $("#quantity").attr("readonly",true);
  });

  $("#limited").click(function(){
    $("#quantity").attr("readonly",false);
  });

  $("#discard").click(function(){
    $("#quantity").attr("readonly",true);
    $("#imglist").html("");
  });

});

function readURL(input) {
  $('#imglist').html("");
  for(var a = 0;a<input.files.length;a++){
    if (input.files && input.files[a]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#imglist').append("<img src="+e.target.result+" width=200 height=150>");
      }
      
      reader.readAsDataURL(input.files[a]); // convert to base64 string
    }
  }
}

$("#image").change(function() {
  readURL(this);
});



</script>



@endsection