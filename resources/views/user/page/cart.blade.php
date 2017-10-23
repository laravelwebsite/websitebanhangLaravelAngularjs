 @extends('user.layout.index')
 @section('title')
 Đăng ký tài khoản mua hàng
 @endsection
 @section('contentright')
 <h2 class="text-center">Giỏ hàng đã đặt mua của bạn</h2>
 <div class="container"> 
   <table id="cart" class="table table-hover table-condensed"> 
    <thead> 
     <tr> 
      <th style="width:50%">Tên sản phẩm</th> 
      <th style="width:10%">Giá</th> 
      <th style="width:8%">Số lượng</th> 
      <th style="width:22%" class="text-center">Thành tiền</th> 
      <th style="width:10%"> </th> 
    </tr> 
  </thead> 
  <tbody>
  @foreach($cartContent as $cart)
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="upload/product/{{$cart->options->image}}" alt="{{$cart->name}}" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">{{$cart->name}}</h4> 
      <p>{{$cart->options->description}}</p> 
    </div> 
  </div> 
</td> 
<td data-th="Price">{{number_format($cart->price)}}</td> 
<td data-th="Quantity"><input id="{{$cart->rowId}}" class="qty" name="qty" class="form-control text-center" value="{{$cart->qty}}" type="number">
</td> 
<td data-th="Subtotal" class="text-center">{{number_format($cart->subtotal)}}</td> 
<td class="actions" data-th="">
  <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
  </button> 
  <button class="btn btn-danger btn-sm" onclick="window.location='xoa-gio-hang/{{$cart->rowId}}'"><i class="fa fa-trash-o"></i>
  </button>
</td> 
</tr> 
@endforeach
</tbody><tfoot> 
<tr class="visible-xs"> 
  <td class="text-center"><strong></strong>
  </td> 
</tr> 
<tr> 
  <td><a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
  </td> 
  <td colspan="2" class="hidden-xs"> </td> 
  <td class="hidden-xs text-center"><strong>Tổng tiền {{($total)}} đ</strong>
  </td> 
  <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
  </td> 
</tr> 
</tfoot> 
</table>
</div>

<style type="text/css">.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
  vertical-align: middle;
}

@media screen and (max-width: 600px) { 
  table#cart tbody td .form-control { 
    width:20%; 
    display: inline !important;
  } 

  .actions .btn { 
    width:36%; 
    margin:1.5em 0;
  } 

  .actions .btn-info { 
    float:left;
  } 

  .actions .btn-danger { 
    float:right;
  } 

  table#cart thead {
    display: none;
  } 

  table#cart tbody td {
    display: block;
    padding: .6rem;
    min-width:320px;
  } 

  table#cart tbody tr td:first-child {
    background: #333;
    color: #fff;
  } 

  table#cart tbody td:before { 
    content: attr(data-th);
    font-weight: bold; 
    display: inline-block;
    width: 8rem;
  } 

  table#cart tfoot td {
    display:block;
  } 
  table#cart tfoot td .btn {
    display:block;
  }
}</style>
@endsection

@section('script')
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".qty").change(function(event){
      var soluong = $(this).val();
      var id=this.id;
      $.ajax({
        url: 'sua-gio-hang',
        type:"POST", 
        cache:false,
        data: {
          "soluong": soluong,
          "id":id
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){

          if(response=="fail")
          {
            alert("Vui lòng nhập Số để tìm!!");
          }
          else if(response=="notfound")
          {
            $("#contentajax").html("<div class='alert alert-danger'><strong>Không tìm thấy dữ liệu</strong></div>");
          }
          else
          {
            $("#contentajax").html(response);
          }
        }
      });
    });  
  });
</script>
@endsection