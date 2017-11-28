@extends('admin.layout.index')
@section('title')
User List | Admin
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
            <th ng-click="sort('email')"><i class="fa fa-envelope"></i>EMAIL
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>                    
            <th ng-click="sort('role_id')"><i class=" fa fa-bolt"></i>ROLE
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th class="text-center"><i class=" fa fa-edit"></i> </th>
          </tr>
        </thead>
        <tbody>
          <sample-text></sample-text>
          <div orientable></div>
          <tr dir-paginate="ds in users|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
          <td class="text-center" ><input type="checkbox" class="id" id="id" name="id" ng-checked="checkall" value="[[ds.id]]" /></td>
            <td class="text-center"><span>[[ds.id]]</span></td>
            <td class="text-center"><span>[[ds.name]]</span></td>
            <td class="text-center"><span>[[ds.email]]</span> </td>
            <td class="text-center"><span>[[ds.role.name ]]</span> </td>
            <td class="text-center">
              <a ng-click="modal('edit',ds.id)" class="btn btn-primary btn-xs" id="edituser"><i class="fa fa-pencil"></i></a>      
              <a ng-if="ds.id != user" class="btn btn-danger btn-xs tooltips btn-del-record" id="[[ds.id]]" data-toggle="modal" data-placement="top" data-original-title="Delete record." ng-click="delete(ds.id)"><i class="fa fa-trash-o "></i></a>
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
    <div style="float: right"><button id="btn-add" class="btn btn-primary btn-lg" ng-click="modal('add')">Thêm User</button></div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="myModal" ng-init="add=[[add]]">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >[[frmTitle]] </h4>

      </div>
      <div class="modal-body">
        <form name="frmUser" class="form-horizontal">
          <div ng-show="success" class="text-success text-center">
           [[thongbao]]
         </div>
         <div class="alert alert-success" ng-show="alert">
          <strong>[[thongbao]]</strong>
        </div>
         <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Họ tên</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" ng-minlength="2" ng-maxlength="50" ng-required="true" placeholder="Vui lòng nhập họ tên" ng-model="UserByid.name" />
            <i class="fa fa-check text-success" ng-show=" frmUser.name.$valid"></i>
            <span id="helpBlock2" class="help-block"  ng-show="frmUser.name.$error.required">Vui lòng nhập họ tên</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmUser.name.$error.minlength">Tên tối thiểu 2 ký tự</span>
            <span id="helpBlock2" class="help-block"  ng-show="frmUser.name.$error.maxlength">Không đưọc nhập quá 50 ký tự</span>
          </div>
        </div>
        <div class="form-group" ng-if="add">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng nhập Email" ng-model="UserByid.email" ng-required="true" user-exist />
            <i class="fa fa-check text-success" ng-show=" frmUser.email.$valid"></i>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.email.$error.required">Vui lòng nhập email</span>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.email.$error.email">Đây không phải là định dạng Email</span>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.email.$error.nametaken">Email đã tồn tại</span>
          </div>
        </div>
        <div class="form-group" ng-if="!add">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng nhập Email" ng-model="UserByid.email" ng-required="true" ng-disabled="true" />
            <i class="fa fa-check text-success" ng-show=" frmUser.email.$valid"></i>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.email.$error.required">Vui lòng nhập email</span>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.email.$error.email">Đây không phải là định dạng Email</span>
          </div>
        </div>
        <div class="form-group">
          <label for="role_id" class="col-sm-3 control-label">Quyền</label>
          <div class="col-sm-9">
            <select  name="role_id" id="role_id" class="form-control" ng-model="role_id"
            ng-options="item.name for item in role track by item.id" ng-required="true" >

          </select>
          <i class="fa fa-check text-success" ng-show=" frmUser.role_id.$valid"></i>
          <span id="helpBlock2" class="help-block" ng-show="frmUser.selectedItem.$error.required">Vui lòng chọn quyền người dùng</span>
        </div>
      </div>
      <div ng-if="add">
        <div class="form-group" >
          <label for="password" class="col-sm-3 control-label">Nhập mật khẩu</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="password" name="password" ng-minlength="6" ng-maxlength="32" placeholder="Vui lòng nhập mật khẩu"  ng-model="p.password" ng-required="true" />
            <i class="fa fa-check text-success" ng-show=" frmUser.password.$valid"></i>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.password.$error.required">Vui lòng nhập mật khẩu</span>

            <span id="helpBlock2" class="help-block" ng-show="frmUser.password.$error.minlength">Mật khẩu tối thiẻu 6 ký tự</span>
            <span id="helpBlock2" class="help-block" ng-show="frmUser.password.$error.maxlength">Mật khẩu tối đa 32 ký tự </span>
          </div>
        </div>
        <div class="form-group">
          <label for="repassword" class="col-sm-3 control-label">Nhập lại mật khẩu</label>
          <div class="col-sm-9" >
            <input type="password"  class="form-control" id="repassword" name="repassword"  placeholder="Vui lòng nhập mật khẩu" ng-model="p.repassword" ng-required="true" />
            <span id="helpBlock2"  class="help-block" ng-if="p.password != p.repassword">Không khớp mật khẩu</span>
          </div>
        </div>
      </div>



    </form>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary" ng-click="close()">Cancle</button>
    <button type="button" class="btn btn-primary" ng-disabled="frmUser.$invalid || p.password != p.repassword " ng-click="save(state,id)">Lưu</button>
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






<!-- Modal -->
<div class="modal fade " id="contentSeederr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-content-seeder" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Thông tin seeder</h4>
      </div>
      <div class="modal-body contentSeederBody">
        Body goes here...
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- .modal content seeder-->

<!-- page end-->
@endsection

@section('script')
<script type="text/javascript" src="app/controllers/UserController.js"></script>
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
            url: 'admin/user/delete-multi-user',
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