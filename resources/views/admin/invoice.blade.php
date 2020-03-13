@extends('admin.layout')
@section('layout')


<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

<!-- jsgrid css-->
<link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Jsgrid js-->
<script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-invoice.js"></script>
<script src="../assets/js/jsgrid/jsgrid-invoice.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
<div class="page-body">
	
	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<div class="card">
					
					<div class="card-header">
						<h5>Invoice List</h5>
						
					</div>
					
					<div class="card-body">
						
						<div id="" class="product-list jsgrid" style="position: relative; height: auto; width: 100%;">
							<div class="jsgrid-grid-header jsgrid-header-scrollbar">
								<table class="jsgrid-table">
									<tr class="jsgrid-header-row">
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">No
										</th>
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 100px;">Invoice
										</th>
										<th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Date
										</th>
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 100px;">Shipping
										</th>
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 100px;">Amount
										</th>
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 100px;">Tax
										</th>
										<th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 100px;">Total
										</th>
										<th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											
										</th>
									</tr>
									<tr class="jsgrid-filter-row" style="display: table-row;">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell" style="width: 100px;">
											<input type="text">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<input class="jsgrid-button jsgrid-search-button" type="button" title="Search">
											<input class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter">
										</td>
									</tr>
									<tr class="jsgrid-insert-row" style="display: none;">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell" style="width: 100px;">
											<input type="text">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 
											<input type="number">
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<input class="jsgrid-button jsgrid-insert-button" type="button" title="Insert">
										</td>
									</tr>
								</table>
							</div>
							<div class="jsgrid-grid-body">
								<table class="jsgrid-table"><tbody>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">1
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50764
										</td>
										<td class="jsgrid-cell" style="width: 100px;">1/1/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 3
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 816
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 65
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 884
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">2
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50765
										</td>
										<td class="jsgrid-cell" style="width: 100px;">15/3/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 8.4
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 146
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 70
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 225.4
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">3
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50766
										</td>
										<td class="jsgrid-cell" style="width: 100px;">28/4/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 7.3
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 47
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 724
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 789
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">4
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50767
										</td>
										<td class="jsgrid-cell" style="width: 100px;">31/4/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 2.00
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 478
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 35
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 512
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">5
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50768
										</td>
										<td class="jsgrid-cell" style="width: 100px;">2/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1.5
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1460
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 45.32
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1515
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">6
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50769
										</td>
										<td class="jsgrid-cell" style="width: 100px;">3/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 8.45
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 768
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 17
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 780
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">7
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50770
										</td>
										<td class="jsgrid-cell" style="width: 100px;">4/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 25.8
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 874
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 27.2
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 945.10
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">8
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50771
										</td>
										<td class="jsgrid-cell" style="width: 100px;">8/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 17.2
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 671
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 83.7
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 775.9
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">9
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50772
										</td>
										<td class="jsgrid-cell" style="width: 100px;">12/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 87.5
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 572
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 8.70
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 615
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">10
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50773
										</td>
										<td class="jsgrid-cell" style="width: 100px;">16/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 78.12
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 489
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 10.57
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 516
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">11
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50774
										</td>
										<td class="jsgrid-cell" style="width: 100px;">20/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 57.56
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 800
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 78.2
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 975
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">12
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50775
										</td>
										<td class="jsgrid-cell" style="width: 100px;">22/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 40.17
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 867
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 57.2
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 945
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">13
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50776
										</td>
										<td class="jsgrid-cell" style="width: 100px;">25/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 80.04
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 4782
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 47.5
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 5354
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">14
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50777
										</td>
										<td class="jsgrid-cell" style="width: 100px;">27/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 6.15
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 576
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 4.48
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 599
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">15
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50778
										</td>
										<td class="jsgrid-cell" style="width: 100px;">29/5/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 8.67
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 875
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 56.78
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 987
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">16
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50779
										</td>
										<td class="jsgrid-cell" style="width: 100px;">5/6/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 7.88
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 547
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 5.72
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 600
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">17
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50780
										</td>
										<td class="jsgrid-cell" style="width: 100px;">8/6/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 3.14
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 781
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 23.47
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 817
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">18
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50781
										</td>
										<td class="jsgrid-cell" style="width: 100px;">14/6/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 7.3
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 47
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 724
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 789
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">19
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50782
										</td>
										<td class="jsgrid-cell" style="width: 100px;">18/6/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 2.00
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 478
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 35
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 512
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr>
									<tr class="jsgrid-alt-row">
										<td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">50783
										</td>
										<td class="jsgrid-cell" style="width: 100px;">21/6/2018
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1.5
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1460
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 45.32
										</td>
										<td class="jsgrid-cell jsgrid-align-right" style="width: 100px;">Rm 1515
										</td>
										<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
											<i class="fa fa-print" style="font-size:20px"></i>
											
										</td>
									</tr></tbody>
								</table>
							</div>
							<div class="jsgrid-pager-container" style="">
								<div class="jsgrid-pager">Pages:
									<span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a>
								</span>
								<span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a>
							</span>
							<span class="jsgrid-pager-page jsgrid-pager-current-page">1
							</span>
							<span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a>
						</span>
						<span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a>
					</span>
					<span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a>
				</span> &nbsp;&nbsp; 1 of 2
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

</div>

</div>
</div>
@endsection