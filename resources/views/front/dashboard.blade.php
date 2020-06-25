@extends('front.layout')

@section('layout')

<style>
  
  .tab_panel { display: none; }
  .tab_panel.active { display: block; }
  .hyperlink { font-size: 18px; color: #7cbbff; cursor: pointer; }
  .hide { display: none; }

</style>

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
                            <li class="active"><a target="profile" type="tab" group="dashboard">Account Info</a></li>
                            <li><a target="address" type="tab" group="dashboard">Address Book</a></li>
                            <li><a href="{{ route('getOrderHistory') }}">My Orders</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 tab_panel active" id="profile" group="dashboard">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2></div>
                        <div class="welcome-msg">
                            <p>Hello, {{ $user->fname }} {{ $user->lname }} !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="{{ route('getEditInfo') }}">Edit</a></div>
                                        <div class="box-content">
                                            <h6><label> Name : </label> {{ $user->fname }} {{ $user->lname }}</h6>
                                            <h6>
                                              <label> Email : </label> {{ $user->email }}
                                              @if($user->verified == null) 
                                                <a href="#" id="verify_now">Verify now</a>
                                              @endif
                                            </h6> 
                                            <h6><a href="#">Change Password</a></h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 tab_panel" id="address" group="dashboard">
              <div class="dashboard-right">
                <div class="dashboard" id="address_book">
                  <div class="page-title">
                    <h2>Address book</h2>
                  </div>
                  <div class="box-account box-info">
                    <div class="row">
                      <div class="col-lg-12">
                        <table class="table" style="width: 100%; margin-bottom: 10px;">
                          <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Postalcode</th>
                            <th>Phone number</th>
                            <th></th>
                            <th></th>
                          </thead>
                          <tbody>
                            @if(count($address_book_list) > 0)
                              @foreach($address_book_list as $key => $address_book)
                                <tr>
                                  <td>{{ $address_book->name }}</td>
                                  <td>{{ $address_book->address }}</td>
                                  <td>{{ $address_book->postal_code }}</td>
                                  <td>{{ $address_book->phone_number }}</td>
                                  <td>
                                    @if($address_book->default_shipping == 1) 
                                      Default shipping address <br>
                                    @endif

                                    @if($address_book->default_billing == 1)
                                      Default billing address
                                    @endif
                                  </td>
                                  <td>
                                    <label class="hyperlink edit_address" key="{{ $key }}">Edit</label>
                                  </td>
                                </tr>
                              @endforeach
                            @else
                              <tr>
                                <td colspan="5"> No address found. </td>
                              </tr>
                            @endif
                          </tbody>
                        </table>

                        <button class="btn btn-primary pull-right" id="add_address_btn">Add new address</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="dashboard hide" id="address_form">
                  <div class="page-title">
                    <h2>Add new address</h2>
                  </div>
                  <div class="box-account box-info">
                    <form method="POST" action="{{ route('addressBook') }}">
                      @csrf
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="address_name" placeholder="Please enter your name" required />
                          </div>
                          <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone_number" id="address_phone_number" placeholder="Please enter your phone number" required />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address_detail" placeholder="Please enter your address" required />
                          </div>
                          <div class="form-group">
                            <label>State</label>
                            <select class="form-control" name="state" id="address_state" required>
                              <option value="0">Please select</option>
                              <option value="pahang">Pahang</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>City</label>
                            <select class="form-control" name="city" id="address_city" required>
                              <option value="0">Please select</option>
                              <option value="kuantan">Kuantan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Postal code</label>
                            <input type="text" class="form-control" name="postal_code" id="address_postal_code" placeholder="Please enter your postal code" required />
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <div class="checkbox icheck_checkbox">
                              <label>
                                <input class="icheck" type="checkbox" name="default_shipping" id="address_default_shipping" value="1" checked /> Default shipping address
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="checkbox icheck_checkbox">
                              <label>
                                <input class="icheck" type="checkbox" name="default_billing" id="address_default_billing" value="1" checked /> Default billing address
                              </label>
                            </div> 
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <input type="hidden" name="type" id="address_type" />
                          <input type="hidden" name="address_id" id="address_id" />
                          <button type="submit" class="btn btn-success pull-right" style="margin-left: 20px;" id="address_form_save">Save</button>
                          <button type="button" class="btn pull-right" id="address_form_cancel">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


            </div>
        </div>
    </div>
</section>

<script>

  var tab = "{{ $tab }}";
  var address_book_list = @json($address_book_list);
  
  $("a[type=tab]").click(function(){
    var target = $(this).attr("target");
    var group = $(this).attr("group");
    $(this).parent("li").siblings().removeClass("active");
    $(this).parent("li").addClass("active");
    $("div[group="+group+"]").removeClass("active");
    $("#"+target+"[group="+group+"]").addClass("active");
  });

  $(document).ready(function(){
    if(tab != "")
    {
      $("a[type=tab][target="+tab+"]").click();
    }

    $("#add_address_btn").click(function(){
      $("#address_book").addClass("hide");
      $("#address_form").removeClass("hide");

      $("#address_name").val("");
      $("#address_phone_number").val("");
      $("#address_detail").val("");
      $("#address_state").val("");
      $("#address_city").val("");
      $("#address_postal_code").val("");
      $("#address_default_shipping").iCheck("check");
      $("#address_default_billing").iCheck("check");


      $("#address_type").val(1);

      $("#address_form_save").html("Save");
    });

    $("#address_form_cancel").click(function(){
      $("#address_book").removeClass("hide");
      $("#address_form").addClass("hide");
    });

    $(".edit_address").click(function(){
      var key = $(this).attr("key");
      var address_book = address_book_list[key];

      $("#address_name").val(address_book.name);
      $("#address_phone_number").val(address_book.phone_number);
      $("#address_detail").val(address_book.address);
      $("#address_state").val(address_book.state);
      $("#address_city").val(address_book.city);
      $("#address_postal_code").val(address_book.postal_code);
      if(address_book.default_shipping == 1)
      {
        $("#address_default_shipping").iCheck("check");
      }
      else
      {
        $("#address_default_shipping").iCheck("uncheck");
      }

      if(address_book.default_billing == 1)
      {
        $("#address_default_billing").iCheck("check");
      }
      else
      {
        $("#address_default_billing").iCheck("uncheck");
      }

      $("#address_type").val(2);
      $("#address_id").val(address_book.id);

      $("#address_form_save").html("Update");

      $("#address_book").addClass("hide");
      $("#address_form").removeClass("hide");
    }); 

    $("#verify_now").click(function(){

      $.get("{{ route('verify_now') }}", function(response){

        toastBox("success", "Email sent successful", "Verification email has been sent to your email.");

      }).fail(function(){
        alert("Error");
      });
    });

  });

</script>

@include('front.footer')

@endsection