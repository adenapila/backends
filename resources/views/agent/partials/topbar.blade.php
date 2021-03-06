<div class="header navbar">
  <div class="header-container">
    <ul class="nav-left">
          <li>
        <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
          <i class="ti-menu"></i>
        </a>
      </li>
       <li class="nav-item active">
          <a class="nav-link" href="/agent">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
    </ul>

    <ul class="nav-right">   
    <li class="search-box">
        <a class="search-toggle no-pdd-right" href="javascript:void(0);">
          <i class="search-icon ti-search pdd-right-10"></i>
          <i class="search-icon-close ti-close pdd-right-10"></i>
        </a>
      </li>
      <li class="search-input">
        <input class="form-control" type="text" placeholder="Search...">
      </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
          <div class="peer">
            <i class="ti-user mR-10"></i>
            <span class="fsz-sm c-grey-900">{{ auth()->user()->name }}</span>
          </div>
        </a>
        <ul class="dropdown-menu fsz-sm"> 
          <li>
            <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
              <i class="ti-user mR-10"></i>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="/logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
              <i class="ti-power-off mR-10"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div> 
</div>