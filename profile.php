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
    <!-- Bootstraps,Fonts,styles -->
    
    <?php 
    include('./includes/links.php')
    ?>

</head>
<body>
  <!-- Navbar -->
<div class="container-fluid p-0">
       <?php include('./includes/header.php') ?>
       <?php  
       cart();
       ?>






<!-- Footer -->
<?php 
include ('./includes/footer.php');
?> 
<!-- bootstrap js -->
<?php include('./includes/bootstrapsjs.php') ?>
</body>
</html>