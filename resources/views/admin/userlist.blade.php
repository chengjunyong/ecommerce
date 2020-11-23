@extends('admin.layout')
@section('layout')
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header-left">
						<h3>User List
              <small>Homeu Admin panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
         <ol class="breadcrumb pull-right">
          <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">User List</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="card">
   <div class="card-header">
    <h5>User Details</h5>
  </div>
  <div class="card-body">
    <div class="btn-popup pull-right">
     <a href="{{ route('getCreateUser') }}" class="btn btn-secondary">Create User</a>
   </div>

   <div id="" class="category-table user-list order-table jsgrid" style="position: relative; height: auto; width: 100%;">
     <div class="jsgrid-grid-header jsgrid-header-scrollbar">
      <table class="jsgrid-table">
        <thead class="jsgrid-header-row">
          <th class="jsgrid-header-cell jsgrid-align-center" style="width: 60px;"><button type="button" class="btn btn-danger btn-sm btn-delete mb-0 b-r-4" id="delete_btn">Delete</button>
          </th>								
          <th class="jsgrid-header-cell" style="width: 100px;">First Name
          </th>
          <th class="jsgrid-header-cell" style="width: 100px;">Last Name
          </th>
          <th class="jsgrid-header-cell" style="width: 100px;">Email
          </th>
          <th class="jsgrid-header-cell" style="width: 100px;">Last Login
          </th>
          <th class="jsgrid-header-cell" style="width: 100px;">Role
          </th>
        </thead>
        @csrf
        <tbody class="jsgrid-row">
          @foreach($user_list as $user)
          <tr>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">
              <input type="checkbox" class="checkbox" target="{{ $user->id }}">
            </td>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $user->fname }}</td>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $user->lname }}</td>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $user->email }}</td>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $user->last_login ? date('d M Y H:i:s', strtotime($user->last_login)) : "" }}</td>
            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">{{ $user->position }}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>

  </div>
  <div class="jsgrid-load-shader" style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;">
  </div>
  <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...
  </div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>

<script>
  $("#delete_btn").click(function(){
    if($(".checkbox:checked").length <= 0){
        alert("Please select atleast 1 user");
    }else{
        let token = $('input[name=_token]').val();
        var user_list = [];
        $(".checkbox:checked").each(function(){
            user_list.push($(this).attr('target'));
        });

        $.post("{{ route('bulkUserDelete') }}",
        {
            _token : token,
            user_list : user_list

        },function(data){
            if(data == 'true'){
                alert("Data delete successful");
                location.reload();
            }else{
                alert("Something Wrong, please contact IT services");
            }
        },"html");

    }

  });
</script>
@endsection