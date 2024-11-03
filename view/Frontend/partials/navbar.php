
    

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" class="bgnav">
  <!-- Container wrapper -->
  <div class="container-fluid underborder ">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="<?= $images?>/logo.jpeg"
          alt="Site Logo"
          loading="lazy"
          class="logo"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= $docroot?>.'/index.php'">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Choosen List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $backend.'/createad.php'?>">Create an Ad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $backend.'/login.php'?>">Login/Signup</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      
        <form class="d-flex input-group w-auto">
        <input
            type="search"
            class="form-control rounded"
            placeholder="Search"
            aria-label="Search"
            aria-describedby="search-addon"
        />
        <span class="input-group-text border-0" id="search-addon" class="mr-1">
            <img src="<?= $images?>/search.png" alt="search-icon" class="icon">
        </span>
        </form>
      <!-- Avatar -->
      <div class="dropdown">
        
          <img
            src="<?= $images?>/placeholderhuman.png"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
