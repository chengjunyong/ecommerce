@extends('admin.layout')

@section('layout')
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
	    <div class="page-header">
	        <div class="row">
	            <div class="col-lg-6">
	                <div class="page-header-left">
	                    <h3>Banner
	                        <small>Homeu Admin Panel</small>
	                    </h3>
	                </div>
	            </div>
	            <div class="col-lg-6">
	                <ol class="breadcrumb pull-right">
	                    <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
	                    <li class="breadcrumb-item active">Banner Slider</li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Container-fluid Ends-->
  @csrf
	<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
            	<h4>Banner Slider</h4>
            </div>
            <div class="add_banner">
            	<a href="{{ route('getAddBanner') }}"><button class="btn btn-primary" style="margin-left: 2vw">Add Banner Image</button></a>
            </div>
            <div class="card-body">
            	<table class="jsgrid-table" id="table">
            		<thead class="jsgrid-header-row">
            			<td class="jsgrid-header-cell">Index</td>
            			<td class="jsgrid-header-cell">Url</td>
            			<td class="jsgrid-header-cell">Images Url</td>
            			<td class="jsgrid-header-cell">Title 1</td>
            			<td class="jsgrid-header-cell">Title 2</td>
            			<td class="jsgrid-header-cell">Last Updated</td>
                        <td class="jsgrid-header-cell"></td>
            		</thead>
            		<tbody>
                @foreach($banner as $result)
            			<tr class="jsgrid-row">
            				<td class="jsgrid-cell">{{$result['id']}}</td>
            				<td class="jsgrid-cell"><a href="{{$result['target_url']}}" target="_blank">{{$result['target_url']}}</a></td>
            				<td class="jsgrid-cell"><a href="{{Storage::url($result->img_path)}}" target="_blank"><img src="{{Storage::url($result->img_path)}}" width="100%" height="80"></a></td>
            				<td class="jsgrid-cell">{{$result['title1']}}</td>
            				<td class="jsgrid-cell">{{$result['title2']}}</td>
            				<td class="jsgrid-cell">{{$result['updated_at']}}</td>
                    <td class="jsgrid-cell">
                      <a href="{{route('getEditBanner',$result['id'])}}">
                        <button class="btn btn-primary">Edit</button>
                      </a>
                      <button type="button" class="btn btn-danger delete" data-id="{{$result['id']}}" style="margin-left:10px">Delete</button></td>
            			</tr>
                @endforeach
            		</tbody>
            	</table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
	$("#table").DataTable();

  $(".paginate_button current").addClass("btn btn-primary").removeClass("paginate_button current");

  $(".delete").click(function(){
    let id = $(this).attr("data-id");
    let token = $("input[name='_token']").val();
    $(this).parents().eq(1).remove();

    $.post("{{route('deleteBanner')}}",
    {
      'id' : id,
      '_token' : token

    },function(data){
    },"html");


  });

</script>

@endsection