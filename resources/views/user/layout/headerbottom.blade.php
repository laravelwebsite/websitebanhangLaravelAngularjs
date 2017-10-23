<div class="header-bottom" ng-controller="CategoryController">
	<div class="wrap">
		<!-- start header menu -->
		<ul class="megamenu skyblue" >
			
			<li class="grid"  ng-repeat="cate in category" ng-init="$last && loadCompleted()"><a class="color2" href="admin/product/search-product-cate/[[cate.slug]]">[[cate.name]]</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1" ng-repeat="sub in cate.subcategory">
							<div class="h_nav" >
								<a href="admin/product/search-product-subcate/[[sub.slug]]"><h4 style="color: rgb(255, 153, 51)">[[sub.name]]</h4></a>
								<ul>
									<li ng-repeat="detail in sub.detailsubcategory"><a href="admin/product/search-product-detailcate/[[detail.slug]]" >[[detail.name]]</a></li>
								</ul>	
							</div>
			
						</div>
				
					</div>
				</div>
			</li>
			
		</ul>
		<div class="clear"></div>
	</div>
</div>

