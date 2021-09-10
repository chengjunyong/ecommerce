@extends('admin.layout')

@section('layout')

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Profile
              <small>Homeu Admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Settings</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">          
      <div class="col-xl-12">
        <div class="card tab2-card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
              </li>
            </ul>
            <div class="tab-content" id="top-tabContent">
              <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                <h5 class="f-w-600">Profile</h5>
                <div class="table-responsive profile-table">
                  <form method="POST" action="{{ route('changeUserProfile') }}" id="profile_form">
                    @csrf
                    <table class="table">
                      <tbody>
                        <tr>
                          <td width="30%">First Name:</td>
                          <td>
                            <p class="profile_data">{{ $user->fname }}</p>
                            <input type="text" class="form-control" name="fname" style="display: none;" value="{{ $user->fname }}" ori-value="{{ $user->fname }}" required />
                          </td>
                        </tr>
                        <tr>
                          <td>Last Name:</td>
                          <td>
                            <p class="profile_data">{{ $user->lname }}</p>
                            <input type="text" class="form-control" name="lname" style="display: none;" value="{{ $user->lname }}" ori-value="{{ $user->lname }}" required />
                          </td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td>
                            <p class="profile_data">{{ $user->email }}</p>
                            <input type="text" class="form-control" name="email" style="display: none;" value="{{ $user->email }}" ori-value="{{ $user->email }}" disabled />
                          </td>
                        </tr>                                            
                        <tr>
                          <td>Mobile Number:</td>
                          <td>
                            <p class="profile_data">{{ $user->contact }}</p>
                            <input type="text" class="form-control" name="contact" style="display: none;" value="{{ $user->contact }}" ori-value="{{ $user->contact }}" required />
                          </td>
                        </tr>
                        <tr class="password_input" style="display: none;">
                          <td>Password ( Leave it blank if no changes )</td>
                          <td>
                            <input type="password" class="form-control" name="password" />
                          </td>
                        </tr>
                        <tr class="password_input" style="display: none;">
                          <td>Password Confirmation</td>
                          <td>
                            <input type="password" class="form-control" name="password_confirmation" />
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <button type="button" class="btn btn-primary" id="edit_profile">Edit</button>
                    <button type="button" class="btn btn-success" id="save_profile" style="display: none;">Save</button>
                    <button type="button" class="btn btn-danger" id="cancel_profile" style="display: none;">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
  
<script>
  
  $(document).ready(function(){
    $("#edit_profile").click(function(){
      $("tr.password_input").show();
      $(".profile-table table").find("input").show();
      $(".profile-table table").find("p.profile_data").hide();

      $(this).hide();
      $("#save_profile, #cancel_profile").show();
    });

    $("#cancel_profile").click(function(){
      $(".profile-table table").find("input").each(function(){
        $(this).val($(this).attr("ori-value"));
      });

      $("input[name='password'], input[name='password-confirmation']").val("");

      $("tr.password_input").hide();
      $(".profile-table table").find("input").hide();
      $(".profile-table table").find("p.profile_data").show();

      $("#edit_profile").show();
      $("#save_profile, #cancel_profile").hide();
    });

    $("#save_profile").click(function(){
      var password = $("input[name='password']").val();
      var password_confirmation = $("input[name='password_confirmation']").val();

      if(password || password_confirmation)
      {
        if(password != password_confirmation)
        {
          Swal.fire({
            icon: 'error',
            text: 'Password and password confirmation is not same.',
          });

          return;
        }
      }

      $(this).attr("disabled", true);

      $("#profile_form").submit();
    });

  });

</script>

@endsection