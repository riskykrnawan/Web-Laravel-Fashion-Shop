<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <div id="logo bg-white">
      <a class="navbar-brand text-upper brand" href="/">NIKKY<span class="text-danger">.</span></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wanita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Beauty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Luxury</a>
        </li>
        <li class="nav-item my-auto me-3">
          <div class="dropdown">
            <a class="nav-link text-secondary bg-transparent text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Another </a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <form class="d-inline w-100 ms-3 me-3" role="search">
        <input class="form-control w-100" type="search" placeholder="Search something..." aria-label="Search">
      </form>
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        @if ( !Auth::user() )
          <li class="nav-item">
            <button class="btn btn-link text-decoration-underline nav-link w-100" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button> 
          </li>
          @else
          <li class="nav-item text-center my-auto">
            <a class="nav-link" aria-current="page" href="/">
            <i class="bi bi-heart fs-4"></i>
            </a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="#">
              <i class="bi bi-cart3 fs-4"></i>
            </a>
          </li>
          <li class="nav-item text-center me-3">
            <a class="nav-link" href="#">
              <i class="bi bi-truck fs-4"></i>
            </a>
          </li>
          <li class="nav-item my-auto">
            <div class="dropdown fs-5">
              <a class="text-secondary bg-transparent text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4"></i>
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item">Hi, {{ Auth::user()->name }} </a></li>
                <li><a class="dropdown-item" href="#"> <i class="bi bi-person-circle me-2"></i> Profil</a></li>
                <li><a class="dropdown-item" href="#"> <i class="bi bi-gear me-2"></i> Setting</a></li>
                <li><a class="dropdown-item" href="/auth/logout"> <i class="bi bi-box-arrow-left me-2"></i> Logout</a></li>
              </ul>
            </div>
          </li>
          @endif  
      </ul>
    </div>
  </div>
</nav>


@include('components.login_modal')
@include('components.register_modal')