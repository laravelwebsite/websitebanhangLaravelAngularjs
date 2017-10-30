     
@extends('user.layout.index')
@section('title')
Đăng ký tài khoản mua hàng
@endsection
@section('contentright')
<div class="login">
	<div class="wrap">
		<div class="col_1_of_login span_1_of_login">
			<h4 class="title">Đăng ký tài khoản</h4>
			<h5 class="sub_title">Bạn chưa có tài khoản?</h5>
			<p>Đăng ký tài khoản để lưu thông tin của bạn để loại bỏ sự bất tiện và nhận được nhiều ưu đãi khi trở thành thành viên của chúng tôi!!</p>
			<div class="button1">
				<a href="dang-ky-tai-khoan"><input type="submit" name="Submit" value="Continue"></a>
			</div>
			
			<div class="clear"></div>
		</div>
		<div class="col_1_of_login span_1_of_login">
			<div class="login-title">
				<h4 class="title">Đăng nhập</h4>
				<div class="comments-area">
					<form action="dang-nhap" method="post">
						<!-- thong bao sai tai khoan mat khau-->
						@if(session('thongbao'))
						<div class="alert alert-danger">
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
						<!-- thong bao dang ky tai khoan thanh cong-->
						@if(session('dangky'))
						<div class="alert alert-success">
							<strong>{{session('dangky')}}</strong>
						</div>
						@endif
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<p>
							<label>Email</label>
							<span>*</span>
							<input type="text" value="{!! old('email') !!}" name="email" required="true" placeholder="Vui lòng nhập email">
						</p>
						<p>
							<label>Password</label>
							<span>*</span>
							<input type="password" value="{!! old('password') !!}" name="password" required="true" placeholder="Vui lòng nhập mật khẩu" >
						</p>
						<p id="login-form-remember">
							<label><a href="#">Forget Your Password ? </a></label>
						</p>
						<p>
							<input type="submit" value="Login">
						</p>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
@endsection