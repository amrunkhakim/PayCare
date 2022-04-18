<nav class="navbar navbar-light  nav-rounded navbar-expand border-radius-xl shadow position-absolute fixed-top  start-0 end-0 ">
    <div class="container-fluid ps-2 mb-5 pe-0">
    
      </div>
    </div>
  </nav>
{{-- NavButton --}}
  <nav class="navbar navbar-light nav-rounded navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a href="/dashboard" class="  nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
          <i class="material-icons  nav-link-text ms-4">dashboard_customize</i></a>
      </li>
    
      <li class="nav-item">
        <a href="/dashboard/transaksi" class="  {{ Request::is('dashboard/transaksi') ? 'active' : '' }} nav-link">
          <i class="   material-icons  nav-link-text ms-7">rules</i>
        </a>
       
      </li>
      <li class="nav-item">
        <a href="/profile" class=" {{ Request::is('profile') ? 'active' : '' }} nav-link">
          <i class="material-icons  nav-link-text ms-5">account_circle</i>
        </a>
      </li>
 
    </ul>
  </nav>