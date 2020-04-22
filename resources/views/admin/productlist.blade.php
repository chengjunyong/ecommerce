@extends('admin.layout')

@section('layout')


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
                    <form action="{{ route('searchProduct')}}" method="post">
                        @csrf
                        <input class="form-control" type="text" name="product_name" placeholder="Name or SKU" style="width:20%;float:right;margin-right:3vw">
                        <button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="card-body">
                    <div id="basicScenario" class="product-list digital-product">
                        <div class="jsgrid-grid-header jsgrid-grid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tr class="jsgrid-header-row">                               
                                    <th class="jsgrid-header-cell jsgrid-align-right" style="width:7%">                                       
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
                                                <input class="admin_check" type="checkbox" value="{{ $result->id }}" name="bulk_check[]">
                                            </td>
                                            <td class="jsgrid-cell" product_id="{{ $result->id }}">
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
                                                <a href="{{ route('editProduct')}}?product_id={{ $result->id }}"><button class="edit" style="border:0px;background:white;"><i class="fas fa-edit edit" ></i></button></a>
                                                <button class="delete" style="border:0px;background:white;"><i class="fas fa-trash-alt"></i></button>
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
        if($(".admin_check:checked").length == 0){
            alert("Please select atleast 1 product");
        }else{
            let token = $('input[name=_token]').val();
            var product_id = [];
            $(".admin_check:checked").each(function(){
                product_id.push($(this).val());
            });

            $.post("{{ route('bulkDelete') }}",
            {
                _token : token,
                product_id : product_id

            },function(data){
                if(data == "true"){
                    alert("Data delete successful");
                    location.reload();
                }else{
                    alert("Something Wrong, please contact IT services");
                }
            },"html");

        }
    });

    $(".delete").click(function(){
        if(confirm("You want to delete this product ?")){
           let target = $(this).parents().eq(1).children().eq(1).attr("product_id");
           let token = $('input[name=_token]').val();

           $.post("{{ route('deleteSingleProduct') }}",
           {
            _token : token,
            product_id : target

           },function(data){
                if(data == "true"){
                    alert("Delete successful");
                    location.reload();
                }else{
                    alerT("Delete unsuccessful");
                }
           },"html");
       }
    });

});
</script>
@endsection