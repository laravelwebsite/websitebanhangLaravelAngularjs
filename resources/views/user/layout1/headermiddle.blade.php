<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								
								@if(!Auth::user()) 
								<li><a href="dang-nhap"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<li><a href="dang-ky-tai-khoan"><i class="fa fa-lock"></i> Đăng ký</a></li>
								@else
								<li>
								<div class="dropdown show">
								  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    {{Auth::user()->name}}
								  </a>

								  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								  	<ul>
								    <li><a class="dropdown-item" href="user/cap-nhat-tai-khoan">Cập nhật thông tin</a></li>
								    <li><a class="dropdown-item" href="user/doi-mat-khau">Đổi mật khẩu</a></li>
								    <li><a class="dropdown-item" href="log-out">Đăng xuất</a></li>
								</ul>
								  </div>
								</div>
				 				</li>
				 				@endif
				 				<li><a href="gio-hang"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
 								<li><a href="lien-he">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
