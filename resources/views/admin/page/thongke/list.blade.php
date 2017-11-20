@extends('admin.layout.index')
@section('title')
User List | Admin
@endsection
@section('content')
<!-- page start-->
<div class="row">
  <div class="col-sm-12">
    <section class="panel">
      <div class="col-lg-12">
        <div id="accordion" class="panel-group m-bot20">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">1# Thống kê theo ngày</a>
              </h4>
            </div>
            <div class="panel-collapse collapse in" id="collapseOne">
              <div class="panel-body">
                <div>
                  <?php 
                        $year=date("Y");
                  ?>
                  Chọn năm
                  <select name="year1" id="year1" class="year1">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2050">2050</option>
                    <option value="2051">2051</option>
                    <option value="2052">2052</option>
                    <option value="2017">2053</option>
                    <option value="2054">2054</option>
                    <option value="2055">2055</option>
                    <option value="2056">2056</option>
                    <option value="2057">2057</option>
                    <option value="2058">2058</option>
                    <option value="2059">2059</option>
                    <option value="2060">2060</option>
                  </select>
                  Chọn tháng
                  <select name="month1" class="month1" id="month1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  Chọn ngày
                  <select name="date" class="date" id="date" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                <div id="ajaxdate">
                  <table class="table table-hover display table-bordered">
                    <thead>
                      <tr>
                        <th><i class="fa fa-bookmark"></i>ID</th>
                        <th ><i class=" fa fa-user"></i>EMAIL</th>    
                        <th ><i class=" fa fa-user"></i>PHONE</th>   
                        <th><i class=" fa fa-user"></i>PRICE</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <sample-text></sample-text>
                      <div orientable></div>

                      <tr>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">2# Thống kê theo tháng</a>
              </h4>
            </div>
            <div class="panel-collapse collapse" id="collapseTwo">
              <div class="panel-body">
                Chọn năm
                <select name="year2" id="year2" class="year2">
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
                  <option value="2037">2037</option>
                  <option value="2038">2038</option>
                  <option value="2039">2039</option>
                  <option value="2040">2040</option>
                  <option value="2050">2050</option>
                  <option value="2051">2051</option>
                  <option value="2052">2052</option>
                  <option value="2017">2053</option>
                  <option value="2054">2054</option>
                  <option value="2055">2055</option>
                  <option value="2056">2056</option>
                  <option value="2057">2057</option>
                  <option value="2058">2058</option>
                  <option value="2059">2059</option>
                  <option value="2060">2060</option>
                </select>
                Chọn tháng
                <select name="month2" class="month2" id="month2">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <div id="ajaxmonth">
                  <table class="table table-hover display table-bordered">
                    <thead>
                      <tr>
                        <th><i class="fa fa-bookmark"></i>ID</th>
                        <th ><i class=" fa fa-user"></i>EMAIL</th>    
                        <th ><i class=" fa fa-user"></i>PHONE</th>   
                        <th><i class=" fa fa-user"></i>PRICE</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <sample-text></sample-text>
                      <div orientable></div>
                      <tr>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">3# Thống kê theo năm</a>
              </h4>
            </div>
            <div class="panel-collapse collapse" id="collapseThree">
              <div class="panel-body">
                Chọn năm
                <select name="year3" id="year3" class="year3">
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
                  <option value="2037">2037</option>
                  <option value="2038">2038</option>
                  <option value="2039">2039</option>
                  <option value="2040">2040</option>
                  <option value="2050">2050</option>
                  <option value="2051">2051</option>
                  <option value="2052">2052</option>
                  <option value="2017">2053</option>
                  <option value="2054">2054</option>
                  <option value="2055">2055</option>
                  <option value="2056">2056</option>
                  <option value="2057">2057</option>
                  <option value="2058">2058</option>
                  <option value="2059">2059</option>
                  <option value="2060">2060</option>
                </select>
                <div id="ajaxyear">
                  <table class="table table-hover display table-bordered">
                    <thead>
                      <tr>
                        <th><i class="fa fa-bookmark"></i>ID</th>
                        <th ><i class=" fa fa-user"></i>EMAIL</th>    
                        <th ><i class=" fa fa-user"></i>PHONE</th>   
                        <th><i class=" fa fa-user"></i>PRICE</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <sample-text></sample-text>
                      <div orientable></div>

                      <tr>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                        <td class="text-center"><span></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- page end-->
@endsection

@section('script')
<script type="text/javascript">
  jQuery(document).ready(function($) {

    $(window).on('load', function() {
     var year=$("#year1").val();
     var month=$('#month1').val();
     var date=$('#date').val();
     $.ajax({
      url: 'admin/thongke/xem-thu-chi',
      type:"POST", 
      cache:false,
      data: {
        "year": year,
        "month":month,
        "date":date
      },
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      async: true,
      success: function(response){
        $('#ajaxdate').html(response);
      }
    });
   })

    $("#year1").change(function(event){
      var year=$(this).val();
      var month=$('#month1').val();
      var date=$('#date').val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
          "month":month,
          "date":date
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxdate').html(response);
        }
      });
    }); 


    $("#month1").change(function(event){
      var month=$(this).val();
      var year=$('#year1').val();
      var date=$('#date').val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
          "month":month,
          "date":date
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxdate').html(response);
        }
      });
    });

    $("#date").change(function(event){
      var month=$('#month1').val();
      var year=$('#year1').val();
      var date=$(this).val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
          "month":month,
          "date":date
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxdate').html(response);
        }
      });
    });

    $("#year2").change(function(event){
      var month=$("#month2").val();
      var year=$(this).val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
          "month":month
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxmonth').html(response);
        }
      });
    });

    $("#month2").change(function(event){
      var month=$(this).val();
      var year=$('#year2').val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
          "month":month
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxmonth').html(response);
        }
      });
    });
    $("#year3").change(function(event){
      var year=$(this).val();
      $.ajax({
        url: 'admin/thongke/xem-thu-chi',
        type:"POST", 
        cache:false,
        data: {
          "year": year,
        },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        async: true,
        success: function(response){
          $('#ajaxyear').html(response);
        }
      });
    });
  });
</script>
@endsection