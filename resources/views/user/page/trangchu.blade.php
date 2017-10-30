@extends('user.layout.index')

@section('slide')
@include('user.layout.slide')
@endsection

@section('contentleft')
@include('user.layout.contentleft')
@endsection
@section('contentright')
    <div class="cont span_2_of_3" >
@include('user.layout.sort')
  <div class="box1" >
   <div id="contentajax">
    <div class="clear"></div>
    @foreach($productt as $pro)
    <div class="col_1_of_single1 span_1_of_single1" ><a href="san-pham/{{$pro->slug}}">
     <div class="view1 view-fifth1">
      <div class="top_box">
        <h3 class="m_1">{{$pro->name}}</h3>
        <p class="m_2">{{$pro->title}}</p>
        <div class="grid_img">
         <div class="css3"><img src="upload/product/{{$pro->image}}" alt="{{$pro->title}}" style="width: 280px;height: 190px" /></div>
         <div class="mask1">
          <div class="info">Chi tiết</div>
        </div>
      </div>
      <div class="price">{{number_format($pro->price)}} VND</div>
    </div>
  </div>
  <span class="rating1">
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
  </span>

  <ul class="list2" >
    <li>
      <img src="user/images/plus.png" alt=""/>
      <ul class="icon1 sub-icon1 profile_img">
        <li><a class="active-icon c1" href="them-gio-hang/{{$pro->slug}}">Add cart </a>
          <ul class="sub-icon1 list">
            <li><a href="them-gio-hang/{{$pro->slug}}"><h3>Thêm vào giỏ hàng</h3></a></li>
            <li><p>Thêm vào giỏ hàng để mua sản phẩm của bạn<a href="gio-hang"> Xem giỏ hàng </a></p></li>
          </ul>
        </li>
      </ul>
    </li>

  </ul>
  <div class="clear"></div>
  
</a> <div class="clear"></div>
</div>
@endforeach
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="box1" style="padding: 20px">
    {{$productt->links()}}
</div>
</div>
@endsection

@section('script')
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
@endsection
