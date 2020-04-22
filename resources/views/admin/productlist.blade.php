@extends('admin.layout')

@section('layout')
<!-- Font Awesome-->
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
<script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

<div class="page-body">
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Product List
                        <small>Homeu Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Product List</li>
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
                    <h5>Product Lists</h5>
                </div>
                <div>
                    <button class="btn btn-primary" style="float:left;margin-left:3vw" id="multiple_delete">Delete</button>
                    <input class="form-control" type="text" name="product_name" placeholder="Name or SKU" style="width:20%;float:right;margin-right:3vw">
                    <button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
                </div>
                <div class="card-body">
                    <div id="basicScenario" class="product-list digital-product">
                        <div class="jsgrid-grid-header jsgrid-grid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-right" style="width:7%;">                                       
                                        <span style="margin-right: 5px">All</span><input id="all" type="checkbox">
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right" style="width:5%;">
                                        Id
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        Name
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        SKU
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        Category
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        Active
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        Last Update
                                    </th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">
                                        Tools
                                    </th>
                                </tr>
                                <tbody>
                                    <!-- Looping start here -->
                                    @foreach($product_list as $result)
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell">
                                                <input class="admin_check" type="checkbox" value="{{ $result->id }}" id="{{ $result->id }}">
                                            </td>
                                            <td class="jsgrid-cell">
                                                {{ $result->id }}
                                            </td>
                                            <td class="jsgrid-cell">
                                                {{ $result->name }}
                                            </td>
                                            <td class="jsgrid-cell">
                                                {{ $result->sku }}
                                            </td>
                                            <td class="jsgrid-cell" style="text-align: center">
                                                {{ $result->category_name }} 
                                            </td>
                                            <td class="jsgrid-cell">
                                                @if($result->active == 0)
                                                    No
                                                @else
                                                    Yes
                                                @endif
                                            </td>
                                            <td class="jsgrid-cell">
                                                {{ $result->updated_at }}
                                            </td>
                                            <td class="jsgrid-cell" style="font-size:20px">
                                                <input class="fas fa-edit" type="button">
                                                <input class='fas fa-trash-alt' type="button">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                           <!--  Pagination  Start-->
                            <div class="jsgrid-pager-container" >
                                <div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                                    {{ $product_list->links() }}
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
    $("#all").change(function(){
        if($("#all").prop("checked") == true){
            $(".admin_check").prop("checked",true);
        }else{
            $(".admin_check").prop("checked",false);
        }
    })

    $(".admin_check").change(function(){
        if($(this).prop("checked") == false){
            $("#all").prop("checked",false)
        }
    })

    $("#multiple_delete").click(function(){
        var b = $(".admin_check");
        for(var a=0;a<b.length;a++){
            if($(b[a]).prop("checked") == true){
                console.log($(b[a]).val())
            }
        }

    });
});
</script>
@endsection