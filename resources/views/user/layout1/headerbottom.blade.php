<div class="header-bottom"><!--header-bottom-->
<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								@foreach($cate as $ca)
								<li class="dropdown"><a href="search-product-cate/{{$ca->slug}}">{{$ca->name}}<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	@foreach($ca->subcategory as $sub)
                                        <li><a href="search-product-subcate/{{$sub->slug}}">{{$sub->name}}</a></li>
                                      @endforeach 
                                    </ul>
                                </li> 
								@endforeach
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" id="tukhoa" value="{!! old('tukhoa') !!}" class="form-control" placeholder="Search for product" name="tukhoa" required="true">
						</div>
					</div>
				</div>
			</div>
			</div><!--/header-bottom-->