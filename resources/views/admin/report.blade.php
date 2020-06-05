@extends('admin.layout')

@section('layout')
<style>
  @media only screen and (max-width: 375px){
    #second{
      margin-left:0px !important;
      float:none !important;
    }
  }

  @media only screen and (max-width: 425px){
    #second{
      margin-left:0px !important;
      float:none !important;
    }
  }
</style>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Report
              <small>Homeu Admin Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Specify Date Report</li>
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
            <h5 align="center">Specify Date Report</h5>
          </div>
          <div class="card-body" style="align-self: center">
            <div id="batchDelete" class="category-table order-table jsgrid" style="position: relative; height: auto; width: 100%;">
              <form method="post" action="{{route('postReportDate')}}" target="_blank" style="float:left">
                @csrf
                <div><b>Please Enter A Date To Generate Report</b></div><br/>
                <div>Date Start:</div>
                <input id="start" required class="form-control" type="date" name="d_start" style="width:300px" max="" min=""><br/>
                <div>Date End:</div>
                <input id="end" required class="form-control" type="date" name="d_end" style="width:300px" max="" min=""><br/>
                <div><input class="btn btn-primary" type="submit" value="Generate"></div>
              </form>
              <form id="second" method="post" action="{{route('postReportDate')}}" target="_blank" style="float:right;margin-left:2.5vw">
                @csrf
                <div><b>Or Select The Month To Generate The Report</b></div><br/>
                <div>Date Start:</div>
                <input id="start" required class="form-control" type="month" name="month" style="width:300px" max="" min=""><br/>
                <div><input class="btn btn-primary" type="submit" value="Generate"></div>
              </form>
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
  $("#start").change(function(){
    var a = $(this).val();
    $("#end").attr("min",a);
  });

  $("#end").change(function(){
    var a = $(this).val();
    $("#start").attr("max",a);
  });

});
</script>

@endsection