<div class="rsidebar span_1_of_left">
     <section  class="sky-form">
      <h4>Lọc theo danh mục</h4>
      <div class="row row1 scroll-pane">
        <div class="col col-4">
        @foreach($cate as $ca)
          <label class="checkbox"><input type="checkbox" id="searchcate" class="searchcate" name="checkbox" value="{{$ca->slug}}"><i></i>{{$ca->name}}</label>
       @endforeach
        </div>
      </div>
    </section>
  </div>