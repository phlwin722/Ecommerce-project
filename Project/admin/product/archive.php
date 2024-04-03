<?php 
  session_start();

    if (!isset($_SESSION['ffname'])){
      header("Location: /shopping-cart-oche/Project/admin/logout/logout.php");
    }
    $firtname = $_SESSION['ffname'];
    $lastname = $_SESSION['llname'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Archive Product</title>
        <meta name="autor"  content="Dexter Jamero">
        <meta charset="utf-8">
        <meta name="viewport" content="width:device-width, initial-scale=1">
                 <!--This is bootstrap-->
                 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <link rel="stylesheet" href="/shopping-cart-oche/Project/admin/product/archive.css">
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
                <form class="d-flex" role="search" style="margin-right: 15px;">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" height="25" style="border-radius: 50%;">
                    <!--Name of the user-->
                    <?php echo $firtname ." ". $lastname;?>
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

          <div class="container text-center" style=" max-width: 100%; padding: 0px;">
                     <div class="row">
                        <div class="col-md-auto" id="wid">
                          <ul class="nav flex-column">
                            <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                     
                        </h4>
                        <hr style="color: white;">
                        
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/dashboard/dashboard.php"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
                          </li>
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Manage_user/manage_user.php"><i class="fa-solid fa-users "style="margin-right:10px;" ></i>Manage user</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Message/message.php">  <i class="fa-solid fa-message" style="margin-right:10px;"></i>
                              Message
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php"> <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/Project/guest_user/guest.php"><i class="fa-solid fa-chart-line"></i>
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
                            <!-- this is settings-->
                            <button class="accordion nav-link" style="color: white;" > <i class="fa-solid fa-gear" style="margin-right:10px;"></i> Setting</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/Project/admin/product.html">List product</a></li>
                                <li><a class="dropdown-item" href="#">Archive product</a></li>
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
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/dashboard/dashboard.php">
                                <img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
                          </li>
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><i class="fa-solid fa-users "style="margin-right:10px;" ></i>Manage user</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php">  <i class="fa-solid fa-message" style="margin-right:10px;"></i>
                              Message
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php">  <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><img width="" height="25" src="https://img.icons8.com/windows/32/FFFFFF/total-sales--v1.png" alt="total-sales--v1"/>
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
                            <!-- this is settings-->
                            <button class="accordion nav-link" style="color: white;" > <i class="fa-solid fa-gear" style="margin-right:10px;"></i> Setting</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="#">List product</a></li>
                                <li><a class="dropdown-item" href="#">Archive product</a></li>
                              </ul>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><i class="fa-solid fa-right-from-bracket"style="margin-right:10px;" ></i>Logout</a>
                        </li>
                        </ul> 
                    </div> 
                           
                        <!--table of content-->
                        <div class="col text-start table_content"  style=" background-color: rgba(236, 236, 236, 0.966);">
                          <label class="text-start " style="font-weight: bold; font-size: 20px; margin-top: 10px;">Deleted Product</label>
                         <!--this is the list of table product-->
                         <table class="table table-hover" id="archieveTable" style="margin-top:10px ;">
                          <thead>
                            <tr>
                              <th scope="col" class="table_code" style="width: 90px;">Code</th>
                              <th scope="col" class="table_product" style="width: 120px;">Product</th>
                              <th scope="col" class="table_img">Image</th>
                              <th scope="col" class="table_quantity">Quantity</th>
                              <th scope="col" class="table_price">Price</th>
                           <!--   <th scope="col" class="table_description">Description</th> -->
                              <th scope="col" class="table_action text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           
                          </tbody>
                        </table>
                        <!--end this is the list of table product-->
                        </div>
                </div>
            </div>
            <!--Costum JavaScript-->
            <script>
                function fetchData(){
                  let xhr = new XMLHttpRequest ();
                  xhr.onreadystatechange = function(){
                    if (this.readyState === 4 && this.status === 200){
                       let data =JSON.parse(this.responseText);
                       populateTable(data);
                    }
                  };
                  xhr.open("GET","archive_fetch.php",true);
                  xhr.send();
                }
                //function to populate table with fetched data
                function populateTable (data){
                  const tableBody = document.querySelector('#archieveTable tbody');
                  data.forEach(archieves => {
                      const row =`<tr>
                                      <td>${archieves.Product_code}</td>
                                      <td>${archieves.Product_name}</td>
                                      <td>${archieves.Image}</td>
                                      <td>${archieves.Quantity}</td>
                                      <td>${archieves.Price}</td>
                                      <td class="text-center"> 
                                          <a href="#" class="btn btn-sm edit-data"> <i class="fa-solid fa-pen-to-square" style="color: green;"></i> </a>
                                          <a href="#" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                      </td>
                                  </tr>`;  
                                  tableBody.innerHTML += row;
                  });
                }
                // call the fetchdata function when the page loads
                window.onload = fetchData;
            </script>
        <!-- JavaScript dependencies -->
          <!-- jQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <!-- Popper.js for Bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
          <!--Javascript file-->
        <script src="archive.js"></script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>

    </body>
</html>