<!DOCTYPE html>
<html>
<head>
  <title>Checklist</title>
</head>
<body>

  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.css') }}">
  <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Font Awesome-->
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
  <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
  <!-- ICheck -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icheck/all.css') }}">
  <!-- datatable -->
  <script src="{{ asset('assets/datatables/js/datatables.min.js') }}"></script>
  <!-- ICheck -->
  <script src="{{ asset('assets/js/icheck/icheck.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<style>
  
  .transaction_box { padding: 15px; margin-bottom: 10px; box-shadow: 1px 1px 3px 0px #666; }
  .checklist { display: flex; box-shadow: 1px 1px 5px 0px #666; padding: 15px 20px; margin-bottom: 10px; }
  .checklist .checklist_item { width: 150px; margin-right: 15px; }
  .checklist .checklist_item label { width: 100%; font-weight: bold; }
  .checklist .checklist_item img { width: 80px; box-shadow: 0px 0px 10px 0px #666; }
  .checklist .checklist_description { flex: 1; }
  .checklist .checklist_quantity { width: 150px; }
  .checklist .checklist_checkbox { width: 100px; }
  .checklist.done { background: #eefffa; }
  .icheck_checkbox label { margin: 0px; }

</style>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5 style="display: inline-block; width: calc(100% - 100px);">Manage Check List</h5>
            <a href="{{ route('getChecklist') }}" class="btn btn-info" style="float: right;">Back</a>
          </div>
          <div class="card-body" style="padding: 0 30px 30px 30px;">
            @foreach($transaction_list as $transaction)
              <div class="transaction_box">
                <label style="font-weight: bold;">Transaction ID : #{{ $transaction->id }}</label>
                @foreach($transaction->item as $item)
                  <div class="checklist {{ $item->checked == 1 ? ' done' : '' }}">
                    <div class="checklist_item">
                      <label>{{ $item->product_name }}</label>
                      <img src="{{ $item->path ? Storage::url($item->path) : asset('assets/images/layout-3/product/1.jpg') }}" />
                    </div>
                    <div class="checklist_description">
                      <span>{{ $item->sku }}</span>
                    </div>
                    <div class="checklist_quantity">
                      <label>Quantity x {{ $item->quantity }}</label>
                    </div>
                    <div class="checklist_checkbox">
                      <div class="checkbox icheck_checkbox">
                        <label>
                          <input class="icheck" type="checkbox" name="done" value="{{ $item->id }}" {{ $item->checked == 1 ? "checked" : "" }} /> Done
                        </label>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            @endforeach
            

            <button class="btn btn-info" type="button" id="complete_checklist" style="margin-top: 10px; float: right;">
              Complete
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script>

  var transaction_list = @json($transaction_list);
  
  $(".icheck").iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' /* optional */
  });

  $(".checklist:not(.checklist_checkbox)").click(function(){
    var checked = $(this).find(".icheck").is(":checked");
    console.log(checked);
    if(checked == true)
    {
      $(this).find(".icheck").iCheck("uncheck");
    }
    else
    {
      $(this).find(".icheck").iCheck("check");
    }
  });

  $(".icheck").on("ifChanged", function(){
    var transaction_id = $(this).val();
    var checked = $(this).is(":checked");

    if(checked == true)
    {
      $(this).parents().eq(4).addClass("done");
    }
    else
    {
      $(this).parents().eq(4).removeClass("done");
    }

    $.post("{{ route('updateChecklist') }}", { "_token" : "{{ csrf_token() }}", "transaction_id" : transaction_id, "checked" : checked }, function(response){
        console.log("done");
    }).fail(function(){
      alert("Error");
    });
  });

  $("#complete_checklist").click(function(){
    var completed = 1;
    $(".icheck").each(function(){
      if($(this).is(":checked") == false)
      {
        alert("Please update all item before you proceed to next transaction.");
        completed = 0;
        return false;
      }
    });

    if(completed == 0)
    {
      return;
    }

    var transaction_id_array = [];
    for(var a = 0; a < transaction_list.length; a++)
    {
      transaction_id_array.push(transaction_list[a].id);
    }

    $.post("{{ route('updateChecklistStatus') }}", { "_token" : "{{ csrf_token() }}", "transaction_id" : transaction_id_array }, function(response){
        if(response.error == 0)
        {
          alert(response.message);
          location.href = "{{ route('getChecklist') }}";
        }
        else
        {
          alert(response.message);
          location.href = "{{ route('getChecklist') }}";
        }
    }).fail(function(){
      alert("Error");
    });

  });

</script>

</html>