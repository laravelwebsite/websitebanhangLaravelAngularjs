<div class="header-bottom" ng-controller="CategoryController">
	<div class="wrap">
		<!-- start header menu -->
		<ul class="megamenu skyblue" >
			
			<li class="grid"  ng-repeat="cate in categories" ng-init="$last && loadCompleted()"><a class="color2" href="#">[[cate.name]]</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1" ng-repeat="sub in cate.subcategory">
							<div class="h_nav" >
								<h4 style="color: rgb(255, 153, 51)">[[sub.name]]</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
			
						</div>
						
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<img src="user/images/nav_img.jpg" alt=""/>
					</div>
				</div>
			</li>
			
		</ul>
		<div class="clear"></div>
	</div>
</div>

