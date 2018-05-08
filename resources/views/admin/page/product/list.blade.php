@extends('admin.layout.index')
@section('title')
User Menu | Admin
@endsection
@section('content')
<!-- page start-->
<div class="row" ng-controller="ProductController" ng-init="user='{{Auth::user()->id}}'">
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
            <th ng-click="sort('image')"><i class=" fa fa-user"></i>IMAGE
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>  
            <th ng-click="sort('name')"><i class=" fa fa-user"></i>NAME
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>    
            <th ng-click="sort('detail_sub_categories_id')"><i class=" fa fa-user"></i>DETAIL SUB CATEGORY
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>    
            <th ng-click="sort('active')"><i class=" fa fa-user"></i>ACTIVE
              <span class="glyphicon sort-icon" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}">
              </span>
            </th>
            <th class="text-center"><i class=" fa fa-edit"></i> </th>
          </tr>
        </thead>
        <tbody>
          <sample-text></sample-text>
          <div orientable></div>
          <tr dir-paginate="pro in products|orderBy:sortKey:reverse|filter:search|itemsPerPage:5" >
            <td class="text-center" ><input type="checkbox" class="id" id="id" name="id" ng-checked="checkall" value="[[pro.id]]" /></td>
            
            <td class="text-center"><span>[[pro.id]]</span></td>
            <td class="text-center"><img src="upload/product/[[pro.image]]" ng-if="[[pro.image]]!=''" style="height: 100px;width: 100px" /><div ng-if="[[pro.image]]==''">Không có hình ảnh</div><br />
              <button type="button" ng-click="modal('album',pro.slug)" class="btn btn-primary btn-sm">Update Album</button></td>
              <td class="text-center"><span>[[pro.name]]</span></td>
              <td class="text-center"><span>[[pro.detailsubcategory.name]]</span></td>
              <td class="text-center" ng-if="[[pro.active]]==1"><span style="color: green;font-weight: bold;">Hoạt Động</span></td>
              <td class="text-center" ng-if="[[pro.active]]==0"><span style="color: red;font-weight: bold;">Khóa</span></td>
              <td class="text-center">
                <a ng-click="modal('edit',pro.slug)" class="btn btn-primary btn-xs" id="edituser"><i class="fa fa-pencil"></i></a>      
                <a class="btn btn-danger btn-xs tooltips btn-del-record" id="[[pro.id]]" data-toggle="modal" data-placement="top" data-original-title="Delete record." ng-click="delete(pro.id)"><i class="fa fa-trash-o "></i></a>
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
      <div style="float: right"><button id="btn-add" class="btn btn-primary btn-lg" ng-click="modal('add')">Thêm Product</button></div>
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
        <form name="frmproduct" class="form-horizontal" enctype="multipart/form-data">
          <div ng-show="success" class="text-success text-center">
           [[thongbao]]
         </div>
         <div class="alert alert-success" ng-show="alert">
          <strong>[[thongbao]]</strong>
        </div>
        <div class="form-group">
          <label for="user_id" class="col-sm-3 control-label">Chọn Category </label>
          <div class="col-sm-9">
            <select  name="categories_id" id="categories_id" class="form-control" ng-model="catename" ng-change="getSubcate()"
            ng-options="item.name for item in cate track by item.id" ng-required="true" >

          </select>
          <i class="fa fa-check text-success" ng-show=" frmproduct.categories_id.$valid"></i>
          <span id="helpBlock2" class="help-block" ng-show="frmproduct.categories_id.$error.required">Vui lòng chọn Category</span>
        </div>
      </div>
      <div class="form-group">
        <label for="user_id" class="col-sm-3 control-label">Chọn Sub Category </label>
        <div class="col-sm-9">
          <select  name="sub_categories_id" id="sub_categories_id" class="form-control" ng-model="subcatename" ng-change="getDeSubcate()"
          ng-options="item.name for item in subcate track by item.id" ng-required="true" >

        </select>
        <i class="fa fa-check text-success" ng-show=" frmproduct.sub_categories_id.$valid"></i>
        <span id="helpBlock2" class="help-block" ng-show="frmproduct.sub_categories_id.$error.required">Vui lòng chọn Sub Category</span>
      </div>
    </div>
    <div class="form-group">
      <label for="user_id" class="col-sm-3 control-label">Chọn Detail Sub Category </label>
      <div class="col-sm-9">
        <select  name="detail_sub_categories_id" id="detail_sub_categories_id" class="form-control" ng-model="desubcatename"
        ng-options="item.name for item in desubcate track by item.id" ng-required="true" >

      </select>
      <i class="fa fa-check text-success" ng-show=" frmproduct.detail_sub_categories_id.$valid"></i>
      <span id="helpBlock2" class="help-block" ng-show="frmproduct.detail_sub_categories_id.$error.required">Vui lòng chọn Detail Sub Category</span>
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Tên Product</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" ng-minlength="2" ng-maxlength="50" ng-required="true" placeholder="Vui lòng nhập tên Detail Sub Category" ng-model="product.name"/>
      <i class="fa fa-check text-success" ng-show=" frmproduct.name.$valid"></i>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.name.$error.required">Vui lòng nhập tên Sub Category</span>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.name.$error.minlength">Tên tối thiểu 2 ký tự</span>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.name.$error.maxlength">Không đưọc nhập quá 50 ký tự</span>
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="title" name="title" ng-minlength="2" ng-maxlength="100" ng-required="true" placeholder="Vui lòng nhập tên title" ng-model="product.title"/>
      <i class="fa fa-check text-success" ng-show=" frmproduct.name.$valid"></i>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.title.$error.required">Vui lòng nhập Title</span>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.title.$error.minlength">Title tối thiểu 2 ký tự</span>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.title.$error.maxlength">Không đưọc nhập quá 100 ký tự</span>
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea id="description" class="form-control"  rows="3"  name="description" ng-model="product.description" ng-required="true">[[product.description]]</textarea>
      <i class="fa fa-check text-success" ng-show=" frmproduct.description.$valid"></i>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.description.$error.required">Vui lòng nhập</span>
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="price" name="price" ng-required="true" ng-model="product.price"/>
      <i class="fa fa-check text-success" ng-show=" frmproduct.price.$valid"></i>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.price.$error.required">Vui lòng Nhập gía</span>
    </div>
  </div>
  <div class="form-group">
    <label for="key" class="col-sm-3 control-label">Key SEO</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="key" name="key" ng-required="true" ng-model="product.key"/>
      <i class="fa fa-check text-success" ng-show=" frmproduct.key.$valid"></i>
      <span id="helpBlock2" class="help-block"  ng-show="frmproduct.key.$error.required">Vui lòng nhập key,các key cách nhau bởi dấu ";"</span>
    </div>
  </div>
  <div class="form-group">
    <label for="image" class="col-sm-3 control-label">Chọn hình ảnh chính</label>
    <div class="col-sm-9">
      <input type="file" ngf-select ng-model="picFile" name="file"    
      accept="image/*" ngf-max-size="2MB"
      ngf-model-invalid="errorFile" onchange="angular.element(this).scope().checked()">
      <span ng-show="frmproduct.file.$error.maxSize"  id="helpBlock2" class="help-block">File too large  max 2M</span>
      <img style="width: 400px;height:400px;" ng-show="frmproduct.file.$valid"  ngf-thumbnail="picFile" class="thumb" > 
      <img style="width: 400px;height:400px;" ng-show="!add && check==false" ng-hide="check==true" ng-src="upload/product/[[product.image]]" class="thumb" >
      <button ng-click="picFile = null" ng-show="picFile">Remove</button>
      <br>
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
<!-- Modal Add-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >[[frmTitle]] </h4>
      </div>
      <div class="modal-body">
        <form name="frmalbum" class="form-horizontal" >
        <table class="table table-hover display table-bordered">
          <thead>
            <tr>
              <th ><i class=" fa fa-user"></i>IMAGE </th>  
              <th class="text-center"><i class=" fa fa-edit"></i> </th>
            </tr>
          </thead>
          <tbody>
            <tr  ng-repeat="stop in chuoi" ng-if="stop!=''">
              <td class="text-center" ><img src="upload/product/[[stop]]" style="height: 100px;width: 100px" />
              <td class="text-center">      
                  <a class="btn btn-danger btn-xs tooltips btn-del-record" ng-click="deleteAlbum(stop,productc.id)" data-toggle="modal" data-placement="top" data-original-title="Delete record." ><i class="fa fa-trash-o "></i></a>
              </td>
              </tr>
            </tbody>
          </table>
          
      </form>
      <div class="form-group">
            <label class="col-sm-3 control-label">Chọn hình ảnh chính</label>
            <button class="btn btn-primary" ngf-select="uploadFiles($files, $invalidFiles,iddd)" multiple
            accept="image/*" ngf-max-height="1000" ngf-max-size="1MB">
            Select Files</button>
            <br><br>
            Files:
            <ul>
              <li ng-repeat="f in files" style="font:smaller">[[f.name]] [[f.$errorParam]]
                <span class="progress" ng-show="f.progress >= 0">
                  <div style="width:[[f.progress]]%"  
                  ng-bind="f.progress + '%'">
                </div>
              </span>
            </li>
            <li ng-repeat="f in errFiles" style="font:smaller">[[f.name]] [[f.$error]] [[f.$errorParam]]
            </li> 
          </ul>
          [[errorMsg]]
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" ng-click="close()">Cancle</button>
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
<script type="text/javascript" src="app/controllers/ProductController.js"></script>
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
            url: 'admin/product/delete-multi-product',
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