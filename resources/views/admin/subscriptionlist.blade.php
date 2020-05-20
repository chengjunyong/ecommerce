@extends('admin.layout')

@section('layout')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Subscription List
                                    <small>Homeu Admin Panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Subscription List</li>
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
                                <h5>Subscription List</h5>
                            </div>
                            <div class="card-body">
                                <div id="batchDelete" class="category-table order-table jsgrid" style="position: relative; height: auto; width: 100%;">
                                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                        <table class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell" style="width: 35px;">Id</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Email</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Date Subscription</th>
                                                <th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Status</th>


                                            </tr>
                                            @foreach($subscription as $result)
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 35px;">{{ $result->id }}</td>
                                                    <td class="jsgrid-cell" style="width: 100px;">{{ $result->email }}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 70px;">{{ $result->created_at }}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 70px;">{{ $result->sended == 1 ? 'Sended' : 'Pending' }}</td>
                                                </tr>
                                            @endforeach

                                        </table>
                                        <div class="jsgrid-pager-container" >
                                            <div class="jsgrid-pager" style="float:right;margin-right:10px">Pages 
                                                {{ $subscription->links() }}
                                            </div>
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