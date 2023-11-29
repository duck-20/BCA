<!-- Connection -->
<?php
include ('./includes/connect.php');
include('./functions/common_function.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR Store</title>
    <link rel="icon" type="image" href="./img/head-logo.png">

    <!-- Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
<div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./img/brand-logo.png" class="logo" alt="brand-logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <!-- dropdown -->
        <li class="nav-item dropdown">
        <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
      </ul>
      <ul class="navbar-nav">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login/Logout</a>
        </li>
    </div>
  </div>
</nav>
<!-- second child search bar -->
<div class="container w-50 mb-3 mt-3">
<form class="d-flex position-relative py-2" role="search">
        <input class="form-control  me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
</div>
<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Items and Accessories</h3>
    <p class="text-center">Get Your Anime merch and accessories.</p>
</div>

<!-- Fourth Child -->
<div class="row px-1 m-2">
  <!-- Products -->
<div class="col-md-12">
      <div class="row">
            <!-- fetching items -->
            <?php 
                getProducts();
            ?>
      <!-- row end -->
  </div>
  <!-- col end -->
</div>
<!-- last child -->
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <footer class="bg-info text-center w-100 p-0 m-0 admin-footer">
            <p class="my-3">AR Store</p>
        </footer>

<!-- End of .container -->



    </div>
    
<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>