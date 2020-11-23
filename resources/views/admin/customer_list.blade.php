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
          <li class="breadcrumb-item active">Customer List</li>
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
    <h5>Customer List</h5>
  </div>
  <div class="card-body">
   <div class="category-table user-list order-table jsgrid" style="position: relative; height: auto; width: 100%;">
     <div>
      <table class="" id="customer_list">
        <thead class="">							
          <th>Name
          </th>
          <th>Email
          </th>
          <th>Contact Number
          </th>
          <th>Total Quantity Transaction
          </th>
          <th>Total Amount Spended
          </th>
          <th>Last Login
          </th>
          <th>Create Time
          </th>
        </thead>
        <tbody class="jsgrid-row">
          @foreach($user as $result)
          <tr>
            <td>{{ $result->fname }} {{$result->lname}}</td>
            <td>{{ $result->email }}</td>
            <td>{{ ($result->contact == "") ? 'Not Available' : $result->contact }}</td>
            <td style="text-align: center">{{ $result->quantity }}</td>
            <td>Rm {{ ($result->total_amount == null) ? 0 : number_format($result->total_amount,2)}}</td>
            <td>{{ $result->last_login }}</td>
            <td>{{ $result->created_at }}</td>
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
<!-- Container-fluid Ends-->
</div>


<script>
  $("#customer_list").DataTable();

</script>

@endsection


