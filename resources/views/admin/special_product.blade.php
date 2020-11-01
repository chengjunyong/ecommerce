@extends('admin.layout')

@section('layout')

<style>
  
  .addBtn { width: 30px; height: 30px; border-radius: 50%; background: #00baf2; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; margin: 20px; }

</style>


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
            <li class="breadcrumb-item active">Special Product</li>
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
            <h5>Promotion - Special Product</h5>
          </div>

          <div>
            <form action="{{ route('getSpecialProduct')}}" method="get">
              <input class="form-control" type="text" name="search" placeholder="Special product name" style="width:20%;float:right;margin-right:3vw" value="{{ $search }}">
              <button class="btn btn-primary" style="float:right;margin-right:4px" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('updateSpecialProduct') }}"/>
              @csrf
              <div class="digital-product">
                <div class="jsgrid-grid-header jsgrid-grid-header-scrollbar">
                  <table class="jsgrid-table" id="special_product_table">
                    <thead>
                      <tr class="jsgrid-header-row">                              
                        <th class="jsgrid-header-cell jsgrid-align-right">
                          Name
                        </th>
                        <th class="jsgrid-header-cell jsgrid-align-right">
                          Active
                        </th>
                        <th class="jsgrid-header-cell jsgrid-align-right">
                          Product List
                        </th>
                        <th class="jsgrid-header-cell jsgrid-align-right">
                          Edit
                        </th>
                        <th class="jsgrid-header-cell jsgrid-align-right">
                          Remove
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Looping start here -->
                      @foreach($special_product_list as $value)
                      <tr class="jsgrid-row">
                        <td class="jsgrid-cell">
                          <p>{{ $value->name }}</p>
                          <input type="text" name="name_{{ $value->id }}" class="form-control" value="{{ $value->name }}" ori_value="{{ $value->name }}" style="display: none;" />
                        </td>
                        <td class="jsgrid-cell">
                          <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active_{{ $value->id }}" value="1" {{ $value->active == 1 ? 'checked' : '' }}>
                        </td>
                        <td class="jsgrid-cell">
                          <a href="{{ route('getSpecialProductDetail', ['id' => $value->id]) }}" class="btn btn-primary">Detail</a>
                        </td>
                        <td class="jsgrid-cell">
                          <div class="btn btn-primary edit" onclick="editSpecialProductType(this)">
                            <i class="fas fa-edit"></i>
                          </div>
                          <div class="btn btn-warning undo" onclick="undoSpecialProductType(this)" style="display: none;">
                            <i class="fas fa-times"></i>
                          </div>
                        </td>
                        <td class="jsgrid-cell">
                          <div class="btn btn-danger" onclick="removeSpecialProductType({{ $value->id }} )">
                            <i class="fa fa-trash"></i>
                          </div>
                          <input type="hidden" name="special_product[]" value="{{ $value->id }}" />
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="4">
                          <div class="addBtn" onclick="addSpecialProductType()">
                            <i class="fa fa-plus"></i>
                          </div>
                        </td>
                      </tr>
                    </tfoot>
                  </table>

                  <!--  Pagination  Start-->
                  <div class="jsgrid-pager-container" >
                    <div class="jsgrid-pager" style="float:right;margin-right:5px">Pages: 
                      {{ $special_product_list->links() }}
                    </div>
                  </div>
                  <!-- Pagination End -->

                </div>
              </div>

              <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-success">Update</button>
              </div>
            </form>

            <form method="POST" action="{{ route('deleteSpecialProduct') }}" id="deleteSpecialProductForm">
              @csrf
              <input type="hidden" name="special_product_id" id="deleteSpecialProductID" />
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

    

  });

  function removeSpecialProductType(id, _this)
  {
    if(id == "temp")
    {
      $(_this).parent().parent().remove();
    }
  }

  function addSpecialProductType()
  {
    var html = "";
    html += "<tr class='jsgrid-header-row'>";
    html += "<td colspan=3 class='jsgrid-cell'><input type='text' class='form-control' name='new_special_product_type[]' /></td>";
    html += '<td class="jsgrid-cell">';
    html += '<div class="btn btn-danger" onclick="removeSpecialProductType(\'temp\', this)">';
    html += '<i class="fa fa-trash"></i>';
    html += '</div>';
    html += '</td>';
    html += "</tr>";

    $("#special_product_table tbody").append(html);
  }

  function removeSpecialProductType(special_product_id)
  {
    var response = confirm("Are you sure to delete this?");
    if(response == true)
    {
      $("#deleteSpecialProductID").val(special_product_id);
      $("#deleteSpecialProductForm").submit();
    }
  } 

  function editSpecialProductType(_this)
  {
    $(_this).parent().siblings("td:first-child").children("p").hide();
    $(_this).parent().siblings("td:first-child").children("input").show();
    $(_this).hide();
    $(_this).siblings(".undo").show();
  }

  function undoSpecialProductType(_this)
  {
    var siblings_name = $(_this).parent().siblings("td:first-child").children("input");
    siblings_name.hide();
    var ori_value = siblings_name.attr("ori_value");
    siblings_name.val(ori_value);

    $(_this).parent().siblings("td:first-child").children("p").show();

    $(_this).hide();
    $(_this).siblings(".edit").show();
  }
  

</script>
@endsection