<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LKMovie - @yield('title', 'Homepage')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">Series Movie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Watchlist Populer</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container my-2">
        @yield('content')
      </div>

      <footer class="bg-danger text-white text-center py-3">
        Copyright &copy; {{ date('Y') }} by Andre Fransisko
      </footer>
    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
