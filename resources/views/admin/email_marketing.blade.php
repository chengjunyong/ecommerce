@extends('admin.layout')
@section('layout')
@if(session()->get('result') == 'Success')
  <script>alert('Setup Successful')</script>
@elseif(session()->get('result') == 'Fail')
  <script>alert('Setup Successful')</script>
@endif

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="page-header">
          <div class="row">
              <div class="col-lg-6">
                  <div class="page-header-left">
                      <h3>Email Marketing
                      <small>Homeu Admin Panel</small>
                      </h3>
                  </div>
              </div>
              <div class="col-lg-6">
                  <ol class="breadcrumb pull-right">
                      <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Email Marketing</li>
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
                    <h5>Email Marketing</h5>
                </div>
                <div class="card-body">
                  <div><span>Please Select Which Template To Use<span></div>
                  <div class="form-group">
                    <form action="{{ route('activateTemplate') }}" method="post">
                      @csrf
                      <select class="form-control" style="width:17vw" name="template">
                        @foreach($template as $result)
                            <option value="{{ $result->id }}" {{ ($result->selected == 1) ? 'selected' : '' }}>{{ $result->title }}</option>
                        @endforeach
                      </select>
                      <div style="margin-top:25px"><input type="submit" value="Confirm" class="btn btn-primary"></div>
                      <div style="margin-top:25px">Current Running Template :</div>
                      <strong>{{ ($selected != null ? $selected->title : 'No Template Running') }}</strong>
                      <div style="margin-top:25px"><button id='stop' type="button" class="btn btn-danger">Stop</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<script>
$(document).ready(function(){
  $("#stop").click(function(){
    if(confirm("Confirm to stop current email template ?")){
      let token = $("input[name=_token]").val();
      $.post("{{ route('stopEmail') }}",
        {
          _token : token

        },function(data){
          if(data == "1"){
            alert("Email template has been stop");
            location.reload();
          }
        },"html");
    }
  });
});
</script>

@endsection