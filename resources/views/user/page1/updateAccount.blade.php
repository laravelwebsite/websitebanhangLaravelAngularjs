       @extends('user.layout1.index')
       @section('title')
       Cập nhật thông tin
       @endsection
       @section('content')

       <div class="wrap">
       	<h2 class="title">Cập nhật thông tin tài khoản</h2>
       	<form name="frmUser" class="form-horizontal" action="user/cap-nhat-tai-khoan" method="POST">
          @if(session('thongbao'))
          <div class="alert alert-success">
           <strong>{{session('thongbao')}}</strong>
         </div>
         @endif
         @if(count($errors)>0)
         <div class="alert alert-danger">
          <strong>Whoops!</strong>There were some problems with your input! <br><br>
          <ul>
           @foreach($errors->all() as $error)
           <li>{{$error}}</li>
           @endforeach
         </ul> 
       </div>
       @endif
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       
       <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-7">
         <input type="text" disabled="true" value="{{$userLogin->email}}" required="true" class="form-control" id="email" />
       </div>

     </div>
     <div class="form-group">
       <label for="name" class="col-sm-3 control-label">Họ tên</label>
       <div class="col-sm-7">
        <input type="text" value="{{$userLogin->name}}" required="true" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" />
      </div>

    </div>
    <div class="form-group">
     <label for="phone" class="col-sm-3 control-label">Số điện thoại</label>
     <div class="col-sm-7">
      <input type="text" value="{{$detailAc->phone}}" required="true" class="form-control" id="phone" name="phone" placeholder="Vui lòng nhập số điện thoại" />
    </div>

  </div>
  <div class="form-group">
   <label for="address" class="col-sm-3 control-label">Địa chỉ giao hàng</label>
   <div class="col-sm-7">
    <input type="text" value="{{$detailAc->address}}" required="true" class="form-control" id="address" name="address" placeholder="Vui lòng nhập địa chỉ" />
  </div>

</div>
<div class="form-group">
 <label for="name" class="col-sm-3 control-label">Giới tính</label>
 <input type="radio" name="sex" value="1"  
 @if($detailAc->sex==1)
 checked
 @endif
 > Nam
 <input type="radio" name="sex" value="0"
 @if($detailAc->sex==0)
 checked
 @endif
 > Nữ<br>

</div>

<div class="form-group">
  <label for="repassword" class="col-sm-3 control-label"></label>
  <div class="col-sm-7">
   <button type="submit" class="btn btn-default">Xác nhận
   </button>
 </div>

</div>
</form>
</div> 

@endsection