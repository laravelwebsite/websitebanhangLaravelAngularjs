
<div class="wrap" id="thongtin">
        <h2 class="title">Cảm ơn {{$data["name"]}} đã mua sản phẩm của chúng tôi</h2>
    
          <div class="form-group">
            <h3>Sản phẩm</h3>
            <div class="col-sm-7">
            		@foreach($data["cart"] as $c)
              	</h3>{{$c->name}} --- Số lượng: {{$c->qty}} --- Gía: {{$c->subtotal}}</h3>
              		<img src="url(upload/product/{{$c->options->image}})" alt="">
              	@endforeach
            </div>

          </div>
          <div class="form-group">
            <h2>Tổng thanh toán</h2>
            <div class="col-sm-7">
             <h3>{{$data["total"]}}</h3>
            </div>

          </div>
          <div class="form-group">
            <h2>Địa chỉ</h2>
            <div class="col-sm-7">
              <h3>{{$data["address"]}}</h3>
            </div>

          </div>
          <div class="form-group">
            <h2>Số điện thoại</h2>
            <div class="col-sm-7">
              <h3>{{$data["phone"]}}</h3>
            </div>

          </div>
       </div>   
</div>