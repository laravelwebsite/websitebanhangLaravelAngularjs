@extends('user.layout1.index')
@section('title')
Trang chủ
@endsection
@section('headerbottom')
	@include('user.layout1.headerbottom')
@endsection
@section('slider')
	@include('user.layout1.slider')
@endsection
@section('leftslidebar')
	@include('user.layout1.leftslidebar')
@endsection

@section('contentright')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Điện thoại</h2>
						@foreach($dienthoai as $dt)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="height: 250px" src="upload/product/{{$dt->image}}" alt="{{$dt->title}}" />
											<h2>{{number_format($dt->price)}} VND</h2>
											<p>{{$dt->name}}</p>
											<a href="them-gio-hang/{{$dt->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{number_format($dt->price)}} VND</h2>
												<p>{{$dt->name}}</p>
												<a href="san-pham/{{$dt->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="them-gio-hang/{{$dt->slug}}"><i class="fa fa-plus-square"></i>Thêm vào giỏ</a></li>
										<li><a href="san-pham/{{$dt->slug}}"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
									</ul>
								</div>
							</div>
						</div>
							@endforeach					
					</div><!--features_items-->
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Macbook</h2>
						@foreach($macbook as $mb)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="height: 250px" src="upload/product/{{$mb->image}}" alt="{{$mb->title}}" />
											<h2>{{number_format($mb->price)}} VND</h2>
											<p>{{$mb->name}}</p>
											<a href="them-gio-hang/{{$mb->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{number_format($mb->price)}} VND</h2>
												<p>{{$mb->name}}</p>
												<a href="san-pham/{{$mb->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="them-gio-hang/{{$mb->slug}}"><i class="fa fa-plus-square"></i>Thêm vào giỏ</a></li>
										<li><a href="san-pham/{{$mb->slug}}"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
									</ul>
								</div>
							</div>
						</div>
							@endforeach					
					</div><!--features_items-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Đồ Nam</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									@foreach($trangphucnam as $tpn)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="san-pham/{{$tpn->slug}}"><img style="height: 100px;width: 100px" src="upload/product/{{$tpn->image}}" alt="" /></a>
													<h2>{{number_format($tpn->price)}} VND</h2>
													<p>{{$tpn->name}}</p>
													<a href="them-gio-hang/{{$tpn->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
								<div class="item">
									@foreach($aokhoacnam as $akn)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="san-pham/{{$akn->slug}}"><img style="height: 100px;width: 100px" src="upload/product/{{$akn->image}}" alt="" /></a>
													<h2>{{number_format($akn->price)}} VND</h2>
													<p>{{$akn->name}}</p>
													<a href="them-gio-hang/{{$akn->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Đồ Nữ</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									@foreach($trangphucnu as $tpnu)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="san-pham/{{$tpnu->slug}}"><img style="height: 100px;width: 100px" src="upload/product/{{$tpnu->image}}" alt="" /></a>
													<h2>{{number_format($tpnu->price)}} VND</h2>
													<p>{{$tpnu->name}}</p>
													<a href="them-gio-hang/{{$tpnu->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
								<div class="item">
									@foreach($aokhoacnu as $aknu)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="san-pham/{{$aknu->slug}}"><img style="height: 100px;width: 100px" src="upload/product/{{$aknu->image}}" alt="" /></a>
													<h2>{{number_format($aknu->price)}} VND</h2>
													<p>{{$aknu->name}}</p>
													<a href="them-gio-hang/{{$aknu->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
@endsection