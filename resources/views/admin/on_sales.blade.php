@extends('admin.layout')

@section('layout')


<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Promotion
              <small>Homeu Admin Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Promotion</li>
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
            <h5>Promotion - On Sales</h5>
          </div>

          <div>
            <form action="{{ route('getOnSales')}}" method="get">
              <input class="form-control" type="text" name="search" placeholder="Name or SKU" style="width:20%;float:right;margin-right:3vw" value="{{ $search }}">
              <button class="btn btn-primary" style="float:right;margin-right:4px" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('updateOnsales') }}"/>
              @csrf
              <div class="digital-product">
                <div class="jsgrid-grid-header jsgrid-grid-header-scrollbar">
                  <table class="jsgrid-table">
                    <tr class="jsgrid-header-row">                              
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        Name
                      </th>
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        SKU
                      </th>
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        Active
                      </th>
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        Promotion Date Range
                      </th>
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        Discount Type
                      </th>
                      <th class="jsgrid-header-cell jsgrid-align-right">
                        Discount Amount
                      </th>
                    </tr>
                    <tbody>
                      <!-- Looping start here -->
                      @foreach($product_list as $value)
                      <tr class="jsgrid-row">
                        <td class="jsgrid-cell">
                          {{ $value->name }}
                        </td>
                        <td class="jsgrid-cell">
                          {{ $value->sku }}
                        </td>
                        <td class="jsgrid-cell">
                          <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active_{{ $value->id }}" value="1" {{ $value->on_sales == 1 ? 'checked' : '' }}>
                        </td>
                        <td class="jsgrid-cell">
                          <input type="text" name="daterange_{{ $value->id }}" input_type="daterange" class="form-control" autocomplete="off" value="{{ ($value->on_sales_from && $value->on_sales_to ? date('m/d/Y', strtotime($value->on_sales_from)).' - '.date('m/d/Y', strtotime($value->on_sales_to)) : '' ) }}" />
                        </td>
                        <td class="jsgrid-cell">
                          <div style="display: inline-block; margin-right: 10px;">
                            <label>
                              <input class="icheck" type="radio" name="discount_type_{{ $value->id}}" value="percentage" {{ $value->on_sales_type == "percentage" ? 'checked' : '' }} /> Percentage
                            </label>
                          </div>

                          <div style="display: inline-block;">
                            <label>
                              <input class="icheck" type="radio" name="discount_type_{{ $value->id}}" value="fixed" {{ $value->on_sales_type == "fixed" ? 'checked' : '' }} /> Fixed Price
                            </label>
                          </div>
                        </td>
                        <td class="jsgrid-cell">
                          <input type="text" class="form-control" style="max-width: 100px; margin: auto;" name="discount_amount_{{ $value->id }}" value="{{ $value->on_sales_amount }}" />
                          <input type="hidden" name="product_id[]" value="{{ $value->id }}" />
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <!--  Pagination  Start-->
                  <div class="jsgrid-pager-container" >
                    <div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                      {{ $product_list->links() }}
                    </div>
                  </div>
                  <!-- Pagination End -->

                </div>
              </div>

              <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-success">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<script>

  $(document).ready(function(){

    $(".icheck").iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

    $("input[input_type=daterange]").daterangepicker({
       opens: 'left'
    });

  });

  

</script>
@endsection