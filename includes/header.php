<nav class="navbar navbar-expand-lg bg-info fixed-top">
  <div class="container-fluid">
    <img src="./img/brand-logo.png" class="logo" alt="brand-logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="products.php">Products</a>
        </li>
        <!-- dropdown -->
        <li class="nav-item dropdown">
        <div class="dropdown show">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        categories
        </a>
        <!-- items to display in meny -->
        <div class='dropdown-menu' aria-labelledby='navbarDropMenuLink'>
        <?php
            getCategories();
           
          ?>
          </div>
  
</div>
</li>
      <!-- dropdown  -->
      <li class="nav-item">
          <a class="nav-link " href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
<form class="d-flex position-relative w-100" role="search" action="search_product.php" method="get">
        <input class="form-control fs-5 me-3" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input class="btn btn-outline-dark fs-5" type="submit" value="search" name="search_data_product">
      </form>
</li>
      </ul>
      <ul class="navbar-nav fs-5">
    <li class="nav-item">
          <a class="nav-link " href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Login/Logout</a>
        </li>
    </div>
  </div>
</nav>