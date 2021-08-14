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
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td>First Name:</td>
                        <td>Homeu</td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td>Admin</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>admin@homeu.com</td>
                      </tr>                                            
                      <tr>
                        <td>Mobile Number:</td>
                        <td>016-8884513</td>
                      </tr>
                    </tbody>
                  </table>
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
@endsection