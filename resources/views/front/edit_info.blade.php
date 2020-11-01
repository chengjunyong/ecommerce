@extends('front.layout')

@section('layout')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
  <div class="custom-container">
    <div class="row" style="padding-left: calc(10px + 1em);">
      <div class="col">
        <div class="breadcrumb-contain">
          <div>
            <ul>
              @foreach($breadcrumb as $key => $value)
                <li><a href="{{ $value['route'] }}">{{ $value['name'] }}</a></li>
                @if(($key + 1) < count($breadcrumb))
                  <li><i class="fa fa-angle-double-right"></i></li>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb End -->

<!-- personal deatail section start -->
<section class="contact-page register-page section-big-py-space bg-light">
  <div class="custom-container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="mb-3">PERSONAL DETAIL</h3>
        <form class="theme-form" method="POST" action="{{ route('editUserInfo') }}">
          @csrf
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" value="{{ $user->fname }}" placeholder="Enter Your name" required="">
             </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" value="{{ $user->lname }}" placeholder="Last Name" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="contact" value="{{ $user->contact }}" placeholder="Enter your number" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group" style="position: relative;">
                <label>Date of birth</label>
                <input type="date" class="form-control" name="date_of_birth" autocomplete="off" value="{{ $user->date_of_birth }}" />
              </div>
            </div>

          <!-- <div class="col-md-12">
            <div class="form-group">
              <label for="review">Write Your Message</label>
              <textarea class="form-control mb-0" placeholder="Write Your Message" name="review" rows="6">{{ $user->review }}</textarea>
            </div>
          </div> -->
        </div>

        <div class="col-md=12">
          <div class="form-group">
            <button class="btn-normal btn" type="submit">Update</button>
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