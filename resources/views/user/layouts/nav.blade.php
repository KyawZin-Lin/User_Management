  <!-- Sidenav Top -->
  <nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
      <div class="container py-2">
          <nav aria-label="breadcrumb">
              <div class="d-flex align-items-center">
                  <span class="px-3 font-weight-bold text-lg text-white me-4">User Dashboard</span>
              </div>
          </nav>
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                  <a href="../pages/dashboard.html" class="nav-link text-white p-0">
                      Profile
                  </a>
              </li>
              <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                  <a href="../pages/tables.html" class="nav-link text-white p-0">
                      Certificate
                  </a>
              </li>
              {{-- <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
          <a href="../pages/wallet.html" class="nav-link text-white p-0">
            Wallet
          </a>
        </li>
        <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
          <a href="../pages/rtl.html" class="nav-link text-white p-0">
            RTL
          </a>
        </li> --}}
          </ul>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <ul class="navbar-nav ms-md-auto  justify-content-end">
                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                      <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                          <div class="sidenav-toggler-inner">
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                              <i class="sidenav-toggler-line bg-white"></i>
                          </div>
                      </a>
                  </li>
                  <li class="nav-item px-3 d-flex align-items-center">
                      <a href="javascript:;" class="nav-link text-white p-0">
                          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                              class="fixed-plugin-button-nav cursor-pointer" viewBox="0 0 24 24" fill="currentColor">
                              <path fill-rule="evenodd"
                                  d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                  clip-rule="evenodd"></path>
                          </svg>
                      </a>
                  </li>
                  <li class="nav-item dropdown pe-2 d-flex align-items-center">
                      <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="avatar avatar-sm position-relative">
                              @if (Auth::guard('user')->user()->user_image != null)
                                  <img src="{{ asset('storage/user-image/' . Auth::guard('user')->user()->user_image) }}"
                                      alt="profile_image" class="w-100 border-radius-md">
                              @else
                                  <img src="{{ asset('assets/img/team-2.jpg') }}" alt="profile_image" class="w-100 border-radius-md">
                              @endif
                              {{-- <img src="../assets/img/team-2.jpg" alt="profile_image" class="w-100 border-radius-md"> --}}
                          </div>

                      </a>
                      <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                          aria-labelledby="dropdownMenuButton">
                          <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="{{url('user/logout')}}">
                                  <div class="d-flex py-1">
                                      <div class="my-auto">
                                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                              alt="user image">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="text-sm font-weight-normal mb-1">
                                              <span class="font-weight-bold">{{Auth::guard('user')->user()->name}}</span>
                                          </h6>
                                          <p class="text-xs text-secondary mb-0">
                                              <i class="fa fa-clock me-1"></i>
                                              Log Out
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          {{-- <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                  <div class="d-flex py-1">
                                      <div class="my-auto">
                                          <img src="../assets/img/small-logos/logo-spotify.svg"
                                              class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="text-sm font-weight-normal mb-1">
                                              <span class="font-weight-bold">New album</span> by Travis Scott
                                          </h6>
                                          <p class="text-xs text-secondary mb-0">
                                              <i class="fa fa-clock me-1"></i>
                                              1 day
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                  <div class="d-flex py-1">
                                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                              xmlns="http://www.w3.org/2000/svg"
                                              xmlns:xlink="http://www.w3.org/1999/xlink">
                                              <title>credit-card</title>
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                      fill-rule="nonzero">
                                                      <g transform="translate(1716.000000, 291.000000)">
                                                          <g transform="translate(453.000000, 454.000000)">
                                                              <path class="color-background"
                                                                  d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                  opacity="0.593633743"></path>
                                                              <path class="color-background"
                                                                  d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                              </path>
                                                          </g>
                                                      </g>
                                                  </g>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                          <h6 class="text-sm font-weight-normal mb-1">
                                              Payment successfully completed
                                          </h6>
                                          <p class="text-xs text-secondary mb-0">
                                              <i class="fa fa-clock me-1"></i>
                                              2 days
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </li> --}}
                      </ul>
                  </li>
                  {{-- <li class="nav-item d-flex align-items-center ps-2">
                      <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                  <li class="nav-item dropdown pe-2 d-flex align-items-center">
                      <div class="avatar avatar-sm position-relative">
                          <img src="../assets/img/team-2.jpg" alt="profile_image" class="w-100 border-radius-md">
                      </div>
                  </li>
                  </a>
                  </li> --}}
              </ul>
          </div>
      </div>
      <hr class="horizontal w-100 my-0 dark">
      {{-- <div class="container pb-3 pt-3">
      <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item border-radius-sm px-3 py-3 me-2 bg-slate-800 d-flex align-items-center">
          <a href="../pages/profile.html" class="nav-link text-white p-0">
            Profile
          </a>
        </li>
        <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
          <a href="../pages/sign-in.html" class="nav-link text-white p-0">
            Sign In
          </a>
        </li>
        <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
          <a href="../pages/sign-up.html" class="nav-link text-white p-0">
            Sign Up
          </a>
        </li>
      </ul>
      <div class="ms-md-auto p-0 d-flex align-items-center w-sm-20">
        <div class="input-group border-dark">
          <span class="input-group-text border-dark bg-dark text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </span>
          <input type="text" class="form-control border-dark bg-dark" placeholder="Search" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
      </div>
    </div> --}}
  </nav>
  <!-- End Sidenav Top -->
