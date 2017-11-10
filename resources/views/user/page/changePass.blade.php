       @extends('user.layout.index')
       @section('title')
       Đổi mật khẩu
       @endsection
       @section('contentright')

       <div class="wrap">
       	<h2 class="title">Đổi mật khẩu</h2>
       	<form name="frmUser" class="form-horizontal" action="user/doi-mat-khau" method="POST">
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
       @if(Auth::user()->password !=null)
        <div class="form-group">
        <label for="oldpassword"  class="col-sm-3 control-label">Mật khẩu cũ</label>
        <div class="col-sm-7">
         <input type="password" required="true" class="form-control" id="oldpassword" name="oldpassword" placeholder="Vui lòng nhập mật khẩu cũ" />
       </div>
     </div>
     @endif
       <div class="form-group">
        <label for="password"  class="col-sm-3 control-label">Mật khẩu</label>
        <div class="col-sm-7">
         <input type="password" required="true" class="form-control" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" />
       </div>

     </div>
     <div class="form-group">
      <label for="repassword" class="col-sm-3 control-label">Nhập lại Mật khẩu</label>
      <div class="col-sm-7">
       <input type="password" required="true" class="form-control" id="repassword" name="repassword" placeholder="Vui lòng nhập lại mật khẩu" />
     </div>

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