@extends('front.layout')

@section('layout')

<section class="p-0 bg-light" style="margin-top: 210px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-section">
                    <h1>404</h1>
                    <h2>page not found</h2>
                    <a href="{{ route('getFrontIndex') }}" class="btn btn-normal">back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.footer')

@endsection