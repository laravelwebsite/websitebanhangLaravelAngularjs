@extends('admin.layout.index')
@section('title')
Bill | Admin
@endsection
@section('content')
<!-- page start-->
<div class="row" ng-controller="HoadonController" ng-init="user='{{Auth::user()->id}}'">
  <div class="col-sm-12">
    <section class="panel">
      <div class="panel-heading">
        <div class="col-sm-6 col-md-6 col-lg-6">
         <form class="form-inline">
          <div class="form-group">
            <label >Search</label>
            <input type="text" ng-model="search" class="form-control" placeholder="Search">
          </div>
        </form>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
        <header class="text-right">#</header>
      </div>
      <div class="clearfix"> </div>
    </div>
    
    <div id="contentajax">
      <table class="table table-hover display table-bordered">
        <thead>
          <tr>

            <th ><i class="fa fa-bookmark"></i>CheckAll <input type="checkbox" id="checkall" ng-model="checkall" /></th>
            <th ng-click="sort('Mahoadon')"><i class="fa fa-bookmark"></i>ID
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th ng-click="sort('email')"><i class=" fa fa-user"></i>EMAIL
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>    
            <th ng-click="sort('phone')"><i class=" fa fa-user"></i>PHONE
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>   
            <th ng-click="sort('price')"><i class=" fa fa-user"></i>PRICE
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th> 
            <th ng-click="sort('status')"><i class=" fa fa-user"></i>STATUS
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th class="text-center"><i class=" fa fa-edit"></i> </th>
          </tr>
        </thead>
        <tbody>
          <sample-text></sample-text>
          <div orientable></div>
          <tr dir-paginate="hd in hoadons|orderBy:sortKey:reverse|filter:search|itemsPerPage:5" >
            <td class="text-center" ><input type="checkbox" class="id" id="id" name="id" ng-checked="checkall" value="[[hd.id]]" /></td>
            
            <td class="text-center"><span><a target="_blank" href="admin/hoadon/chi-tiet-hoa-don/[[hd.Mahoadon]]" title="xem chi tiết hóa đơn">[[hd.Mahoadon]]</a></span></td>
            <td class="text-center"><span>[[hd.email]]</span></td>
            <td class="text-center"><span>[[hd.phone]]</span></td>
            <td class="text-center"><span>[[hd.price]]</span></td>
            <td class="text-center" ng-if="[[hd.status]]==1"><span style="color: red;font-weight: bold;">Đang đợi xác nhận</span></td>
            <td class="text-center" ng-if="[[hd.status]]==2"><span style="color: blue;font-weight: bold;">Đang gửi hàng</span></td>
            <td class="text-center" ng-if="[[hd.status]]==3"><span style="color: green;font-weight: bold;">Đã nhận hàng</span></td>
            <td class="text-center">
              <a ng-click="modal('status',hd.id)" class="btn btn-warning btn-xs" id="edituser" title="Click to detail"><i class="fa fa-eye"></i></a>
              <a ng-click="modal('edit',hd.id)" class="btn btn-primary btn-xs" id="edituser"><i class="fa fa-pencil"></i></a>      
              <a class="btn btn-danger btn-xs tooltips btn-del-record" id="[[hd.id]]" data-toggle="modal" data-placement="top" data-original-title="Delete record." ng-click="delete(hd.id)"><i class="fa fa-trash-o "></i></a>
            </td>
          </tr>
        </tbody>
      </table>
      <dir-pagination-controls
      max-size="5"
      direction-links="true"
      boundary-links="true" >
    </dir-pagination-controls>
    <div style="float: left"><button id="btn-delete-all" class="btn btn-primary btn-lg" >Xóa mục đã chọn</button></div>
    <div class="row-fluid">
      <div class="col-sm-3 col-md-3 col-lg-3">
       <div class="dataTables_info">

       </div>
     </div>
     <div class="col-sm-9 col-md-9 col-lg-9">
      <div class="dataTables_paginate paging_bootstrap pagination">
        <ul>

        </ul>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<!-- Modal Add-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >[[frmTitle]] </h4>
      </div>
      <div class="modal-body" ng-init="add=[[add]]">
        <form name="frmHoadon" class="form-horizontal" enctype="multipart/form-data">
          <div ng-show="success" class="text-success text-center">
           [[thongbao]]
         </div>
         <div class="alert alert-success" ng-show="alert">
          <strong>[[thongbao]]</strong>
        </div>
        <div class="form-group">
          <label for="Mahoadon" class="col-sm-3 control-label">CODE</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" ng-disabled="true" id="Mahoadon" name="Mahoadon"  ng-required="true" ng-model="hoadonbyId.Mahoadon"/>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">NAME</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" ng-disabled="true" id="name" name="name" ng-required="true" ng-model="hoadonbyId.name"/>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" ng-minlength="2" ng-maxlength="50" ng-required="true" placeholder="Vui lòng nhập Email" ng-model="hoadonbyId.email"/>
            <i class="fa fa-check text-success" ng-show=" frmHoadon.email.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.email.$error.required">Vui lòng nhập Email</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.email.$error.email">Email không đúng định dạng</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.email.$error.minlength">Email tối thiểu 2 ký tự</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.email.$error.maxlength">Không đưọc nhập quá 50 ký tự</span>
          </div>
        </div>
        <div class="form-group">
          <label for="phone" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="phone" name="phone" ng-minlength="7" ng-maxlength="11" ng-required="true" placeholder="Vui lòng nhập số điện thoại" ng-model="hoadonbyId.phone"/>
            <i class="fa fa-check text-success" ng-show=" frmHoadon.phone.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.phone.$error.required">Vui lòng nhập Số điện thoại</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.phone.$error.minlength">Số điện thoại tối thiểu 7 ký tự</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.phone.$error.maxlength">Không đưọc nhập quá 11 ký tự</span>
          </div>
        </div>
        <div class="form-group">
          <label for="address" class="col-sm-3 control-label">Address</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="address" name="address" ng-minlength="2" ng-maxlength="100" ng-required="true" placeholder="Vui lòng nhập địa chỉ" ng-model="hoadonbyId.address"/>
            <i class="fa fa-check text-success" ng-show=" frmHoadon.address.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.address.$error.required">Vui lòng nhập Địa chỉ</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.address.$error.number">Số điện thoại không đúng</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.address.$error.minlength"> Địa chỉ tối thiểu 2 ký tự</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmHoadon.address.$error.maxlength">Không đưọc nhập quá 100 ký tự</span>
          </div>
        </div>
        <div class="form-group">
          <label for="price" class="col-sm-3 control-label">TOTAL</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" ng-disabled="true" id="price" name="price"  ng-required="true" ng-model="hoadonbyId.price"/>
          </div>
        </div>
        <div class="form-group">
          <label for="address" class="col-sm-3 control-label" style="color: green">Products Ordered</label>
          <div class="col-sm-9">
            <table id="cart" class="table table-hover table-condensed"> 
              <thead> 
               <tr> 
                <th style="width:50%;color: red">Tên sản phẩm</th> 
                <th style="width:10%;color: red">Giá</th> 
                <th style="width:8%;color: red">Số lượng</th> 
                <th style="width:22%;color: red" class="text-center">Thành tiền</th> 
                <th style="width:10%;color: red"> </th> 
              </tr> 
            </thead> 
            <tbody>
              <tr ng-repeat="prohd in hoadonbyId.hoadonsanpham"> 
               <td data-th="Product">[[prohd.product.name]]</td> 
               <td data-th="Price">[[prohd.price]]</td> 
               <td data-th="Quantity"><input class="qty" ng-keyup="getProductid(prohd.product.id)" name="qty" update-hd class="form-control text-center" ng-model="prohd.qty" type="number">
               </td> 
               <td data-th="Subtotal" class="text-center">[[prohd.subtotal]]</td> 

             </tr> 
           </tbody>
         </table>
       </div>
     </div>

   </form>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-primary" ng-click="close()">Cancle</button>
  <button type="button" class="btn btn-primary" ng-disabled="frmproduct.$invalid" ng-click="save(state,id,picFile)">Lưu</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Add 2-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >[[frmTitle]] </h4>
      </div>
      <div class="modal-body" ng-init="add=[[add]]">
        <form name="frmHoadon" class="form-horizontal" enctype="multipart/form-data">
          <div ng-show="success" class="text-success text-center">
           [[thongbao]]
         </div>
         <div class="alert alert-success" ng-show="alert">
          <strong>[[thongbao]]</strong>
        </div>
        <div class="form-group">
         <label for="name" class="col-sm-3 control-label">Trạng thái</label>
         <input type="radio" name="sex"   ng-checked="hoadonbyId.status==1" value="1" ng-model="status" ng-click="getVal()"> <span style="color: red">Đang đợi xác nhận</span>
         <input type="radio" name="sex"  ng-checked="hoadonbyId.status==2" value="2" ng-model="status" ng-click="getVal()"> <span style="color: blue">Đã gửi hàng</span>
         <input type="radio" name="sex" ng-checked="hoadonbyId.status==3" value="3" ng-model="status" ng-click="getVal()"> <span style="color: green">Đã nhận hàng</span>
         <br>

       </div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-primary" ng-click="close()">Cancle</button>
      <button type="button" class="btn btn-primary" ng-disabled="frmproduct.$invalid" ng-click="save(state,id,picFile)">Lưu</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal recordDel-->
<div class="modal fade" id="recordDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete </h4>
      </div>
      <div class="modal-body">
        Bạn có muốn xóa?
        <input type="hidden" id="idRecord" name="idRecord" value="">
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-danger btn-delete" type="button" ng-click="confirmDelete(idd)"> Ok</button>
      </div>
    </div>
  </div>
</div>


<!-- .modal recordDel-->
</div>


<!-- page end-->
@endsection

@section('script')
<script type="text/javascript" src="app/controllers/HoadonController.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#btn-delete-all").click(function(event){

      var val=[];
      $(".id:checkbox:checked").each(function(i)
      {
        val[i]=$(this).val();
      });
      if(val=="")
      {
        alert("Vui lòng chọn mục để xóa!!");
        return;
      }
      else
      {
        var comfirm=confirm("Bạn có chắc chắn muốn xóa !!");
        if(comfirm)
        {
          $.ajax({
            url: 'admin/hoadon/delete-hoadon',
            type:"POST", 
            cache:false,
            data: {
              "val": val
            },
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            async: true,
            success: function(response){
              location.reload();
            }
          });
        }
      }
    }); 

  });
</script>


@endsection