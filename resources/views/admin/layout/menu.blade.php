      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li class="sub-menu">
                      <a href="javascript();" class="
                      @if(Request::segment(2)=="statictis-seeder" || Request::segment(1)=="api")
                              {{''}}
                        @else {{'active'}}
                      @endif"
                      >
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard System</span>
                      </a>
                      <ul class="sub">
                      @foreach($menuuser as $mn)
                          <li><a href="{{$mn->menu->src}}"  >{{$mn->menu->name}}</a></li>
                      @endforeach
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->