<div class="dash_pro_pick">
    <em><img src="assets/images/dash_pro_pick.jpg" alt=""></em>
    <h5>{{ Auth::user()->name; }}</h5>
    <h6>{{ Auth::user()->email; }}</h6>
</div>
<div class="menu_link">
    <nav class="nav_top">
        <div>
         <ul class="navbar-nav menu_sec menu_sec_var">
               <li class="actv"><a href="{{url('dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashborder</a></li>
               <li class="dropdown">
                   <a href=""><span class="dropdown-toggle drop-arw" data-toggle="dropdown" id="drop-arw1"></span>
                       <i class="fa fa-shopping-cart"></i> Order Book</a>
                       <ul class="dropdown-menu" id="dropdown-menu1">
                           <li><a href="{{url('orderform')}}"><i class='fas fa-check-double'></i>Order Form</a></li>
                          <li><a href="{{url('orderhistory')}}"><i class='fas fa-check-double'></i>Order History</a></li>
                          <li><a href="{{url('orderstatus')}}"><i class='fas fa-check-double'></i>Order Status</a></li>
                      </ul>
               </li>
               <li class="dropdown">
                   <a href=""><span class="dropdown-toggle drop-arw" data-toggle="dropdown" id="drop-arw2"></span>
                       <i class="fa fa-shopping-cart"></i> Manufacture</a>
                       <ul class="dropdown-menu" id="dropdown-menu2">
                          <li><a href="{{url('fillinghistory')}}"><i class="fa fa-file"></i>Filing History</a></li>
                          <li><a href="{{url('buffinghistory')}}"><i class="fa fa-history"></i>Buffing History</a></li>
                          <li><a href="{{url('prepolish')}}"><i class="fa fa-check-circle"></i>Pre Polish</a></li>
                          <li><a href="{{url('setting')}}"><i class="fas fa-cog"></i>Setting</a></li>
                      </ul>
               </li>
               <li><a href="{{url('workers')}}"><i class="fa fa-user"></i> Workar</a></li>
               <li><a href="{{url('products')}}"><i class="fas fa-gem"></i> Products</a></li>
               <li><a href="{{url('customers')}}"><i class="fa fa-users"></i> Customers</a></li>
               <li><a  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>logout</a></li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </ul>
        </div>
  </nav>
</div>
</div>
