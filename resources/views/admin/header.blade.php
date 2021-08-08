<style>
.maximize{
  cursor:pointer;
}
</style>
<!-- Page Header Start-->
<div class="page-main-header">
  <div class="main-header-left">
    <div class="logo-wrapper">
      <a href="{{ route('getIndex') }}"><img class="blur-up lazyloaded" src="{{ asset('assets/images/layout-2/logo/logo2.png') }}" alt="" style="width:60%;margin-top: 5px"></a>
    </div>
  </div>
  <div class="main-header-right row">
    <div class="mobile-sidebar">
      <div class="media-body text-left switch-sm">
        <label class="switch">
          <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
        </label>
      </div>
    </div>
    <div class="nav-right col">
      <ul class="nav-menus">
        <li>
          <li><a class="text-dark maximize" target="_blank" href="{{route('getFrontIndex')}}"><i data-feather="home"></i></a></li>
          <li><a class="text-dark maximize" onclick="openFullscreen()"><i data-feather="maximize"></i></a></li>     
          <li class="onhover-dropdown">
            <div class="media align-items-center">
              @if($logged_user->user_type == 1)
              <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/admin.png') }}" style="border-radius: 0px !important;" alt="header-user">
              @elseif($logged_user->user_type == 5)
              <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/drive.png') }}" style="border-radius: 0px !important;" alt="header-user">
              @else
              <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/driver.png') }}" style="border-radius: 0px !important;" alt="header-user">
              @endif
            </div>
            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
              <li><a href="{{route('getProfile')}}">Profile<span class="pull-right"><i data-feather="user"></i></span></a></li>                                         
            </ul>
          </li>
        </ul>
        <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
  </div>
  <!-- Page Header Ends -->