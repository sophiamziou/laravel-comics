<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-2 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="{{ Vite::asset('resources/img/images/dc-logo.png') }}" alt="LOGO">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-dark">CHARACTERS</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">MOVIES</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">TV</a></li>
        <li><a href="{{ route('comics') }}" class="nav-link px-2 link-dark">COMICS</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">GAMES</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">COLLECTIBLES</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">VIDEOS</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FANS</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">NEWS</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">SHOP</a></li>
      </ul>

      <div class="col-md-2 text-end">
        <form class="col col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
      </div>
    </header>
  </div>