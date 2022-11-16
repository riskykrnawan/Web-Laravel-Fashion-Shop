<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div id="logo bg-dark">
      <a class="navbar-brand text-upper brand text-white" href="/">NIKKY<span class="text-danger">.</span></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/women">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/men">Men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/children">Children</a>
        </li>
        <li class="nav-item my-auto me-3">
          <div class="dropdown">
            <a class="nav-link bg-transparent text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Other
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/products/accessories">Accessories</a></li>
              <li><a class="dropdown-item" href="/products/shoes">Shoes</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <form class="d-inline w-100 ms-3 me-3" role="search">
        <input class="form-control w-100 rounded-0" type="search" placeholder="Search something..." aria-label="Search">
      </form>
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        @if ( !Auth::user() )
          <li class="nav-item">
            <button class="btn btn-link text-decoration-underline nav-link w-100" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button> 
          </li>
          @else
          <li class="nav-item me-2 text-center my-auto">
            <a class="nav-link" aria-current="page" href="/wishlist">
            <i class="bi bi-heart fs-5"></i><span>Wishlist</span>
            </a>
          </li>
          <li class="nav-item me-2 text-center">
            <a class="nav-link" href="/cart">
              <i class="bi bi-cart3 fs-5"></i><span>Cart</span>
            </a>
          </li>
          <li class="nav-item me-2 text-center me-3">
            <a class="nav-link" href="/orders">
              <i class="bi bi-truck fs-5"></i><span>Orders</span>
            </a>
          </li>
          <li class="nav-item my-auto">
            <div class="dropdown fs-5">
              <a class="text-secondary bg-transparent text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ Auth::user()->photo }}" width="35px" class="rounded-circle img-thumbnail" alt="">
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item">Hi, {{ Auth::user()->name }} </a></li>
                <li><a class="dropdown-item" href="/profile"> <i class="bi bi-person-circle me-2"></i> Profil</a></li>
                <li><a class="dropdown-item" href="/setting"> <i class="bi bi-gear me-2"></i> Setting</a></li>
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