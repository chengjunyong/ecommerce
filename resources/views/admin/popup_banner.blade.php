@extends('admin.layout')

@section('layout')


<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header-left">
            <h3>Banner
              <small>Homeu Admin Panel</small>
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{ route('getIndex') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Pop-up Banner</li>
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
            <h5>Banner - Pop-up Banner</h5>
          </div>

          <div>
            <form action="{{ route('getProductPopup') }}" method="post">
              @csrf
              <input class="form-control" type="text" name="target" placeholder="Name or SKU" style="width:20%;float:right;margin-right:3vw">
              <button class="btn btn-primary" style="float:right;margin-right:4px" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('postPopupBanner') }}"/>
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
                        Last Updated Date
                      </th>
                    </tr>
                    <tbody>
                      @foreach($product as $result)
                      <input type='text' name="product_id[]" value="{{ $result->id }}" hidden/>
                      <tr class="jsgrid-row">
                        <td class="jsgrid-cell">
                          {{ $result->name }}
                        </td>
                        <td class="jsgrid-cell">
                          {{ $result->sku }}
                        </td>
                        <td class="jsgrid-cell">
                          <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active[]" value="{{ $result->id }}" {{ $result->popup_banner == 1 ? 'checked' : '' }} />
                        </td>
                        <td class="jsgrid-cell">
                          {{ $result->updated_at }}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <!--  Pagination  Start-->
                  <div class="jsgrid-pager-container" >
                    <div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                      {{ $product->links() }}
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
</div>



@endsection