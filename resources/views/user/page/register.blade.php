       @extends('user.layout.index')
       @section('title')
       Đăng ký tài khoản mua hàng
       @endsection
       @section('contentright')

       <div class="wrap">
       	<h2 class="title">Đăng ký tài khoản thành viên</h2>
       	<form name="frmUser" class="form-horizontal" action="dang-ky-tai-khoan" method="POST">
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
       			<label for="name" class="col-sm-3 control-label">Họ tên</label>
       			<div class="col-sm-7">
       				<input type="text" value="{!! old('name') !!}" required="true" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" />
       			</div>

       		</div>
       		<div class="form-group">
       			<label for="email" class="col-sm-3 control-label">Email</label>
       			<div class="col-sm-7">
       				<input type="text" value="{!! old('email') !!}" required="true" class="form-control" id="email" name="email" placeholder="Vui lòng nhập email" />
       			</div>

       		</div>
       		<div class="form-group">
       			<label for="password"  class="col-sm-3 control-label">Mật khẩu</label>
       			<div class="col-sm-7">
       				<input type="password" required="true" class="form-control" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" />
       			</div>

       		</div>
       		<div class="form-group">
       			<label for="repassword" class="col-sm-3 control-label">Mật khẩu</label>
       			<div class="col-sm-7">
       				<input type="password" required="true" class="form-control" id="repassword" name="repassword" placeholder="Vui lòng nhập lại mật khẩu" />
       			</div>

       		</div>
       		<div class="form-group">
       			<label for="repassword" class="col-sm-3 control-label"></label>
       			<div class="col-sm-7">
       				<button type="submit" class="btn btn-default">Đăng ký
       				</button>
       			</div>

       		</div>
       	</form>
       </div> 

       @endsection