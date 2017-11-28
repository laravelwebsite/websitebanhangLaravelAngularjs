
<!DOCTYPE HTML>
<html ng-app="my-app">
<head>
  <title>@yield('title')</title>
  <base href="{{asset(' ')}}" >
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="public/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="public/user/css/form.css" rel="stylesheet" type="text/css" media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="public/supadmin/style-shorten/css/style.css" rel="stylesheet">
  <link href="public/supadmin/style-shorten/css/style-responsive.css" rel="stylesheet" />
  <link href="public/supadmin/style-shorten/css/bootstrap-reset.css" rel="stylesheet">
    <link href="public/supadmin/style-shorten/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript" src="public/js/jquery.min.js"></script>
  

  <script type="text/javascript">
    $(document).ready(function() {
      $(".dropdown img.flag").addClass("flagvisibility");

      $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
      });
      $(".megamenu").megamenu();
      $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a span").html(text);
        $(".dropdown dd ul").hide();
        $("#result").html("Selected value is: " + getSelectedValue("sample"));
      });

      function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
      }

      $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (! $clicked.parents().hasClass("dropdown"))
          $(".dropdown dd ul").hide();
      });


      $("#flagSwitcher").click(function() {
        $(".dropdown img.flag").toggleClass("flagvisibility");
      });
    });
  </script>
  
  

  <script type="text/javascript" src="public/user/js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" id="sourcecode">
    $(function()
    {
      $('.scroll-pane').jScrollPane();
    });
  </script>

  <!-- top scrolling -->
  <script type="text/javascript" src="public/user/js/move-top.js"></script>
  <script type="text/javascript" src="public/user/js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>  
<link href="public/supadmin/style-shorten/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @include('user.layout.headertop')
  @include('user.layout.headerbottom')
  @yield('slide')
  <div class="login">
   <div class="wrap" ui-view>
   
    @yield('contentleft')
    @yield('contentright') 
    <div class="clear"></div>
  </div>
</div>
@include('user.layout.footer')
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
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
<script type="text/javascript" src="public/app/lib/angular.min.js"></script>
<script type="text/javascript" src="public/js/angular-ui-router.min.js"></script>
<script src="public/supadmin/style-shorten/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/app/app.js"></script>
<script src="public/js/angular-route.js"></script>
<script src="public/js/dirPagination.js"></script>
<script src="public/js/ng-file-upload-all.min.js"></script>
<script src="public/js/ng-file-upload.min.js"></script>
<script src="public/js/ng-file-upload-shim.js"></script>
<script src="public/js/dropzone.min.js"></script>
<!-- typeHead -->
<script src="public/js/typeahead.bundle.min.js"></script>
<!-- start menu -->     
<link href="public/user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="public/user/js/megamenu.js"></script>

@yield('script')
</html>