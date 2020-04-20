@extends('front.layout')

@section('layout')

<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>dashboard</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">dashbord</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                    <div class="block-content ">
                        <ul>
                            <li class="active"><a href="#">Account Info</a></li>
                            <li><a href="#">Address Book</a></li>
                            <li><a href="{{ route('getOrderHistory') }}">My Orders</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li class="last"><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2></div>
                        <div class="welcome-msg">
                            <p>Hello, {{ $user->name }} !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="{{ route('getEditInfo') }}">Edit</a></div>
                                        <div class="box-content">
                                            <h6>{{ $user->name }}</h6>
                                            <h6>{{ $user->email }}</h6>
                                            <h6><a href="#">Change Password</a></h6></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="#">Manage Addresses</a></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6>Default Billing Address</h6><address>You have not set a default billing address.<br><a href="#">Edit Address</a></address></div>
                                        <div class="col-sm-6">
                                            <h6>Default Shipping Address</h6><address>You have not set a default shipping address.<br><a href="#">Edit Address</a></address></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.footer')

@endsection