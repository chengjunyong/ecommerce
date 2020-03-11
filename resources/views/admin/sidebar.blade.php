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
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    
                    <li><a href="{{ route('getCategory') }}"><i class="fa fa-circle"></i>Category</a></li>
                    <li><a href="{{ route('getProductList') }}"><i class="fa fa-circle"></i>Product List</a></li>
                    <li><a href="{{ route('getAddProduct') }}"><i class="fa fa-circle"></i>Add Product</a></li>
                        
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('getOrders') }}"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
       
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                    <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                </ul>
            </li>
            
            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li>
            <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>
 <!-- Page Sidebar Ends-->