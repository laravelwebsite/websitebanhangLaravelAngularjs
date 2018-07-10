<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset(' ')}}" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
	
  <link href="{{ asset('user/css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="{{ asset('supadmin/style-shorten/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('supadmin/style-shorten/css/bootstrap-reset.css')}}" rel="stylesheet">
    <link href="{{ asset('supadmin/style-shorten/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
   
    <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
    @yield('css')
    <link href="{{ asset('css/menudoc.css')}}" rel="stylesheet">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			@include('user.layout1.headertop')
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			@include('user.layout1.headermiddle')
		</div><!--/header-middle-->
	
		
			@yield('headerbottom')
			
		
	</header><!--/header-->
	
	@yield('slider')
	
	<section>
		<div class="container">
			@yield('content')
			<div class="row">
				<div class="col-sm-3">
					@yield('leftslidebar')
				</div>
				
				<div class="col-sm-9 padding-right" id="contentajax">
					@yield('contentright')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		@include('user.layout1.footer')
	</footer><!--/Footer-->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.jscrollpane.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('user/js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{ asset('user/js/easing.js')}}"></script>
  <script type="text/javascript" src="{{ asset('app/lib/angular.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/angular-ui-router.min.js')}}"></script>
	<script src="{{ asset('supadmin/style-shorten/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('app/app.js')}}"></script>
	<script src="{{ asset('js/angular-route.js')}}"></script>
	<script src="{{ asset('js/dirPagination.js')}}"></script>
	
	<script src="{{ asset('js/ng-file-upload.min.js')}}"></script>
	<script src="{{ asset('js/ng-file-upload-shim.js')}}"></script>
	<script src="{{ asset('js/dropzone.min.js')}}"></script>
	<!-- typeHead -->
	<script src="{{ asset('js/typeahead.bundle.min.js')}}"></script>
	<!-- start menu -->     
	<link href="{{ asset('user/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{ asset('user/js/megamenu.js')}}"></script>
	
  	<script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
    
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/tether.min.js')}}"></script>
	<script src="{{ asset('js/price-range.js')}}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#tukhoa").keyup(function(event){
      var tukhoa = $(this).val();
      $.ajax({
        url: 'tim-kiem-product',
        type:"POST", 
        cache:false,
        data: {
          "tukhoa": tukhoa
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $("#contentajax").html(response);
        }
      });
    }); 
 

  });
</script>
    @yield('script')
</body>
</html>