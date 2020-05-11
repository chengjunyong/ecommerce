<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>
<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
</style>
<body>
	<h2 align="center">Delivery Checklist (AWB)</h2>
	<h5 align="center" id="date" style="margin-bottom:15px"></h5>
	<table align="center" style="width:95%;border:1px solid">
		<thead>
			<tr>
				<th width="70%" style="margin-left:10px;text-align: center;">Deliver Details</th>
				<th style="text-align: center;">Signature</th>
			</tr>
		</thead>
		<tbody>
			@foreach($transaction as $result)
			<tr>
				<td>
					<div class="row">
						<div class="col-sm-5" style="margin-left:15px">
							<label><b>Transaction Id</b> : {{ $result->id }}</label><br/>
							<label><b>Address</b> : </label><br/>{{ $result->fname }} {{ $result->lname }}<br/><textarea rows="3" cols="30" style="border:none;resize:none">{!! $result->delivery_address !!}</textarea> <br/>
						</div>
						<div class="col-sm-5">
							<label><b>Contact Number</b> : {{ $result->phone_number }}</label><br/>
							<lable><b>Payment Type</b> : Cash On Delivery</lable><br/><br/>
							<lable><b>Total</b> : </lable><lable style="text-align: right">Rm {{ $result->total }}</lable>
						</div>
					</div>
				</td>
				<td align="center">
					<lable><b>Customer Name:</b></lable><br/>
					<lable>{{ $result->fname }} {{ $result->lname }}</lable><br/><br/><br/>
					<lable>
						...........................................
					</lable>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
<script>
$(document).ready(function(){
	var today = new Date();
	$("#date").html(`Printed Date : ${today}`);
	window.print();
    setTimeout(function () { window.close(); }, 100);
});

</script>
</html>