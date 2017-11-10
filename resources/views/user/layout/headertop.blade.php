 <div class="header-top">
 	<div class="wrap"> 
 		<div class="logo">
 			<a href="/"><img src="user/images/logo.png" alt=""/></a>
 		</div>
 		<div class="cssmenu">
 			<ul>	
 				@if(!Auth::user()) 				<li class="active"><a href="dang-ky-tai-khoan">Đăng ký tài khoản</a></li> 
 				<li><a href="dang-nhap">Đăng nhập</a></li>
 				@else
 					<li><a>{{Auth::user()->name}}</a></li> 
 				@endif
 				<li><a href="san-pham">Sản phẩm</a></li> 
 				<li><a href="gio-hang">Giỏ hàng</a></li> 
 				<li><a href="lien-he">Liên hệ</a></li> 
 			</ul>
 		</div>
 		@if(Auth::user()) 
 		<ul class="icon2 sub-icon2 profile_img">
 			<li><a class="active-icon c2" href="#"> </a>
 				<ul class="sub-icon2 list">
 					<li><a href="log-out"><h3>Đăng xuất</h3></a></li>
 					<li><a href="user/cap-nhat-tai-khoan"><h3>Cập nhật thông tin</h3></a></li>
 					<li><a href="user/doi-mat-khau"><h3>Đổi mật khẩu</h3></a></li>
 				</ul>
 			</li>
 		</ul>
 		@endif
 		<div class="clear"></div>
 	</div>
 </div>