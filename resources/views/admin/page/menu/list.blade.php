@extends('admin.layout.index')
@section('title')
Menu List | Admin
@endsection
@section('content')
<!-- page start-->
<div class="row" ng-controller="UserController" ng-init="user='{{Auth::user()->id}}'">
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
            <th ng-click="sort('id')"><i class="fa fa-bookmark"></i>ID
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th ng-click="sort('name')"><i class=" fa fa-user"></i>NAME
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th ng-click="sort('src')"><i class="fa fa-link"></i>SRC
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>                    
            <th class="text-center"><i class=" fa fa-edit"></i> </th>
          </tr>
        </thead>
        <tbody>
          <sample-text></sample-text>
          <div orientable></div>
          <tr dir-paginate="mn in menus|orderBy:sortKey:reverse|filter:search|itemsPerPage:5" >
          <td class="text-center" ><input type="checkbox" class="id" id="id" name="id" ng-checked="checkall" value="[[mn.id]]" /></td>
            <td class="text-center"><span>[[mn.id]]</span></td>
            <td class="text-center"><span>[[mn.name]]</span></td>
            <td class="text-center"><span>[[mn.src]]</span> </td>
            <td class="text-center">
              <a ng-click="modal('edit',mn.id)" class="btn btn-primary btn-xs" id="edituser"><i class="fa fa-pencil"></i></a>      
              <a class="btn btn-danger btn-xs tooltips btn-del-record" id="[[mn.id]]" data-toggle="modal" data-placement="top" data-original-title="Delete record." ng-click="delete(mn.id)"><i class="fa fa-trash-o "></i></a>
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
    <div style="float: right"><button id="btn-add" class="btn btn-primary btn-lg" ng-click="modal('add')">Thêm Menu</button></div>
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
        <form name="frmMenu" class="form-horizontal">
          <div ng-show="success" class="text-success text-center">
           [[thongbao]]
         </div>
          <div class="alert alert-success" ng-show="alert">
          <strong>[[thongbao]]</strong>
        </div>
         <div class="form-group" ng-if="add">
          <label for="name" class="col-sm-3 control-label">Tên Menu</label>
          <div class="col-sm-9" >
            <input type="text" class="form-control" id="name" name="name" ng-minlength="2" ng-maxlength="20" placeholder="Vui lòng nhập tên Menu" ng-model="menubyId.name" ng-required="true" name-exist/>
            <i class="fa fa-check text-success" ng-show=" frmMenu.name.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmMenu.name.$error.required">Vui lòng nhập tên Menu</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmMenu.name.$error.minlength">Tên Menu tối thiểu 2 ký tự</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmMenu.name.$error.maxlength">Không đưọc nhập quá 20 ký tự</span>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.name.$error.nametaken" >Tên menu đã tồn tại</span>
          </div>
        </div>
        <div class="form-group" ng-if="!add">
          <label for="name" class="col-sm-3 control-label">Tên Menu</label>
          <div class="col-sm-9" >
            <input type="text" class="form-control" id="name" name="name" ng-minlength="2" ng-maxlength="20" placeholder="Vui lòng nhập tên Menu" ng-model="menubyId.name" ng-required="true" ng-disabled="true"/>
            <i class="fa fa-check text-success" ng-show=" frmMenu.name.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmMenu.name.$error.required">Vui lòng nhập tên Menu</span>
          </div>
        </div>
        <div class="form-group" ng-if="add">
          <label for="url" class="col-sm-3 control-label">SRC</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="src" name="src" placeholder="Vui lòng nhập URL" ng-pattern='/^[a-zA-Z0-9]*$/'  ng-model="menubyId.src" ng-required="true" src-exist />
            <i class="fa fa-check text-success" ng-show=" frmMenu.url.$valid"></i>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.required">Vui lòng nhập SRC</span>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.pattern">SRC phải không dấu,không ký tự đặc biệt và không khoảng trắng</span>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.srctaken">SRC đã tồn tại</span>
            <span id="helpBlock2" class="help-block" style="color: green">Route sẽ có kiểu là <b><u>admin/[[menubyId.src]]</u></b></span>
          </div>
        </div>
        <div class="form-group" ng-if="!add">
          <label for="url" class="col-sm-3 control-label">SRC</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="src" name="src" placeholder="Vui lòng nhập URL" ng-pattern='/^[a-zA-Z0-9]*$/'  ng-model="menubyId.src" ng-required="true" src-exist />
            <i class="fa fa-check text-success" ng-show=" frmMenu.url.$valid"></i>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.required">Vui lòng nhập SRC</span>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.pattern">SRC phải không dấu,không ký tự đặc biệt và không khoảng trắng</span>
            <span id="helpBlock2" class="help-block" ng-show="frmMenu.src.$error.srctaken">SRC đã tồn tại</span>
            <span id="helpBlock2" class="help-block" style="color: green">Route sẽ có kiểu là <b><u>admin/[[menubyId.src]]</u></b></span>
          </div>
        </div>

      </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-primary" ng-click="close()">Cancle</button>
      <button type="button" class="btn btn-primary" ng-disabled="frmMenu.$invalid" ng-click="save(state,id)">Lưu</button>
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
        Bạn có muốn xóa link trong danh sách chờ duyệt hay không? 
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
<script type="text/javascript" src="public/app/controllers/MenuController.js"></script>
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
            url: 'admin/menu/delete-multi-menu',
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