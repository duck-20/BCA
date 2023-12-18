<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Registration</title>
    <link rel="icon" type="image" href="../img/head-logo.png">
    <!-- Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center my-3">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-outline fs-5">
                    <!-- Username -->
                        <label for="user_username" class="form-label">
                            Username:
                        </label>
                        <input type="text" class="form-control  mb-2" name="user_username" id="user_username" autocomplete="off" placeholder="Enter your username" required autofocus>
                        <!-- Email -->
                        <label for="user_email" class="form-label">
                            Email:
                        </label>
                        <input type="text" class="form-control mb-2" name="user_email" id="user_email" autocomplete="off" placeholder="Enter your email" required>
                        <!-- Image -->
                        <label for="user_image" class="form-label">
                            User Image:
                        </label>
                        <input type="file" class="form-control mb-2" name="user_image" id="user_image" required >
                        <!-- Password -->
                        <label for="user_password" class="form-label">
                            Password:
                        </label>
                        <input type="password" class="form-control mb-2" name="user_password" id="user_password" autocomplete="off" placeholder="Enter your password" required>
                        <!-- Confirm Password -->
                        <label for="conf_user_password" class="form-label">
                           Confirm Password:
                        </label>
                        <input type="password" class="form-control mb-2" name="conf_user_password" id="conf_user_password" autocomplete="off" placeholder="Confirm your password" required>
                        <!-- Address -->
                        <label for="user_address" class="form-label">
                            Address:
                        </label>
                        <input type="text" class="form-control mb-2" name="user_address" id="user_address" autocomplete="off" placeholder="Enter your address" required>
                        <!-- Contact Field -->
                        <label for="user_contact" class="form-label">
                            Contact:
                        </label>
                        <input type="password" class="form-control mb-2" name="user_contact" id="user_contact" autocomplete="off" placeholder="Enter your Mobile Number" required>
                        <div class="mt-3 pt-1">
                            <input type="submit" value="Register" class="bg-primary py-2 px-3 border-0 rounded text-white" name="user_register">
                            <p class="mt-3 fw-bold small">Already have an account?  <a href="user_login.php" class="text-primary text-decoration-none">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>