<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
        @else
          <!-- Authenticated User Links -->
          <li class="nav-item">
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="nav-link">Admin Dashboard</a>
            @else
                <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
            @endif
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="nav-link" 
                 onclick="event.preventDefault(); this.closest('form').submit();">
                Logout
              </a>
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<header class="py-5 text-center bg-light">
  <div class="container">
    <h1 class="display-4">Welcome to My Blog</h1>
    <p class="lead">Insights, tutorials, and stories from the tech world.</p>
  </div>
</header>

<!-- Blog Posts Preview -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Latest Posts</h2>
    <div class="row g-4">
      <!-- Example Post 1 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Post 1">
          <div class="card-body">
            <h5 class="card-title">Post Title One</h5>
            <p class="card-text">A short preview of your blog content goes here.</p>
          </div>
        </div>
      </div>
      <!-- Example Post 2 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Post 2">
          <div class="card-body">
            <h5 class="card-title">Post Title Two</h5>
            <p class="card-text">Give readers a quick glimpse of your article here.</p>
          </div>
        </div>
      </div>
      <!-- Example Post 3 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Post 3">
          <div class="card-body">
            <h5 class="card-title">Post Title Three</h5>
            <p class="card-text">Introduce your blog post to catch interest.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
  <div class="container">
    <p class="mb-0">© 2025 MyBlog. All rights reserved.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>