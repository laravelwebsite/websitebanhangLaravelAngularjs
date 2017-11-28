       @extends('user.layout.index')
       @section('title')
       Liên hệ
       @endsection
       @section('contentright')

       <div class="wrap">
       	<h2 class="title">Gửi email cho chúng tôi để phản hồi và góp ý</h2>
       	<form name="frmUser" class="form-horizontal" action="lien-he" method="POST">
       		@if(count($errors)>0)
       		<div class="alert alert-danger">
       			<strong>Whoops!</strong>There were some problems with your input! <br><br>
       			<ul>
       				@foreach($errors->all() as $error)
       				<li>{{$error}}</li>
       				@endforeach
       			</ul> 
       		</div>
       		@endif

                     <!-- thong bao dang ky tai khoan thanh cong-->
                     @if(session('thongbao'))
                     <div class="alert alert-success">
                            <strong>{{session('thongbao')}}</strong>
                     </div>
                     @endif
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <div class="form-group">
                         <label for="name" class="col-sm-3 control-label">Họ tên</label>
                         <div class="col-sm-7">
                               <input type="text" value="{!! old('name') !!}" required="true" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" />
                        </div>

                 </div>
                 <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-7">
                        <input type="text" value="{!! old('email') !!}" required="true" class="form-control" id="email" name="email" placeholder="Vui lòng nhập email" />
                 </div>

          </div>
          <div class="form-group">
              <label for="title" class="col-sm-3 control-label">Tiêu đề</label>
              <div class="col-sm-7">
                     <input type="text" value="{!! old('title') !!}" required="true" class="form-control" id="title" name="title" placeholder="Vui lòng nhập tiêu đề" />
              </div>

       </div>
       <div class="form-group">
              <label for="content" class="col-sm-3 control-label">Nội dung</label>
              <div class="col-sm-7">
                     <textarea type="text" value="{!! old('content') !!}" required="true" class="form-control" id="content" name="content" placeholder="Vui lòng nhập nội dung">{!! old('content') !!}</textarea>
              </div>

       </div>
       <div class="form-group">
           <label for="" class="col-sm-3 control-label"></label>
           <div class="col-sm-7">
                 <button type="submit" class="btn btn-default">Gửi mail
                 </button>
          </div>

   </div>
</form>
</div> 

@endsection