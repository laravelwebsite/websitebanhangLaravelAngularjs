@extends('user.layout.index')
@section('title')
Website bán hàng trực tuyến
@endsection
@section('slide')
	@include('user.layout.slide')
@endsection

@section('contentleft')
	@include('user.layout.contentleft')
@endsection
@section('contentright')
	<div class="cont span_2_of_3">
    <div class="mens-toolbar">
      <div class="sort">
        <div class="sort-by">
          <label>Sort By</label>
          <select>
            <option value="">
              Popularity               </option>
              <option value="">
                Price : High to Low               </option>
                <option value="">
                  Price : Low to High               </option>
                </select>
                <a href=""><img src="user/images/arrow2.gif" alt="" class="v-middle"></a>
              </div>
            </div>
            <div class="pager">   
             <div class="limiter visible-desktop">
              <label>Show</label>
              <select>
                <option value="" selected="selected">
                  9                </option>
                  <option value="">
                    15                </option>
                    <option value="">
                      30                </option>
                    </select> per page        
                  </div>
                  <ul class="dc_pagination dc_paginationA dc_paginationA06">
                    <li><a href="#" class="previous">Pages</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                  </ul>
                  <div class="clear"></div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="box1">
               <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
                 <div class="view1 view-fifth1">
                  <div class="top_box">
                    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
                    <p class="m_2">Lorem ipsum</p>
                    <div class="grid_img">
                     <div class="css3"><img src="user/images/pic11.jpg" alt=""/></div>
                     <div class="mask1">
                      <div class="info">Quick View</div>
                    </div>
                  </div>
                  <div class="price">£480</div>
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
                (45)
              </span>

              <ul class="list2" >
                <li>
                  <img src="user/images/plus.png" alt=""/>
                  <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c1" href="#">Add To Bag </a>
                      <ul class="sub-icon1 list">
                        <li><h3>sed diam nonummy</h3><a href=""></a></li>
                        <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="clear"></div>
            </a></div>
            <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
             <div class="view1 view-fifth1">
              <div class="top_box">
                <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
                <p class="m_2">Lorem ipsum</p>
                <div class="grid_img">
                 <div class="css3"><img src="user/images/pic10.jpg" alt=""/></div>
                 <div class="mask1">
                  <div class="info">Quick View</div>
                </div>
              </div>
              <div class="price">£480</div>
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
            (45)
          </span>
          <ul class="list2">
            <li>
              <img src="user/images/plus.png" alt=""/>
              <ul class="icon1 sub-icon1 profile_img">
                <li><a class="active-icon c1" href="#">Add To Bag </a>
                  <ul class="sub-icon1 list">
                    <li><h3>sed diam nonummy</h3><a href=""></a></li>
                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </a></div>
        <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
         <div class="view1 view-fifth1">
          <div class="top_box">
            <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
            <p class="m_2">Lorem ipsum</p>
            <div class="grid_img">
             <div class="css3"><img src="user/images/pic9.jpg" alt=""/></div>
             <div class="mask1">
              <div class="info">Quick View</div>
            </div>
          </div>
          <div class="price">£480</div>
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
        (45)
      </span>
      <ul class="list2">
        <li>
          <img src="user/images/plus.png" alt=""/>
          <ul class="icon1 sub-icon1 profile_img">
            <li><a class="active-icon c1" href="#">Add To Bag </a>
              <ul class="sub-icon1 list">
                <li><h3>sed diam nonummy</h3><a href=""></a></li>
                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <div class="clear"></div>
    </a></div>
    <div class="clear"></div>
  </div>
  <div class="box1">
   <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
     <div class="view1 view-fifth1">
      <div class="top_box">
        <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
        <p class="m_2">Lorem ipsum</p>
        <div class="grid_img">
         <div class="css3"><img src="user/images/pic3.jpg" alt=""/></div>
         <div class="mask1">
          <div class="info">Quick View</div>
        </div>
      </div>
      <div class="price">£480</div>
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
    (45)
  </span>
  <ul class="list2">
    <li>
      <img src="user/images/plus.png" alt=""/>
      <ul class="icon1 sub-icon1 profile_img">
        <li><a class="active-icon c1" href="#">Add To Bag </a>
          <ul class="sub-icon1 list">
            <li><h3>sed diam nonummy</h3><a href=""></a></li>
            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  <div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic4.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic5.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="clear"></div>
</div>
<div class="box1">
  <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
   <div class="view1 view-fifth1">
    <div class="top_box">
      <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
      <p class="m_2">Lorem ipsum</p>
      <div class="grid_img">
       <div class="css3"><img src="user/images/pic6.jpg" alt=""/></div>
       <div class="mask1">
        <div class="info">Quick View</div>
      </div>
    </div>
    <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic7.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic8.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="clear"></div>
</div>
<div class="box1">
 <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
   <div class="view1 view-fifth1">
    <div class="top_box">
      <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
      <p class="m_2">Lorem ipsum</p>
      <div class="grid_img">
       <div class="css3"><img src="user/images/pic2.jpg" alt=""/></div>
       <div class="mask1">
        <div class="info">Quick View</div>
      </div>
    </div>
    <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic1.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
 <div class="view1 view-fifth1">
  <div class="top_box">
    <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
    <p class="m_2">Lorem ipsum</p>
    <div class="grid_img">
     <div class="css3"><img src="user/images/pic.jpg" alt=""/></div>
     <div class="mask1">
      <div class="info">Quick View</div>
    </div>
  </div>
  <div class="price">£480</div>
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
  (45)
</span>
<ul class="list2">
  <li>
    <img src="user/images/plus.png" alt=""/>
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#">Add To Bag </a>
        <ul class="sub-icon1 list">
          <li><h3>sed diam nonummy</h3><a href=""></a></li>
          <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div class="clear"></div>
</a></div>
<div class="clear"></div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="app/controllers/CategoryController.js"></script>
@endsection