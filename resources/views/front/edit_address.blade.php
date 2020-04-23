@extends('front.layout')

@section('layout')

<!-- personal deatail section start -->
<section class="contact-page register-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3 spc-responsive">SHIPPING ADDRESS</h3>
                <form class="theme-form">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="home-ploat">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="Example : No3-A-2" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address-two">Address *</label>
                                <input type="text" class="form-control" id="address-two" placeholder="Address" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="zip-code">Post Code *</label>
                               <input type="text" class="form-control" id="zip-code" placeholder="Example : 2xxxx" required="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="city">City *</label>
                               <input type="text" class="form-control" id="city" placeholder="Example : Kuantan" required="">
                           </div>
                        </div>
                        <div class="col-md-6 select_input">
                            
                        </div>
                        
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-normal mb-lg-5" type="submit">Save setting</button>
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