
<div class="clearfix"></div>
<div class="rsidebar span_1_of_left">
 
  <section  class="sky-form" >
    <h4 style="width: 250px;">Lọc theo danh mục</h4>
    <div class="row row1 scroll-pane" style="height: 300px;">
      <div class="col col-5">
        @foreach($allCate as $ca)
        <label class="checkbox"><input type="checkbox" id="searchcate" class="searchcate" name="checkbox" value="{{$ca->slug}}"><i></i>{{$ca->name}}</label>
        @endforeach
      </div>
    </div>
  </section>
<section  class="sky-form">
    <h4 style="width: 250px;margin-top: 20px">Tất cả danh mục</h4>
  </section>
  <div class="navigation" style="margin-top: 20px">
    <ul>
      <!-- allCate -->
      @foreach($allCate as $c)
      <!-- if-1 -->
      @if(count($c->subcategory)>0 && $c->delete==1)

      <li class="has-sub"> <a href="search-product-cate/{{$c->slug}}">{{$c->name}}</a>
        <ul>
          @foreach($c->subcategory as $sub)
          @if(count($sub->detailsubcategory)>0 && $sub->delete==1)
          <li class="has-sub"> <a href="search-product-subcate/{{$sub->slug}}">{{$sub->name}}</a>
            <ul> 
              @foreach($sub->detailsubcategory as $dd)
              @if($dd->delete==1)
              <li ><a href="search-product-detailcate/{{$dd->slug}}">{{$dd->name}}</a></li>
              @endif
              @endforeach
            </ul>
          </li>
          @else
          <li > <a href="search-product-subcate/{{$sub->slug}}">{{$sub->name}}</a></li>
          @endif
          @endforeach
        </ul>
      </li>
      @else
      <li > <a href="search-product-cate/{{$c->slug}}">{{$c->name}}</a></li>
      @endif
      <!-- if-1 -->
      @endforeach
      <!-- allCate -->
    </ul>
  </div>
 
</div>
