<div class="header-wrapper row m-0">
   
    <div class="left-header col horizontal-wrapper ps-0">
      
    </div>
    <div class="nav-right col-8 pull-right right-header p-0">
      <ul class="nav-menus">
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4</span></div>
          <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Notitications</h6>
            <ul>
              <li class="b-l-primary border-4">
                <p>Delivery processing <span class="font-danger">10 min.</span></p>
              </li>
              <li class="b-l-success border-4">
                <p>Order Complete<span class="font-success">1 hr</span></p>
              </li>
              <li class="b-l-info border-4">
                <p>Tickets Generated<span class="font-info">3 hr</span></p>
              </li>
              <li class="b-l-warning border-4">
                <p>Delivery Complete<span class="font-warning">6 hr</span></p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
       
       
        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li class="profile-nav onhover-dropdown p-0 me-0">
          <div class="media profile-media">
            {{-- <img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt=""> --}}
            <div class="media-body"><span>{{ Auth::user()->name }}</span>
              <p class="mb-0 font-roboto"><i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                    this.closest('form').submit();"><i data-feather="log-out"> </i><span>Logout</span></a></li>
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>