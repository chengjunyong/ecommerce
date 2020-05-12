@extends('admin.layout')
@section('layout')
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header-left">
						<h3>Transactions
							<small>Homeu Admin panel</small>
						</h3>
					</div>
				</div>
				<div class="col-lg-6">
					<ol class="breadcrumb pull-right">
						<li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
						<li class="breadcrumb-item active">Transactions</li>
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
						<h5>Transaction Details</h5>
					</div>
					<div>
						<form action="{{ route('searchTransaction') }}" method="post">
							@csrf
							<input class="form-control" type="text" name="transaction_id" placeholder="Transaction id" style="width:20%;float:right;margin-right:3vw">
							<button class="btn btn-primary" style="float:right;margin-right:4px"><i class="fas fa-search"></i></button>
						</form>
					</div>
					<div class="card-body">
						<div id="" class="transactions jsgrid" style="position: relative; height: auto; width: 100%;">
							<div class="jsgrid-grid-header jsgrid-header-scrollbar">
								<table class="jsgrid-table" id="transaction" style="border-bottom:none">
									<thead>
										<tr class="jsgrid-header-row">
											<th class="jsgrid-header-cell" style="width: 50px;">Transaction Id
											</th>
											<th class="jsgrid-header-cell jsgrid-align-right" style="width: 100px;">Customer Contact Number
											</th>
											<th class="jsgrid-header-cell" style="width: 100px;">Total Amount
											</th>
											<th class="jsgrid-header-cell" style="width: 50px;">Payment Method
											</th>
											<th class="jsgrid-header-cell" style="width: 100px;">Delivery Status
											</th>
											<th class="jsgrid-header-cell" style="width: 100px;">Delivered Date
											</th>
										</tr>
									</thead>
							</div>
							<div class="jsgrid-grid-body">

									<tbody>
										@foreach($transaction as $key => $result)
										<tr class="{{ $key % 2 == 0 ? 'jsgrid-row' : 'jsgrid-alt-row' }}">
											<td class="jsgrid-cell" style="width: 50px;">{{ $result->id }}</td>
											
											<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">{{ $result->phone_number }}</td>
											
											<td class="jsgrid-cell" style="width: 100px;">{{ $result->total }}</td>
											
											<td class="jsgrid-cell" style="width: 50px;">{{ $result->payment_type }} Cash On Delivery</td>
										
											<td class="jsgrid-cell" style="width: 100px;">{{ $result->status == 4 ? 'Delivered' : 'Cancel' }}</td>
										
											<td class="jsgrid-cell" style="width: 100px;">{{ $result->updated_at }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="jsgrid-pager-container">
								<div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                                    {{ $transaction->links() }}
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
<script>
$(document).ready(function(){
    $("#transaction").DataTable({
        "searching": false,
        "paging": false,
        "lengthMenu": false,
        "responsive": true,
    });
});
</script>
@endsection