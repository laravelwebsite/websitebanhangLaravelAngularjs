@extends('user.layout.index')


@section('contentleft')
@include('user.layout.contentleft')
@endsection
@section('contentright')
<div class="cont span_2_of_3" >
	<div class="labout span_1_of_a1" >
		<!-- start product_slider -->
		<ul id="etalage">
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
			<li>
				<img class="etalage_thumb_image" src="user/images/iphone6.jpg" />
				<img class="etalage_source_image" src="user/images/iphone6.jpg" />
			</li>
		</ul>


		<!-- end product_slider -->
	</div>
	<div class="cont1 span_2_of_a1" style="padding: 20px">
		<h3 class="m_3">{{$product->name}}</h3>

		<div class="price_single">
			<span class="reducedfrom">{{($product->price)*1.3}} VND</span>
			<span class="actual">{{($product->price)}} VND</span><a href="#">Thêm vào giỏ hàng</a>
		</div>
		<ul class="options">
			<h4 class="m_9">Select a Size</h4>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<div class="clear"></div>
		</ul>
		<div class="btn_form">
			<form>
				<input type="submit" value="Mua" title="">
			</form>
		</div>
		<ul class="add-to-links">
			<li><img src="images/wish.png" alt=""/><a href="#">Add to cart</a></li>
		</ul>
		<p class="m_desc">{{$product->description}}</p>

		<div class="social_single">	
			<ul>	
				<li class="fb"><a href="#"><span> </span></a></li>
				<li class="tw"><a href="#"><span> </span></a></li>
				<li class="g_plus"><a href="#"><span> </span></a></li>
				<li class="rss"><a href="#"><span> </span></a></li>		
			</ul>
		</div>
	</div>
	<div class="clear"></div>


	<ul id="flexiselDemo3">
		<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
		<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
		<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
		<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
	</ul>

</div>

@endsection

@section('script')
<link rel="stylesheet" href="user/css/etalage.css">
<script src="user/js/jquery.etalage.min.js"></script>
<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});

			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
<!-- Include the Etalage files -->
<script>
	jQuery(document).ready(function($){
		
		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 400,
			
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

						});
</script>
<script type="text/javascript" src="user/js/jquery.flexisel.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
		var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
</script>
<script type="text/javascript" src="app/controllers/ProductController.js"></script>
@endsection