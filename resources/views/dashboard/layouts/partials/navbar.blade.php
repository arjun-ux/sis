<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      {{-- <a class="navbar-brand" href="index.html"><img src="{{ asset('img/pondok.png') }}" alt="logo" width="50" height="50"/></a> --}}
      {{-- <a class="navbar-brand brand-logo-mini" href="index.html">AA</a> --}}

    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="assets/images/faces/face28.png" alt="image">
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">Henry Klein</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-first">

            <div class="p-1">
              <h5 class="dropdown-header text-uppercase ps-2 text-dark">Action</h5>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Profile</span>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Log Out</span>
              </a>
            </div>
          </div>
        </li>

      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
