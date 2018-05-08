
<!DOCTYPE HTML>
<html ng-app="my-app">
<head>
  <title>@yield('title')</title>
  <base href="{{asset(' ')}}" >
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="user/css/form.css" rel="stylesheet" type="text/css" media="all" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="supadmin/style-shorten/css/style.css" rel="stylesheet">
  <link href="supadmin/style-shorten/css/style-responsive.css" rel="stylesheet" />
  <link href="supadmin/style-shorten/css/bootstrap-reset.css" rel="stylesheet">
    <link href="supadmin/style-shorten/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  

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
  
  

  <script type="text/javascript" src="user/js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" id="sourcecode">
    $(function()
    {
      $('.scroll-pane').jScrollPane();
    });
  </script>

  <!-- top scrolling -->
  <script type="text/javascript" src="user/js/move-top.js"></script>
  <script type="text/javascript" src="user/js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>  
<link href="supadmin/style-shorten/css/bootstrap.min.css" rel="stylesheet">
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
<script type="text/javascript" src="app/lib/angular.min.js"></script>
<script type="text/javascript" src="js/angular-ui-router.min.js"></script>
<script src="supadmin/style-shorten/js/bootstrap.min.js"></script>
<script type="text/javascript" src="app/app.js"></script>
<script src="js/angular-route.js"></script>
<script src="js/dirPagination.js"></script>
<script src="js/ng-file-upload-all.min.js"></script>
<script src="js/ng-file-upload.min.js"></script>
<script src="js/ng-file-upload-shim.js"></script>
<script src="js/dropzone.min.js"></script>
<!-- typeHead -->
<script src="js/typeahead.bundle.min.js"></script>
<!-- start menu -->     
<link href="user/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="user/js/megamenu.js"></script>
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
$(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
        $(this).find('i:first').toggleClass("icon-minus");      
    }); 
    
    // Open Le current menu
    $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
    $("#left ul.nav li.current").parents('ul.children').addClass("in"); 

    $("input[type=checkbox]").change(function(event){
      var val=[];
      $(":checkbox:checked").each(function(i)
      {
          val[i]=$(this).val();
      });
      $.ajax({
        url: 'loc-san-pham',
        type:"POST", 
        cache:false,
        data: {
          "val": val
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
</html>