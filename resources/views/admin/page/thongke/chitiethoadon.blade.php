@extends('admin.layout.index')
@section('title')
Menu List | Admin
@endsection
@section('content')
<!-- page start-->
<div class="row">
  <div class="col-sm-12">
    <section class="panel">
      <div class="panel-heading">
        <div class="col-sm-6 col-md-6 col-lg-6">
         <form class="form-inline">
          <div class="form-group">
          </div>
        </form>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
        <header class="text-right">Thông tin khách hàng</header>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div id="contentajax">
      <table class="table table-hover display table-bordered">
        <thead>
          <tr>
            <th ><i class="fa fa-bookmark"></i>Mã hóa đơn
            </th>
            <th ><i class=" fa fa-user"></i>Tên khách hàng
            </th> 
            <th ><i class=" fa fa-user"></i>Email
            </th> 
            <th ><i class=" fa fa-user"></i>SĐT
            </th>
            <th ><i class=" fa fa-user"></i>Địa chỉ
            </th>    
            <th ><i class=" fa fa-user"></i>Tổng tiền
            </th>
            <th ><i class=" fa fa-user"></i>Ngày đặt
            </th>              
          </tr>
        </thead>
        <tbody>
          <tr >
            <td class="text-center"><span>{{$hoadon->Mahoadon}}</span></td>
            <td class="text-center"><span>{{$hoadon->name}}</span></td>
            <td class="text-center"><span>{{$hoadon->email}}</span></td>
            <td class="text-center"><span>{{$hoadon->phone}}</span></td>
            <td class="text-center"><span>{{$hoadon->address}}</span></td>
            <td class="text-center"><span>{{$hoadon->price}}</span></td>
            <td class="text-center"><span>{{$hoadon->created_at}}</span></td>
          </tr>
        </tbody>
      </table>
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
<div class="row">
  <div class="col-sm-12">
    <section class="panel">
      <div class="panel-heading">
        <div class="col-sm-6 col-md-6 col-lg-6">
         <form class="form-inline">
          <div class="form-group">
          </div>
        </form>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
        <header class="text-right">Chi tiết sản phẩm đặt mua</header>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div id="contentajax">
      <table class="table table-hover display table-bordered">
        <thead>
          <tr>
            <th ><i class="fa fa-bookmark"></i>Mã sản phẩm
            </th>
            <th ><i class=" fa fa-user"></i>Tên sản phẩm
            </th> 
            <th ><i class=" fa fa-user"></i>Đơn giá
            </th> 
            <th ><i class=" fa fa-user"></i>Số lượng
            </th>
            <th ><i class=" fa fa-user"></i>Tổng tiền
            </th>    
            <th ><i class=" fa fa-user"></i>Ngày tạo
            </th>              
          </tr>
        </thead>
        <tbody>
          @foreach($sanphamhoadon as $sp)
          <tr >
            
            <td class="text-center"><span>{{$sp->product_id}}</span></td>
            <td class="text-center"><span>{{$sp->product->name}}</span></td>
            <td class="text-center"><span>{{$sp->product->price}}</span></td>
            <td class="text-center"><span>{{$sp->qty}}</span></td>
            <td class="text-center"><span>{{$sp->subtotal}}</span></td>
            <td class="text-center"><span>{{$sp->created_at}}</span></td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
<!-- page end-->
@endsection

