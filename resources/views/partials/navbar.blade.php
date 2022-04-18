  <!-- Navbar -->

  
  <nav class="navbar navbar-expand-lg blur border-radius-xl  shadow nav-rounded    fixed-bottom">

    <div class="container-fluid ps-2 pe-0">

      @auth
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/dashboard">
        <button type="submit" class="  btn btn-light bg-transparent nav-link" ><i class="material-icons  text-danger">home</i> HOME</button>
     
       </a>
       <form action="/logout" method="post">
        @csrf
        <button type="submit" class="  btn btn-light bg-transparent nav-link" ><i class="material-icons  text-danger">settings_power</i> Logout</button>
       </form>
      
        @else
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/login">
          LOGIN / REGISTER
         </a>
      @endauth
      
    
     
    </div>
  </nav>