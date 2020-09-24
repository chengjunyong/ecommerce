@extends('admin.layout')
<!-- Dropzone css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone/basic.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone/dropzone.min.css') }}">

@section('layout')

@if(session()->has('success'))
  <script>
    alert("{{ session()->get('success') }}");
  </script>
@endif

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Email Template Upload
              <small>Homeu admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Email Template Upload</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row product-adding">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header">
            <h5>Upload</h5>
          </div>
          <form id="upload" action="{{ route('templateUpload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div>
                <h4>Can generate your email template with this website</h4>
                <a href="https://beefree.io/" target="_blank" style="font-size:18px">https://beefree.io</a>
              </div>
              <br/><br/>
              <div class="digital-add needs-validation">
                <div>
                  <label><span>*</span> Title</label>
                </div>
                <div>
                  <input class="form-control" type="text" required name="title" style="width:40%">
                </div>
                  <span style="color:red">*Remark: if the title name is same, the new title will replace the old title</span>
                <div style="margin-top:10px">
                  <label><span>*</span> Upload Email Template</label>
                  <div>
                    <input type=file name=file[] multiple required="" webkitdirectory mozdirectory> 
                  </div>
                  <input class="btn btn-primary" type="submit" value="Upload" style="margin-top:15px">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--dropzone js-->
<script src="{{ asset('assets/js/dropzone/dropzone.min.js') }}"></script>

<script>
$(document).ready(function(){
 
});
</script>
              




@endsection