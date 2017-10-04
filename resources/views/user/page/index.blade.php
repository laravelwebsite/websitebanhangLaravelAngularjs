@extends('user.layout.index')
@section('title')
Website bán hàng trực tuyến
@endsection
@section('contentright')
<div class="index-banner">
	<div class="wmuSlider example1" style="height: 560px;">
		<div class="wmuSliderWrapper">
			<article style="position: relative; width: 100%; opacity: 1;"> 
				<div class="banner-wrap">
					<div class="slider-left">
						<img src="images/banner1.jpg" alt=""/> 
					</div>
					<div class="slider-right">
						<h1>Classic</h1>
						<h2>White</h2>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="btn"><a href="shop.html">Shop Now</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<article style="position: absolute; width: 100%; opacity: 0;"> 
				<div class="banner-wrap">
					<div class="slider-left">
						<img src="images/banner2.jpg" alt=""/> 
					</div>
					<div class="slider-right">
						<h1>Classic</h1>
						<h2>White</h2>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="btn"><a href="shop.html">Shop Now</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<article style="position: absolute; width: 100%; opacity: 0;">
				<div class="banner-wrap">
					<div class="slider-left">
						<img src="images/banner1.jpg" alt=""/> 
					</div>
					<div class="slider-right">
						<h1>Classic</h1>
						<h2>White</h2>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="btn"><a href="shop.html">Shop Now</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<article style="position: absolute; width: 100%; opacity: 0;">
				<div class="banner-wrap">
					<div class="slider-left">
						<img src="images/banner2.jpg" alt=""/> 
					</div>
					<div class="slider-right">
						<h1>Classic</h1>
						<h2>White</h2>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="btn"><a href="shop.html">Shop Now</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</article>
			<article style="position: absolute; width: 100%; opacity: 0;"> 
				<div class="banner-wrap">
					<div class="slider-left">
						<img src="images/banner1.jpg" alt=""/> 
					</div>
					<div class="slider-right">
						<h1>Classic</h1>
						<h2>White</h2>
						<p>Lorem ipsum dolor sit amet</p>
						<div class="btn"><a href="shop.html">Shop Now</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</article>
		</div>
		<a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
		<ul class="wmuSliderPagination">
			<li><a href="#" class="">0</a></li>
			<li><a href="#" class="">1</a></li>
			<li><a href="#" class="wmuActive">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
		</ul>
		<a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
		<script src="js/jquery.wmuSlider.js"></script> 
		<script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 	           	      
	</div>
	<div class="main">
		<div class="wrap">
			<div class="content-top">
				<div class="lsidebar span_1_of_c1">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
				</div>
				<div class="cont span_2_of_c1">
					<div class="social">	
						<ul>	
							<li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
						</ul>
					</div>
					<div class="social">	
						<ul>	
							<li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						</ul>
					</div>
					<div class="social">	
						<ul>	
							<li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						</ul>
					</div>
					<div class="social">	
						<ul>	
							<li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"></div>			
			</div>
			<div class="content-bottom">
				<div class="box1">
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic1.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic2.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="clear"></div>
				</div>
				<div class="box1">
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic3.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic4.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="col_1_of_3 span_1_of_3"><a href="single.html">
						<div class="view view-fifth">
							<div class="top_box">
								<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
								<p class="m_2">Lorem ipsum</p>
								<div class="grid_img">
									<div class="css3"><img src="images/pic5.jpg" alt=""/></div>
									<div class="mask">
										<div class="info">Quick View</div>
									</div>
								</div>
								<div class="price">£480</div>
							</div>
						</div>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star1"></label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"></label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"></label>&nbsp;
							(45)
						</span>
						<ul class="list">
							<li>
								<img src="images/plus.png" alt=""/>
								<ul class="icon1 sub-icon1 profile_img">
									<li><a class="active-icon c1" href="#">Add To Bag </a>
										<ul class="sub-icon1 list">
											<li><h3>sed diam nonummy</h3><a href=""></a></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</a></div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
				<div class="col_1_of_footer-top span_1_of_footer-top">
					<ul class="f_list">
						<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
					</ul>
				</div>
				<div class="col_1_of_footer-top span_1_of_footer-top">
					<ul class="f_list">
						<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
					</ul>
				</div>
				<div class="col_1_of_footer-top span_1_of_footer-top">
					<ul class="f_list">
						<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
				<div class="section group">
					<div class="col_1_of_middle span_1_of_middle">
						<dl id="sample" class="dropdown">
							<dt><a href="#"><span>Please Select a Country</span></a></dt>
							<dd>
								<ul>
									<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
									<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
									<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
									<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
									<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
									<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
								</ul>
							</dd>
						</dl>
					</div>
					<div class="col_1_of_middle span_1_of_middle">
						<ul class="f_list1">
							<li><span class="m_8">Sign up for email and Get 15% off</span>
								<div class="search">	  
									<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
									<input type="submit" value="Subscribe" id="submit" name="submit">
									<div id="response"> </div>
								</div><div class="clear"></div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
				<div class="section group">
					<div class="col_1_of_5 span_1_of_5">
						<h3 class="m_9">Shop</h3>
						<ul class="sub_list">
							<h4 class="m_10">Men</h4>
							<li><a href="shop.html">Men's Shoes</a></li>
							<li><a href="shop.html">Men's Clothing</a></li>
							<li><a href="shop.html">Men's Accessories</a></li>
						</ul>
						<ul class="sub_list">
							<h4 class="m_10">Women</h4>
							<li><a href="shop.html">Women's Shoes</a></li>
							<li><a href="shop.html">Women's Clothing</a></li>
							<li><a href="shop.html">Women's Accessories</a></li>
						</ul>
						<ul class="sub_list">
							<h4 class="m_10">Kids</h4>
							<li><a href="shop.html">Kids Shoes</a></li>
							<li><a href="shop.html">Kids Clothing</a></li>
							<li><a href="shop.html">Kids Accessories</a></li>
						</ul>
						<ul class="sub_list">
							<h4 class="m_10">style</h4>
							<li><a href="shop.html">Porsche Design Sport</a></li>
							<li><a href="shop.html">Porsche Design Shoes</a></li>
							<li><a href="shop.html">Porsche Design Clothing</a></li>
						</ul>
						<ul class="sub_list">
							<h4 class="m_10">Adidas Neo Label</h4>
							<li><a href="shop.html">Adidas NEO Shoes</a></li>
							<li><a href="shop.html">Adidas NEO Clothing</a></li>
						</ul>
						<ul class="sub_list1">
							<h4 class="m_10">Customise</h4>
							<li><a href="shop.html">mi adidas</a></li>
							<li><a href="shop.html">mi team</a></li>
							<li><a href="shop.html">new arrivals</a></li>
						</ul>
					</div>
					<div class="col_1_of_5 span_1_of_5">
						<h3 class="m_9">Sports</h3>
						<ul class="list1">
							<li><a href="shop.html">Basketball</a></li>
							<li><a href="shop.html">Football</a></li>
							<li><a href="shop.html">Football Boots</a></li>
							<li><a href="shop.html">Predator</a></li>
							<li><a href="shop.html">F50</a></li>
							<li><a href="shop.html">Football Clothing</a></li>
							<li><a href="shop.html">Golf</a></li>
							<li><a href="shop.html">Golf Shoes</a></li>
							<li><a href="shop.html">Golf Clothing</a></li>
							<li><a href="shop.html">Outdoor</a></li>
							<li><a href="shop.html">Outdoor Shoes</a></li>
							<li><a href="shop.html">Outdoor Clothing</a></li>
							<li><a href="shop.html">Rugby</a></li>
							<li><a href="shop.html">Running</a></li>
							<li><a href="shop.html">Running Shoes</a></li>
							<li><a href="shop.html">Boost</a></li>
							<li><a href="shop.html">Supernova</a></li>
							<li><a href="shop.html">Running Clothing</a></li>
							<li><a href="shop.html">Swimming</a></li>
							<li><a href="shop.html">Tennis</a></li>
							<li><a href="shop.html">Tennis Shoes</a></li>
							<li><a href="shop.html">Tennis Clothing</a></li>
							<li><a href="shop.html">Training</a></li>
							<li><a href="shop.html">Training Shoes</a></li>
							<li><a href="shop.html">Training Clothing</a></li>
							<li><a href="shop.html">Training Accessories</a></li>
							<li><a href="shop.html">miCoach</a></li>
							<li><a href="shop.html">All Sports</a></li>
						</ul>
					</div>
					<div class="col_1_of_5 span_1_of_5">
						<h3 class="m_9">Originals</h3>
						<ul class="list1">
							<li><a href="shop.html">Originals Shoes</a></li>
							<li><a href="shop.html">Gazelle</a></li>
							<li><a href="shop.html">Samba</a></li>
							<li><a href="shop.html">LA Trainer</a></li>
							<li><a href="shop.html">Superstar</a></li>
							<li><a href="shop.html">SL</a></li>
							<li><a href="shop.html">ZX</a></li>
							<li><a href="shop.html">Campus</a></li>
							<li><a href="shop.html">Spezial</a></li>
							<li><a href="shop.html">Dragon</a></li>
							<li><a href="shop.html">Originals Clothing</a></li>
							<li><a href="shop.html">Firebird</a></li>
							<li><a href="shop.html">Originals Accessories</a></li>
							<li><a href="shop.html">Men's Originals</a></li>
							<li><a href="shop.html">Women's Originals</a></li>
							<li><a href="shop.html">Kid's Originals</a></li>
							<li><a href="shop.html">All Originals</a></li>
						</ul>
					</div>
					<div class="col_1_of_5 span_1_of_5">
						<h3 class="m_9">Product Types</h3>
						<ul class="list1">
							<li><a href="shop.html">Shirts</a></li>
							<li><a href="shop.html">Pants & Tights</a></li>
							<li><a href="shop.html">Shirts</a></li>
							<li><a href="shop.html">Jerseys</a></li>
							<li><a href="shop.html">Hoodies & Track Tops</a></li>
							<li><a href="shop.html">Bags</a></li>
							<li><a href="shop.html">Jackets</a></li>
							<li><a href="shop.html">Hi Tops</a></li>
							<li><a href="shop.html">SweatShirts</a></li>
							<li><a href="shop.html">Socks</a></li>
							<li><a href="shop.html">Swimwear</a></li>
							<li><a href="shop.html">Tracksuits</a></li>
							<li><a href="shop.html">Hats</a></li>
							<li><a href="shop.html">Football Boots</a></li>
							<li><a href="shop.html">Other Accessories</a></li>
							<li><a href="shop.html">Sandals & Flip Flops</a></li>
							<li><a href="shop.html">Skirts & Dresseses</a></li>
							<li><a href="shop.html">Balls</a></li>
							<li><a href="shop.html">Watches</a></li>
							<li><a href="shop.html">Fitness Equipment</a></li>
							<li><a href="shop.html">Eyewear</a></li>
							<li><a href="shop.html">Gloves</a></li>
							<li><a href="shop.html">Sports Bras</a></li>
							<li><a href="shop.html">Scarves</a></li>
							<li><a href="shop.html">Shinguards</a></li>
							<li><a href="shop.html">Underwear</a></li>
						</ul>
					</div>
					<div class="col_1_of_5 span_1_of_5">
						<h3 class="m_9">Support</h3>
						<ul class="list1">
							<li><a href="shop.html">Store finder</a></li>
							<li><a href="shop.html">Customer Service</a></li>
							<li><a href="shop.html">FAQ</a></li>
							<li><a href="shop.html">Online Shop Contact Us</a></li>
							<li><a href="shop.html">about adidas Products</a></li>
							<li><a href="shop.html">Size Charts </a></li>
							<li><a href="shop.html">Ordering </a></li>
							<li><a href="shop.html">Payment </a></li>
							<li><a href="shop.html">Shipping </a></li>
							<li><a href="shop.html">Returning</a></li>
							<li><a href="shop.html">Using out Site</a></li>
							<li><a href="shop.html">Delivery Terms</a></li>
							<li><a href="shop.html">Site Map</a></li>
							<li><a href="shop.html">Gift Card</a></li>

						</ul>
						<ul class="sub_list2">
							<h4 class="m_10">Company Info</h4>
							<li><a href="shop.html">About Us</a></li>
							<li><a href="shop.html">Careers</a></li>
							<li><a href="shop.html">Press</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="wrap">
				<p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
			</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="app/controllers/CategoryController.js"></script>
<script type="text/javascript" src="app/controllers/ProductController.js"></script>
@endsection