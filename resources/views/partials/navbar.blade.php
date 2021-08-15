<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Halaman Utama") ? 'active': '' }}" href="/">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Halaman About") ? 'active': '' }}" href="/about">Halaman About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Blog") ? 'active': '' }}" href="/posts">Blog</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
