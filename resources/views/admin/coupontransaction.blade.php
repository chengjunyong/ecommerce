@extends('admin.layout')

@section('layout')


<div class="page-body">
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Coupon Transaction
                        <small>Homeu Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Coupon Transaction</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Coupon Transaction</h5>
                </div>
                <div>
                    <form action="{{ route('searchVoucherTransaction')}}" method="post">
                        @csrf
                        <input class="form-control" type="text" name="coupon_name" placeholder="Coupon Name" style="width:20%;float:right;margin-right:3vw">
                        <button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="card-body">
                    <div id="basicScenario" class="product-list digital-product">
                        <div class="jsgrid-grid-header jsgrid-grid-header-scrollbar">
                            <table class="jsgrid-table" id="voucher" style="border-bottom: none !important;">
                                <thead>
                                    <tr class="jsgrid-header-row">                               
                                        <th class="jsgrid-header-cell jsgrid-align-right" style="width:100px">
                                            Transaction Id
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-right" >
                                            Coupon Name
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-right" >
                                            Total Discount
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-right" >
                                            Customer Name
                                        </th>
                                        <th class="jsgrid-header-cell jsgrid-align-right">
                                            Redeem Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Looping start here -->
                                    @foreach($voucher_transaction as $result)
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" product_id="{{ $result->id }}">
                                                {{ $result->transaction_id }}
                                            </td>
                                            <td class="jsgrid-cell">
                                                {{ $result->coupon_code_name }}
                                            </td>
                                            <td class="jsgrid-cell">
                                                Rm {{ $result->discount_total }}
                                            </td>
                                            <td class="jsgrid-cell" style="text-align: center">
                                                {{ $result->fname }} {{ $result->lname }} 
                                            </td>
                                            <td class="jsgrid-cell" style="text-align: center">
                                                {{ $result->created_at }} 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                           <!--  Pagination  Start-->
                            <div class="jsgrid-pager-container" >
                                <div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                                    {{ $voucher_transaction->links() }}
                                </div>
                            </div>
                            <!-- Pagination End -->

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
    $("#voucher").DataTable({
        "searching": false,
        "paging": false,
        "lengthMenu": false,
        "responsive": true,
    });
});
</script>
@endsection