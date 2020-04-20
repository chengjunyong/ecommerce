@extends('front.layout')

@section('layout')

<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Order Tracking</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">order tracking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--section start-->
<section class="contact-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row section-big-pb-space">
            <div class="col-xl-6 offset-xl-3">
                <form class="theme-form" method="GET" action="{{ route('getOrderTrackingDetail') }}" target="_blank">
                    <div class="form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="name">Tracking number</label>
                               <input type="text" class="form-control" name="tracking_no" placeholder="Enter Your tracking no" required="">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <button class="btn btn-success" type="submit">Track</button>
                           </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('front.footer')

@endsection