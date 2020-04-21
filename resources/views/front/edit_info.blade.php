@extends('front.layout')

@section('layout')

<!-- personal deatail section start -->
<section class="contact-page register-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3">PERSONAL DETAIL</h3>
                <form class="theme-form">
                    <div class="form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="name">First Name</label>
                               <input type="text" class="form-control" id="name" value="{{ $user->fname }}" placeholder="Enter Your name" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="email">Last Name</label>
                               <input type="text" class="form-control" id="last-name" value="{{ $user->lname }}" placeholder="Last Name" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="review">Phone number</label>
                               <input type="text" class="form-control" id="review" placeholder="Enter your number" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="{{ $user->email }}" placeholder="Email" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div >
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control mb-0" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

@include('front.footer')

@endsection