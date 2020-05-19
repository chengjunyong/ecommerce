@extends('admin.layout')

@section('layout')
<style>
  .jsgrid-alt-row{
    background-color:#f9f9f9;
  }
  td{
    padding:10px 10px 10px 10px;
  }
</style>

<div class="page-body">
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Template List
                        <small>Homeu Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Template List</li>
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
                    <h5>Template Lists</h5>
                </div>
                <div class="card-body">
                  <table class="jsgrid-table" style="text-align: center;font-size:15px">
                    @csrf
                    <thead>
                      <tr class="jsgrid-header-row">                               
                          <th class="jsgrid-header-cell jsgrid-align-right" style="width:10%;">
                              Id
                          </th>
                          <th class="jsgrid-header-cell jsgrid-align-right" style="width:15%;">
                              Title
                          </th>
                          <th class="jsgrid-header-cell jsgrid-align-right" style="width:20%;">
                              Date Upload
                          </th>
                          <th class="jsgrid-header-cell jsgrid-align-right" style="width:10%">
                              Tools
                          </th>
                      </tr>
                    </thead>
                      </tbody>
                      @foreach($template as $key => $result)
                        <tr class="{{ $key % 2 == 0 ? 'jsgrid-row' : 'jsgrid-alt-row' }}" style="margin-top: 10px">
                          <td>{{ $result->id }}</td>
                          <td>{{ $result->title }}</td>
                          <td>{{ $result->created_at }}</td>
                          <td>
                            <a target="_blank" href="{{ route('viewTemplate') }}?tid={{ $result->id }}"><button class="view" style="border:0px;background:white;"><i class="fas fa-search"></i></button></a>
                            <button id="{{ $result->id }}" folder="{{  $result->folder }}" class="delete" style="border:0px;background:white;"><i class="fas fa-trash-alt"></i></button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div style="margin: 10px 10px 10px 10px">Page: {{ $template->links() }}</div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</div>
<script>
$(document).ready(function(){
  $(".delete").click(function(){
    let id = $(this).attr("id");
    let folder = $(this).attr("folder");
    if(confirm("Are you sure to delete this template ?")){
      let token = $('input[name=_token]').val();

      $.post("{{ route('deleteTemplate') }}",
        {
          'id': id,
          '_token':token,
          'folder':folder
        },function(data){
          if(data){
            alert("Delete Successful");
            location.reload();
          }
        },"html");
    }
  });
});
</script>
@endsection