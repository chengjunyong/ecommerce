@extends('front.layout')

@section('layout')

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="theme-card">
                    <h3 class="text-center">Create account</h3>
                    <form class="theme-form" method="POST" action="{{ route('register') }}">
                      @csrf
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="{{ old('fname') }}" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="{{ old('lname') }}" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" placeholder="Email" required="" autocomplete="off">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="review" name="password" placeholder="Enter your password" required="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="review" placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-12 form-group">
                              <input type="hidden" name="type" value="front" />
                              <button type="submit" class="btn btn-normal">create Account</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <p >Have you already account? <a href="login.html" class="txt-default">click</a> here to &nbsp;<a href="login.html" class="txt-default">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

@endsection