@extends('user.layout1.index')
@section('title')
Trang chủ
@endsection
@section('headerbottom')
	@include('user.layout1.headerbottom')
@endsection
@section('leftslidebar')
	@include('user.layout1.leftslidebar')
@endsection

@section('contentright')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm</h2>
						@if($productcate->count()>0)
						@foreach($productcate as $pro)
						<div class="col-sm-4" >
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img style="height: 250px;" src="upload/product/{{$pro->image}}" alt="{{$pro->title}}" />
											<h2>{{number_format($pro->price)}} VND</h2>
											<p>{{$pro->name}}</p>
											<a href="them-gio-hang/{{$pro->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{number_format($pro->price)}} VND</h2>
												<p>{{$pro->name}}</p>
												<a href="san-pham/{{$pro->slug}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="them-gio-hang/{{$pro->slug}}"><i class="fa fa-plus-square"></i>Thêm vào giỏ</a></li>
										<li><a href="san-pham/{{$pro->slug}}"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
									</ul>
								</div>
							</div>
						</div>

							@endforeach
						@else
							<p>Không có sản phẩm nào.Mời bạn tìm sản phẩm khác.Hàng nghìn sản phẩm giá ưu đãi đang đợi bạn</p>	
						@endif				
					</div><!--features_items-->
					
@endsection