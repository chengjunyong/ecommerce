<html>
<head>
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <title>
    Specify Date Report
  </title>
  <style>
    body{
      background-color: black;
    }
    .container{
      margin:auto;
      width:90%;
      height:auto;
      background-color:white;
    }
    .line{
      border: 1px solid;
      margin:10px 0px 10px 0px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header" style="font-size:18px">
      <div><h2 align="center">Specify Date Report</h2></div>
      <div id="c_date" align="center">Report Generate Date :</div><br/>
      <div align="center">Date Start : <b>{{ $date_start }}</b></div>
      <div align="center">Date End : <b>{{ $date_end }}</b></div>
    </div>
    <div class="line"></div>
    <div class="body">
      <table style="width:100%;background-color:white;text-align:left">
        <thead>
          <tr>
            <th style="width:5%">Index</th>
            <th style="width:15%">Transaction ID</th>
            <th style="width:15%">Discount Amount</th>
            <th style="width:30%">Items</th>
            <th style="width:10%">Quantity</th>
            <th style="width:20%">Total</th>
          </tr>
        </thead>
        <tbody>
          {!! $output !!}
        </tbody>
      </table>  
    </div>
  </div>
</body>
<script>
$(document).ready(function(){  
  var today = new Date();
  $("#c_date").html("Report Generate Date : <b>"+ today + "</b>");
});
</script>
</html>