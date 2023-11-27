<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <link rel="icon" type="image/png" href="../img/head-logo.png">
    <!-- Bootstraps CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/brand-logo.png" class="logo" alt="">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 p-1  bg-secondary  d-flex align-items-center">
                <div>
                    <a href="#"><img src="https://picsum.photos/id/237/200/300" class="admin_image" alt=""></a>
                    <p class="text-light text-center">
                        Admin name
                    </p>
                </div>
                <!-- button*10>a.nav-link.text-light -->
                <div class="button text-center mx-auto">
                    <a href="insert_product.php" class="btn btn-primary m-1">Insert Products</a>
                    <a href="" class="btn btn-primary m-1">View Products</a>
                    <a href="index.php?insert_categories" class="btn btn-primary m-1">Insert Categories</a>
                    <a href="" class="btn btn-primary m-1">View Categories</a>
                    <a href="" class="btn btn-primary m-1">All Orders</a>
                    <a href="" class="btn btn-primary m-1">All Payments</a>
                    <a href="" class="btn btn-primary m-1">List Users</a>
                    <a href="" class="btn btn-primary m-1">Logout</a>

                </div>
            </div>
        </div>
        <!-- Fourth Child -->
        <div class="container my-2">
            <!-- For Insert -->
            <?php
                if(isset($_GET['insert_categories'])){
                    include('insert_categories.php');
                }
            ?>
        </div>
        <!-- Footer -->
        <footer class="bg-info text-center w-100 admin-footer">
            <p class="my-3">Welcome Admin</p>
        </footer>
    </div>


    <!-- Bootstraps Js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>