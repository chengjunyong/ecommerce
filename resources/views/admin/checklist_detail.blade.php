@extends('admin.layout')
@section('layout')
<style>
.jsgrid-cell{
    text-align: center !important;
}

  .checklist { display: flex; box-shadow: 1px 1px 5px 0px #666; padding: 15px 20px; margin-bottom: 10px; }
  .checklist .checklist_item { width: 200px; margin-right: 15px; }
  .checklist .checklist_item label { width: 100%; font-weight: bold; }
  .checklist .checklist_item img { max-width: 150px; box-shadow: 0px 0px 10px 0px #666; }
  .checklist .checklist_description { flex: 1; }
  .checklist .checklist_quantity { width: 150px; }
  .checklist .checklist_checkbox { width: 100px; }
  .icheck_checkbox label { margin: 0px; }

</style>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Check List Detail
            <small>Homeu Admin Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Check list Detail</li>
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
            <h5>Manage Check List</h5>
          </div>
          <div class="card-body" style="padding: 0 30px 30px 30px;">
            @foreach($transaction_detail as $item)
              <div class="checklist">
                <div class="checklist_item">
                  <label>{{ $item->product_name }}</label>
                  <img src="{{ $item->path ? Storage::url($item->path) : asset('assets/images/layout-3/product/1.jpg') }}" />
                </div>
                <div class="checklist_description">
                  <span>{{ $item->description }}</span>
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

            <button class="btn btn-info" type="button" style="margin-top: 10px; float: right;" id="next_transaction">
              {{ $next_transaction ? "Next" : "Completed" }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  
  $(".icheck").iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' /* optional */
  });

  $(".icheck").on("ifChanged", function(){
    var transaction_id = $(this).val();
    var checked = $(this).is(":checked");

    $.post("{{ route('updateChecklist') }}", { "_token" : "{{ csrf_token() }}", "transaction_id" : transaction_id, "checked" : checked }, function(response){
        console.log("done");
    }).fail(function(){
      alert("Error");
    });
  });

  $("#next_transaction").click(function(){

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

    var transaction_id = "{{ $transaction_id }}";
    $.post("{{ route('updateTransaction') }}", { "_token" : "{{ csrf_token() }}", "transaction_id" : transaction_id }, function(response){
        if(response.error == 0)
        {
          var next_transaction = "{{ $next_transaction }}";
          if(next_transaction != null)
          {
            var route_url = "{{ route('getChecklistDetail', ['id' => ':id']) }}";
            route_url = route_url.replace(':id', next_transaction);

            location.href = route_url;
          }
          else
          {
            location.href = "{{ route('getChecklist') }}";
          }
        }
        else
        {
          alert(response.message);
        }
    }).fail(function(){
      alert("Error");
    });
  });

</script>

@endsection