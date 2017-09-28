<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->     
<link href="user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="supadmin/style-shorten/css/bootstrap.min.css" rel="stylesheet">
@yield('css')
</head>
<body>
@include('user.layout.headertop')
@include('user.layout.headerbottom')
@yield('slide')
<div class="main">
  <div class="wrap">
    @yield('contenttop')
    @yield('contentbottom')
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

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="supadmin/style-shorten/js/bootstrap.min.js"></script>

<script type="text/javascript" src="app/lib/angular.min.js"></script>
  <script type="text/javascript" src="app/app.js"></script>
  <script src="js/angular-route.js"></script>
<script src="js/dirPagination.js"></script>

<script type="text/javascript" src="user/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="user/js/move-top.js"></script>
<script type="text/javascript" src="user/js/easing.js"></script>
<script type="text/javascript" src="supadmin/style-shorten/assets/ckeditor/ckeditor.js"></script>
   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
  @yield('script')
<script type="text/javascript">

        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
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
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>