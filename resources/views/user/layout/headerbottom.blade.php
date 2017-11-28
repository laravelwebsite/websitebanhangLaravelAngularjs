<div class="header-bottom" >
	<div class="wrap">
		<!-- start header menu -->
		<ul class="megamenu skyblue" >
			@foreach($cate as $ca)
			<li class="grid" ><a class="color2" href="search-product-cate/{{$ca->slug}}">{{$ca->name}}</a>
				<div class="megapanel">
					<div class="row">
						@foreach($ca->subcategory as $sub)
						<div class="col1" >
							<div class="h_nav" >
								<a href="search-product-subcate/{{$sub->slug}}"><h4 style="color: rgb(255, 153, 51)">{{$sub->name}}</h4></a>
								<ul>
									@foreach($sub->detailsubcategory as $detail)
									<li ><a href="search-product-detailcate/{{$detail->slug}}" >{{$detail->name}}</a></li>
									@endforeach
								</ul>	
							</div>
			
						</div>
						@endforeach
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="clear"></div>
	</div>
</div>

