@extends('admin.layout')
@section('layout')
<style>
.jsgrid-cell{
    text-align: center !important;
}
</style>
<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Check List
            <small>Homeu Admin Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Check list</li>
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
          <div class="card-body">
            <button class="btn btn-info" style="margin-bottom: 10px;" type="button" id="orderChecklist" {{ count($confirmed_list) > 0 ? "" : "disabled" }}>Order checklist</button>
            <table class="table" id="checklist_table">
              <thead>
                <th>Transaction ID</th>
                <th>Transaction Created Date</th>
                <th>Status Updated Date</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($confirmed_list as $confirmed)
                  <tr>
                    <td>#{{ $confirmed->id }}</td>
                    <td>{{ date('d M Y H:i:s', strtotime($confirmed->created_at)) }}</td>
                    <td>{{ date('d M Y H:i:s', strtotime($confirmed->updated_at)) }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ route('getChecklistDetail', ['id' => $confirmed->id ]) }}">Detail</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

<script>
  
  $("#checklist_table").DataTable( {
    responsive: true,
  });

  $("#orderChecklist").click(function(){
    location.href = "{{ route('getChecklistItem') }}";
  });

</script>

@endsection