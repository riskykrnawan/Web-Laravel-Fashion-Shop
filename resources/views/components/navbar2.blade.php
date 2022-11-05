<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <div id="logo">
      <a class="navbar-brand text-upper brand" href="#">
          {{ $title }}<span class="text-danger">.</span>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        <li class="nav-item">
          <a class="nav-link" href="#">Anak</a>
        </li>
      </ul>
      <form class="d-inline w-100 ms-5 me-5" role="search">
        <input class="form-control me-2 w" type="search" placeholder="Search" aria-label="Search">
      </form>
      <ul class="navbar-nav d-flex my-2 my-lg-0 navbar-nav-scroll navbar-icon-list" style="--bs-scroll-height: 300px;">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-bag-fill fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-bookmark-heart-fill fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-person-fill fs-4"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@include('components.login_modal')
@include('components.register_modal')