@extends('admin.layout')
@section('layout')
<style>
.jsgrid-cell{
    text-align: center !important;
}
</style>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Brand
                        <small>Homeu Admin Panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Brand</li>
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
                        <h5>Products Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="btn-popup pull-right">
                            <a href="{{ route('getBrand') }}"><button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Brand</button></a>
                        </div>
                        <div class="table-responsive">  
                            <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                    <table class="jsgrid-table">
                                        <tr class="jsgrid-header-row">
                                            <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Nrand Id</th>                                            
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;text-align: center">Brand Name</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Create Date</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;"></th>
                                        </tr>
                                    </table>
                                </div>
                                @csrf
                                <div class="jsgrid-grid-body">
                                    <table class="jsgrid-table">
                                        <tbody>
                                        @foreach($brand as $key => $result)
                                            <tr class="{{ $key % 2 == 0 ? 'jsgrid-row' : 'jsgrid-alt-row' }}">
                                                <td class="jsgrid-cell" style="width: 50px;">{{ $result->id }}</td>
                                                <td class="jsgrid-cell" style="width: 50px;">{{ $result->brand }}</td>                                    
                                                <td class="jsgrid-cell" style="width: 50px;">{{ $result->created_at }}</td>
                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit">
                                                    <input class="jsgrid-button jsgrid-update-button" type="button" title="Update" hidden="true">
                                                    <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                                    <input class="jsgrid-button jsgrid-cancel-edit-button" type="button" title="Cancel edit" hidden="true">
                                                </td>           
                                            </tr>                                                       
                                        @endforeach                                                                                                                   
                                        </tbody>
                                    </table>
                                </div>
                                <div class="jsgrid-load-shader" style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;"></div>
                                <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
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
    $(".jsgrid-edit-button").click(function(){
        var id = $(this).parents().eq(0).siblings().eq(0).html();
        var old = $(this).parents().eq(0).siblings().eq(1).html();
        $(this).parents().eq(0).siblings().eq(1).html("<input type=text class=edit id="+id+" old='"+old+"'>");
        $(this).attr("hidden","true");
        $(this).siblings().eq(0).removeAttr("hidden");
        $(this).siblings().eq(1).attr("hidden","true");
        $(this).siblings().eq(2).removeAttr("hidden");
    });

    $(".jsgrid-update-button").click(function(){
        let id = $(this).parents().eq(0).siblings().eq(1).find('input').attr("id");
        let input = $(this).parents().eq(0).siblings().eq(1).find('input').val();
        let path = $(this).parents().eq(0).siblings().eq(1);
        let h0 = $(this);
        let h1 = $(this).siblings().eq(0);
        let h2 = $(this).siblings().eq(1);
        let h3 = $(this).siblings().eq(2);
        let token = $('input[name=_token]').val();

        if(!input || input == " "){
            alert("Please make sure the input is not empty and not start with space");
        }else{
            $.post("{{ route('updateBrand') }}",
                {
                    input  : input,
                    id     : id,
                    _token : token
                },
                function(data)
                {
                    if(data == "true"){
                        path.html(input);
                        h0.attr("hidden","true");
                        h1.removeAttr("hidden");
                        h2.removeAttr("hidden");
                        h3.attr("hidden","true");
                    }else{
                        alert("Update unsuccessful, Please contact IT services to assist");
                    }
                },"html");
        }
    });

    $(".jsgrid-cancel-edit-button").click(function(){
        $(this).attr("hidden","true");
        $(this).siblings().eq(0).removeAttr("hidden");
        $(this).siblings().eq(1).attr("hidden","true");
        $(this).siblings().eq(2).removeAttr("hidden");
        var old = $(this).parents().eq(0).siblings().eq(1).children().attr("old");
        $(this).parents().eq(0).siblings().eq(1).html(old);
    });

    $(".jsgrid-delete-button").click(function(){
        let id = $(this).parents().eq(0).siblings().eq(0).html();
        let token = $('input[name=_token]').val();
        var answer = prompt("Please confirm to delete selected brand name. Type 'DELETE' to confirm (Case sensitive)");
        if(answer == "DELETE"){
            $.post("{{ route('deleteBrand') }}",
            {
                id : id,
                _token : token
            },function(data){
                if(data == "true"){
                    location.reload();
                }else{
                    alert("Delete unsuccessful, Please contact IT services to assist");
                }
            },"html");
        }else if(answer != null){
            alert("Please make sure your spelling is correct (Case sensitive)");
        }

    });

});
</script>
@endsection