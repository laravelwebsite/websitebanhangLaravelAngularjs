<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($allCate as $c)
							@if(count($c->subcategory)>0 && $c->delete==1)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a style="color: green" data-toggle="collapse" data-parent="#accordian" href="#{{$c->id}}">
											<span class="badge pull-right" ><i class="fa fa-plus"></i></span>
											{{$c->name}}
										</a>
									</h4>
								</div>
								<div id="{{$c->id}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											@foreach($c->subcategory as $sub)
											@if(count($sub->detailsubcategory)>0 && $sub->delete==1)
											<li ><a href="search-product-subcate/{{$sub->slug}}" style="color: blue;font-weight: bold;">{{$sub->name}} </a>
												<ul>
													@foreach($sub->detailsubcategory as $dd)
													@if($dd->delete==1)
													<li><a href="search-product-detailcate/{{$dd->slug}}" style="color: black">{{$dd->name}} </a></li>
													@endif
													@endforeach
												</ul>
											</li>
											@endif
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							@endif
							@endforeach
							
						</div><!--/category-products-->
				
						<div class="price-range"><!--price-range-->
							<h2>Tùy chọn giá</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>