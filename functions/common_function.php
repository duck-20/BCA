<?php 
//including database
include("./includes/connect.php");
//getting categories
function getCategories(){
    global $con;
    $select_category="select * from `categories`";
            $result_category=mysqli_query($con,$select_category);
            while($row_data=mysqli_fetch_assoc($result_category)){
              $category_title=$row_data['category_title'];
              $category_id=$row_data['category_id'];
              echo "
              
              <a href='index.php?categories=$category_id' class='dropdown-item text-capitalize'>$category_title</a>
              
              ";
              
            }
}
//getting Products

function getProducts(){
    global $con;
    //condition to check isset or not:
            if(!isset($_GET['categories'])){

            $select_query="select * from `products` order by rand()";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_name=$row['product_name'];
                $product_description=$row['product_description'];
                $product_keywords=$row['product_keywords'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                echo " <div class='col-md-4 mb-3'>
                
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top p-2' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add To Cart</a>
                                        <a href='#' class='btn btn-secondary'>View More</a>
                                        
                                </div>
                            </div>
                            </div>";
                }
        }
}
//getting a single categories
function getUniqueCategories(){
    global $con;
    //condition to check isset or not:
            if(isset($_GET['categories'])){
            $category_id=$_GET['categories'];
            $select_query="select * from `products` where category_id=$category_id";
            $result_query=mysqli_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows===0){
                echo " <h2 class='text-center text-danger'>No Stock For This Category</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_name=$row['product_name'];
                $product_description=$row['product_description'];
                $product_keywords=$row['product_keywords'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                echo " <div class='col-md-4 mb-3'>
                
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top p-2' alt='$product_name'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add To Cart</a>
                                        <a href='#' class='btn btn-secondary'>View More</a>
                                        
                                </div>
                            </div>
                            </div>";
                }
        }
}
?>