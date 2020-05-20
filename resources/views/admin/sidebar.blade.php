<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
      </div>
      <h6 class="mt-3 f-14">Admin</h6>
      <p>Homeu</p>
    </div>
    <ul class="sidebar-menu">
      <li><a class="sidebar-header" href="{{ route('getIndex') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
      @if($logged_user->user_type == 1 || $logged_user->user_type == 2)
      <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('getMainCategory') }}"><i class="fa fa-circle"></i>Main Category</a></li>
          <li><a href="{{ route('getCategory') }}"><i class="fa fa-circle"></i>Category</a></li>
          <li><a href="{{ route('getSubCategory') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
          <li><a href="{{ route('getTag') }}"><i class="fa fa-circle"></i>Tag</a></li>
          <li><a href="{{ route('getProductList') }}"><i class="fa fa-circle"></i>Product List</a></li>
          <li><a href="{{ route('getAddProduct') }}"><i class="fa fa-circle"></i>Add Product</a></li>

        </ul>
      </li>
      @endif

      <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          @if($logged_user->user_type == 1 || $logged_user->user_type == 2 || $logged_user->user_type == 3 || $logged_user->user_type == 5)
          <li><a href="{{ route('getOrders') }}"><i class="fa fa-circle"></i>Orders</a></li>
          <li><a href="{{ route('getTransaction') }}"><i class="fa fa-circle"></i>Transactions</a></li>
          @endif

          @if($logged_user->user_type == 1 || $logged_user->user_type == 2 || $logged_user->user_type == 3 || $logged_user->user_type == 4) 
          <li><a href="{{ route('getChecklist') }}"><i class="fa fa-circle"></i>Check List</a></li>
          @endif
        </ul>
      </li>

      @if($logged_user->user_type == 1 || $logged_user->user_type == 2)
      <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('getCouponList') }}"><i class="fa fa-circle"></i>List Coupons</a></li>
          <li><a href="{{ route('getCouponCreate') }}"><i class="fa fa-circle"></i>Create Coupons </a></li>
          <li><a href="{{ route('getCouponTransaction') }}"><i class="fa fa-circle"></i>Coupons Transaction</a></li>
        </ul>
      </li>
      @endif

      @if($logged_user->user_type == 1 || $logged_user->user_type == 2)
      <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('getUserList') }}"><i class="fa fa-circle"></i>User List</a></li>
          <li><a href="{{ route('getCreateUser') }}"><i class="fa fa-circle"></i>Create User</a></li>
        </ul>
      </li>
      @endif

      @if($logged_user->user_type == 1)
        <li><a class="sidebar-header" href=""><i data-feather="mail"></i><span>Email</span><i class="fa fa-angle-right pull-right"></i></a>
          <ul class="sidebar-submenu">
            <li><a href="{{ route('getSubscriptionList') }}"><i class="fa fa-circle"></i>Subscription List</a></li>
            <li><a href="{{ route('getCouponCreate') }}"><i class="fa fa-circle"></i>Email Marketing</a></li>
            <li><a href="{{ route('listTemplate') }}"><i class="fa fa-circle"></i>Template List</a></li>
            <li><a href="{{ route('getTemplateUpload') }}"><i class="fa fa-circle"></i>Upload Template</a></li>
          </ul>
        </li>
      @endif

      @if($logged_user->user_type == 1 || $logged_user->user_type == 2)
      <li><a class="sidebar-header" href="{{ route('getReport') }}"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
      <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('getProfile') }}"><i class="fa fa-circle"></i>Profile</a></li>
        </ul>
      </li>
      <li><a class="sidebar-header" href="{{ route('getInvoice') }}"><i data-feather="archive"></i><span>Invoice</span></a>
      </li>
      @endif
      <li><a class="sidebar-header" href="{{ route('adminLogout') }}"><i data-feather="log-in"></i><span>Logout</span></a>
      </li>
    </ul>
  </div>
</div>
 <!-- Page Sidebar Ends-->