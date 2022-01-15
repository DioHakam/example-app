<nav class="navbar navbar-expand-md navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">Coba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($page=='home')? 'active':'' }}"  aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($page=='post')? 'active':'' }}" href="/post">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($page=='category')? 'active':'' }}" href="/category">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
