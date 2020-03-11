@extends('admin.app')

@section('content')

@include('admin.header')
<div class="page-body-wrapper">
  @include('admin.sidebar')

  @yield('layout')

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 footer-copyright">
          <p class="mb-0">Copyright 2019 © Homeu All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

</div>

@endsection


