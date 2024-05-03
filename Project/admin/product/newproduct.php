<?php 
  session_start();

    if (!isset($_SESSION['ffname'])){
      header("Location: /shopping-cart-oche/Project/admin/logout/logout.php");
    }
    $firtname = $_SESSION['ffname'];
    $lastname = $_SESSION['llname'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="autor" autor="Dexter Jamero">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="newproduct.css">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/login/logo.css">
        <title>New Product</title>
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
           
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="/shopping-cart-oche/Project/Image/logo.png" height="30" width="60"> </a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" style="margin-left: -30px ; position: relative; font-weight: bold; font-size: 18px;">Ecommerce</a>
                  </li>
                </ul>
                <form class="d-flex" role="search" style="margin-right: 15px;" >
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/shopping-cart-oche/Project/Image/logo.png" id="srcimage" height="25" style="border-radius: 50%;">
                     <!--Name of the user-->
                     <label id="firstname"></label> <label id="lastname"></label>
                    </button>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/my_account/myacct.php">My Account</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </div>
              
                </form>
              </div>
            </div>
          </nav>
          <!--this is html of new-->
          <div class="container text-center" style="border: 1px ; max-width: 100%; padding: 0px;">
                     <div class="row">
                        <div class="col-md-auto" id="wid" style="">
                          <ul class="nav flex-column">
                            <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                     
                        </h4>
                        <hr style="color: white;">
                        
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Projet/admin/dashboard/dashboard.php"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
                          </li>
                          <li class="nav-item">                  
                            <!--This is product accordotion-->
                            <button class="accordion nav-link" style="color: white;">  <i class="fa-solid fa-users "style="margin-right:10px;" ></i> Manage user</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/Manage_user/manage_user.php">List user</a></li>
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/Manage_user/archieve_user.php">Archive user</a></li>
                              </ul>
                              </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Order/order.php">  <i class="fas fa-shopping-bag" style="margin-right:10px;"></i>
                              Orders
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php">  <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Sales_report/sale_report.php"><img width="" height="25" src="https://img.icons8.com/windows/32/FFFFFF/total-sales--v1.png" alt="total-sales--v1"/>
                              Sales Report
                              
                          </a>
                          </li> 
                          <li class="nav-item">                  
                            <!--This is product accordotion-->
                            <button class="accordion nav-link" style="color: white;">  <i class="fa-solid fa-box-open" style="margin-right:10px;"></i> Product</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/product/product.php">List product</a></li>
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/product/archive.php">Archive product</a></li>
                              </ul>
                              </div>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/logout/logout.php"><i class="fa-solid fa-right-from-bracket"style="margin-right:10px;" ></i>Logout</a>
                        </li>
                        </ul>
                        </div>
                          <!--Off Canvas-->
                    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" style="padding:10px 20px 10px 20px; " aria-labelledby="offcanvasDarkNavbarLabel">
                        <ul class="nav flex-column">
                            <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                            <div class="container-fluid">
                            <a class="navba-brand"  href="#" style="text-decoration: none;">
                              <img src="/Project/Image/logo.png" alt="Lo" width="30" height="24">
                              <!-- <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">--> 
                              </a>
                          <a class="navba-brand color" style="text-decoration: none;" href="#">Ecommerce</a>
          
                          </div>
                        </h4>
                        <hr style="color: white;">
                        
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="#"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
                          </li>
                          <li class="nav-item">                  
                            <!--This is product accordotion-->
                            <button class="accordion nav-link" style="color: white;">  <i class="fa-solid fa-users "style="margin-right:10px;" ></i> Manage user</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/Manage_user/manage_user.php">List user</a></li>
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/Manage_user/archieve_user.php">Archive user</a></li>
                              </ul>
                              </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Order/order.php">  <i class="fas fa-shopping-bag" style="margin-right:10px;"></i>
                              Orders
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php">  <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Sales_report/sale_report.php"><i class="fa-solid fa-chart-line"></i>
                              Sales Report
                          </a>
                          </li> 
                          <li class="nav-item">                  
                            <!--This is product accordotion-->
                            <button class="accordion nav-link" style="color: white;">  <i class="fa-solid fa-box-open" style="margin-right:10px;"></i> Product</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/product/product.php">List product</a></li>
                                <li><a class="dropdown-item" href="/shopping-cart-oche/Project/admin/product/archive.php">Archive product</a></li>
                              </ul>
                              </div>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/logout/logout.php"><i class="fa-solid fa-right-from-bracket"style="margin-right:10px;" ></i>Logout</a>
                        </li>
                        </ul> 
                    </div>        
                    <!--this is second grid of data display-->
                        <div class="col-md text-start" id="grid_size" style=" background-color: rgba(241, 240, 236, 0.966);">
                        
                         <!--Modal section successfull submit-->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="text-align: center; justify-content:center; align-items:center;">
                          <div class="modal-dialog" >
                              <div class="modal-content">
                              <div class="modal-body">
                              <button type="button" class="btn-close" style="margin-left: 430px;" data-bs-dismiss="modal" aria-label="Close"></button>
                              <div class="check-container" style="margin-left:180px;">
                                  <div class="check-background">
                                      <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>

                                  </div>
                                      </div>
                                  <div class="check-shadow"></div> 
                              </div>
                              <h3>Successfull Upload!</h3>
                              <div >
                                  <br>
                              <button type="button" class="btn btn-secondary" id="ok" style="margin-bottom: 20px;" data-bs-dismiss="modal">OK</button>
                              </div>
                              </div>
                          </div>
                          </div>
                          <!--end Modal section successfull submit-->


                          <?php 
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "ecommerce";

                              $con = new mysqli($servername, $username, $password, $dbname);

                              if ($con->connect_error){
                                  die ("Connection Error:" . $con->connect_error);
                              }
                              // once we click submit button will be submit on the database
                              if (isset($_POST['submit'])){
                                  if ($_FILES["image"]["error"] === 4){
                                      echo '<script>alert("Image does not exist");</script>';
                                  } else {
                                     // Prevent SQL injection attacks
                                      $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
                                      $price = mysqli_real_escape_string($con, $_POST['price']);
                                      $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
                                      $category = mysqli_real_escape_string($con, $_POST['category']);

                                      $filename = $_FILES["image"]["name"];
                                      $filesize = $_FILES["image"]["size"];
                                      $tmpname = $_FILES["image"]["tmp_name"];

                                      $validExtension = ['jpg', 'jpeg', 'png'];
                                      $imageExtension = explode('.', $filename);
                                      $imageExtension = strtolower(end($imageExtension));
                                      if (!in_array($imageExtension, $validExtension)){
                                          echo '<script>alert("Invalid image extension");</script>';
                                      } else if ($filesize > 9000000){
                                          echo '<script>alert("Image size exceeds 9MB");</script>';
                                      } else {
                                          $newImagename = uniqid();
                                          $newImagename .= '.'.$imageExtension;

                                          move_uploaded_file($tmpname, 'product_image_list/' . $newImagename);
                                        // Prepare and bind statement
                                          $stmt = $con->prepare("INSERT INTO product_list (Product_name, Quantity, Price, Category, Image) VALUES (?, ?, ?, ?, ? )");
                                          // Use 's' for string data type
                                          $stmt->bind_param('sssss', $product_name, $quantity, $price, $category, $newImagename);
                                          if ($stmt->execute()) {
                                            echo '<script>
                                                      document.addEventListener("DOMContentLoaded", function (){
                                                          var mymoda1 = new bootstrap.Modal(document.getElementById("exampleModal"));
                                                          mymoda1.show();
                                                      });
                                                  </script>';
                                        } 
                                  }
                              }
                    
                            }
                            // Close connection
                            $con->close();
                          ?>
                        <label class=" " style="font-weight: bold; font-size: 20px; margin-top: 10px;">Product</label>
                          
                         <br>
                         <div class="row" id="roww" style="">
                         <form class="row" action="#" method="POST" enctype="multipart/form-data">
                              <div class="col-md-3">
                                  <label for="validationDefault01" class="form-label">Product name</label>
                                  <input type="text" class="form-control" id="validationDefault01" name="product_name" required>
                              </div>
                              <div class="col-md-3">
                                  <label for="validationDefault02" class="form-label">Price</label>
                                  <input type="number" class="form-control" id="validationDefault02" name="price" value="1" required min="1">
                              </div>
                              <div class="col-md-3">
                                  <label for="validationDefaultUsername" class="form-label">Quantity</label>
                                  <div class="input-group">
                                      <input type="number" class="form-control" id="validationDefaultUsername" name="quantity" aria-describedby="inputGroupPrepend2" value="1" required min="1">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <label for="validationDefault02" class="form-label">Category</label>
                                  <select class="form-select" aria-label="Default select example" name="category" required>
                                      <option hidden>Choose...</option>
                                      <option value="Gaming Accessories">Gaming Accessories</option>
                                      <option value="Musical Instrument">Musical Instrument</option>
                                      <option value="Kitchen Tools">Kitchen Tools</option>
                                      <option value="Women's Fassion & Accessories">Womens Fassion & Accessories</option>
                                      <option value="Computer Accessories">Computer Accessories</option>
                                      <option value="Automotive & Motorcyle Parts">Automotive & Motorcyle Parts</option>
                                      <option value="Electronic Accessories">Electronic Accessories</option>
                                      <option value="Health &  Beauty">Health & Beauty</option>
                                      <option value="Men's Fassion & Accessories">Mens Fassion & Accessories</option>
                                </select>
                              </div>
                              <div class="col-md-12" style="margin-top: -80px;">
                                  <img src="/shopping-cart-oche/Project/Image/default-image.jpg" id="imagePreview" class="" alt="Default Image" height="250px" width="250px">
                                  <input type="file" class="form-control" aria-label="file example" id="imageInput" name="image" required  accept="image/png, image/jpeg, image/jpg">
                                  <div class="invalid-feedback">Please select an image.</div>
                              </div>
                              <div class="col-12" style="margin-top: -15vh;">
                                  <button class="btn btn-primary" type="submit" name="submit">Upload</button>
                              </div>
                          </form>
                        </div>              
                      </div>
                </div>
            </div>
               <!--JQuerry library-->
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               
               <script>
                // this when click choose file the picture will show on web
                $(document).ready(function(){
                // listen for changes in the file input
                    $('#imageInput').on('change', function (){
                        var input = this;
                        if (input.files && input.files[0]){
                            var reader = new FileReader();
                            reader.onload = function (e){
                                // set the source of the image element to the upload image
                                $('#imagePreview').attr('src', e.target.result);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    });
                });
                $(document).ready(function () {
                  let srcimage =document.querySelector('#srcimage');
                        let firstname = document.querySelector("#firstname");
                        let lastname = document.querySelector('#lastname');

                        let xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                          if (this.readyState === 4 && this.status === 200) {
                            let data = JSON.parse(this.responseText);

                            // Assuming data is an array of objects
                            data.forEach(info => {
                              console.log (info.First_name)
                              lastname.innerHTML = info.Last_name;
                              firstname.innerHTML = info.First_name;
                              srcimage.src = `/shopping-cart-oche/Project/admin/my_account/admin_image/${info.Image}`;
                            });
                          }
                        };
                        xhr.open("GET", "/shopping-cart-oche/Project/admin/my_account/admin_fetch_info.php", true);
                        xhr.send();
                })
               </script>
        <script src="newproduct.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                       
        <!--This is for fontawesome icon-->
        <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
        <!--This is bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    </body>
</html>