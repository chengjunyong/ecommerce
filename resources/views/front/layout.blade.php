@extends('front.app')

@section('content')

@include('front.header')

@include('front.loader')

@yield('layout')

<form id="logout_form" method="POST" action="{{ route('logout') }}">
  @csrf
</form>

@endsection