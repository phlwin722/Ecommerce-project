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
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php"> <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
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
                          <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><i class="fa-solid fa-right-from-bracket"style="margin-right:10px;" ></i>Logout</a>
                        </li>
                        </ul> 
                    </div> 
                           
                        <!--table of content-->
                        <div class="col text-start table_content"  style=" background-color: rgba(236, 236, 236, 0.966); padding:0px 10px 0px 10px;">
                          <label class="text-start " style="font-weight: bold; font-size: 20px; margin-top: 10px;">Deleted Product</label>
                          <br>
                          <br>
                          <form class="row gx-3 gy-2 d-flex" id="searchForm" style="height:45px;">
                            <div class="col-sm-3">
                              <label class="visually-hidden" for="specificSizeInputName">Category</label>

                             <!-- Select element for category -->
                             <select class="form-select" id="producttCategory" onchange="showProduct(this.value)" style="width: 250px;" aria-label="Default select example">
                               <option value="allproducts">All</option>
                                  <?php 
                                      $servername = "localhost";
                                      $username = "root";
                                      $password = "";
                                      $dbname = "ecommerce";

                                      $con = new mysqli ($servername,$username,$password,$dbname);
                                      if ($con->connect_error){
                                        die("Connection error" .$con->connect_error);
                                      }else {
                                        $sql = "SELECT DISTINCT Category FROM product_list"; // Use DISTINCT to get unique categories
                                        $result = $con->query($sql);

                                        if ($result->num_rows > 0){
                                          while ($row = $result->fetch_assoc()){
                                  ?>
                                          <option value="<?php echo $row['Category']?>"><?php echo $row['Category']?></option>           
                                  <?php 
                                            }
                                        }
                                      } 
                                      $con->close();
                                  ?>
                            </select>

                            </div>
                            <div class="col-sm-7 d-flex">
                              <input class="form-control me-2 search_input" style="width: 400px;"  id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                              <button class="btn btn-success" style="margin-left:-10px;" type="submit" id="submitSearch" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="newbuttin text-right" style=" width:160px; padding-right:0px; padding-left:80px">
                          </div>
                          </form>

                         <!--this is the list of table product-->
                         <div class="dispaly_Table" style="margin-top:10px; right:-4px">
                           <table class="table table-hover " id="archieveTable">
                               <thead>
                                   <tr>
                                       <th scope="col" class="">Code</th>
                                       <th scope="col" class="">Product name</th>
                                       <th scope="col" class="">Price</th>
                                       <th scope="col" class="">Quantity</th>
                                       <th scope="col" class="">Image</th>
                                       <th scope="col" class="">Category</th>
                                       <th scope="col" class="text-center">Action</th>
                                   </tr>
                               </thead>
                               <tbody >
                                   <!-- Table data will be populated here -->
                               </tbody>
                           </table>
                           </div>
                        <!--end this is the list of table product-->
                        </div>
                </div>
            </div>
                <!--JQuerry library-->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!--Costum JavaScript-->
            <script>
              // search prduct
              document.querySelector('#submitSearch').addEventListener('click', function() {
                event.preventDefault(); // Prevent default form submission or prevent refresh when click button
                    // Get the input of user
                    let searchQuery = document.querySelector('#searchQuery').value;
                    console.log(searchQuery);
                    if (searchQuery !== "") {
                        searchResult(searchQuery);
                    } else {
                        fetchData();
                        searchQuery.innerHTML="";
                    }
                });

                function searchResult(searchQuery) {
                    let xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            let data = JSON.parse(this.responseText);
                            searchResullt(data); // Corrected function name
                        }
                    };
                    xhr.open("GET", "search_archieve_product.php?searchQuery=" + searchQuery, true); // Corrected file name
                    xhr.send();
                }

                function searchResullt(data) { // Corrected function name
                    const tableBody = document.querySelector('#archieveTable tbody');
                    let searchQuery = document.querySelector('#searchQuery');
                    tableBody.innerHTML = "";
                    if (data.length === 0) {
                      searchQuery.innerHTML="";
                        fetchData();
                        searchQuery.innerHTML="";
                    } else {
                        
                        data.forEach(product => {
                            const row = `<tr>
                                              <td>${product.Product_code}</td>
                                              <td>${product.Product_name}</td>
                                              <td>${product.Price}</td>
                                              <td>${product.Quantity}</td>
                                              <td><img src="product_image_list/${product.Image}" width="100" height="100" title="${product.Product_name}"></td>
                                              <td>${product.Category}</td>
                                              <td class="text-center"> 
                                                  <a href="#" onclick="restoreSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash-can-arrow-up" style="color: #29a805; font-size:25px;"></i></a>
                                              </td>
                                          </tr>`;
                            tableBody.innerHTML += row;
                            searchQuery.innerHTML="";
                        });
                    }
                }

              // end searh product

              // this is to display the product when category is select 
              function showProduct(selecterProduct){
                let xhr = new XMLHttpRequest ();
                xhr.onreadystatechange = function () {
                  if (this.readyState === 4 && this.status === 200) {
                      let data = JSON.parse(this.responseText);
                      showresult(data);
                  }
                }
                xhr.open("GET","search_selected_product.php?selectedCategory=" +selecterProduct, true);
                xhr.send();
              }

              function showresult (data){
                const tableBody = document.querySelector('#archieveTable tbody');
                tableBody.innerHTML="";
                console.log(data)
                  if (data.length === 0) {
                   fetchData ();
                  }else {
                    data.forEach(product => {
                    const row = `<tr>
                                              <td>${product.Product_code}</td>
                                              <td>${product.Product_name}</td>
                                              <td>${product.Price}</td>
                                              <td>${product.Quantity}</td>
                                              <td><img src="product_image_list/${product.Image}" width="100" height="100" title="${product.Product_name}"></td>
                                              <td>${product.Category}</td>
                                              <td class="text-center"> 
                                                  <a href="#" onclick="restoreSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash-can-arrow-up" style="color: #29a805; font-size:25px;"></i></a>
                                              </td>
                                          </tr>`;
                                tableBody.innerHTML +=row;
                  })
                  }
              }
                // Function to fetch data using ajax
                  function fetchData() {
                      let xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function() {
                          if (this.readyState === 4) {
                              if (this.status === 200) {
                                  let data = JSON.parse(this.responseText);
                                  populateTable(data);

                                  let firstname = document.querySelector("#firstname");
                                  let lastname = document.querySelector('#lastname');
                                  let srcimage =document.querySelector('#srcimage');

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
                              } else {
                                  console.error("Error fetching data: " + this.status);
                              }
                          }
                      };
                      xhr.open("GET", "archive_fetch.php", true);
                      xhr.send();
                  }

                  // Function to populate table with fetched data
                  function populateTable(data) {
                      const tableBody = document.querySelector('#archieveTable tbody');
                      tableBody.innerHTML = ""; // Clear existing table rows
                      console.log(data)
                      if (data.length === 0){
                        console.log(data)
                        tableBody.innerHTML = '<tr><td colspan="7">No results found</td></tr>';
                      }else {
                        data.forEach(product => {
                          const row = `<tr>
                                              <td>${product.Product_code}</td>
                                              <td>${product.Product_name}</td>
                                              <td>${product.Price}</td>
                                              <td>${product.Quantity}</td>
                                              <td><img src="product_image_list/${product.Image}" width="100" height="100" title="${product.Product_name}"></td>
                                              <td>${product.Category}</td>
                                              <td class="text-center"> 
                                                  <a href="#" onclick="restoreSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash-can-arrow-up" style="color: #29a805; font-size:25px;"></i></a>
                                              </td>
                                          </tr>`;
                          tableBody.innerHTML += row;
                      });
                      }
                  }

                  // Call the fetchData function when the page loads
                  window.onload = fetchData;

                            // Handler for archive specific product
                            function restoreSpecific(Product_code) {
                              Swal.fire({
                              title: "Are you sure?",
                              text: "You won't be able to revert this!",
                              icon: "warning",
                              showCancelButton: true,
                              confirmButtonColor: "#3085d6",
                              cancelButtonColor: "#d33",
                              confirmButtonText: "Yes, archieve it!"
                            }).then((result) => {
                              if (result.isConfirmed) {
                                let searchQuery =document.querySelector('#searchQuery');
                              var xmlhttp = new XMLHttpRequest();
                              xmlhttp.onreadystatechange = function() {
                                  if (this.readyState == 4 && this.status == 200) {
                                          var response = JSON.parse(this.responseText);
                                          if (response.success) {
                                              // Product deleted successfully
                                              fetchData(); // Fetch updated data after deletion
                                              searchQuery.innerHTML="";
                                              Swal.fire({
                                              title: "Restored!",
                                              text: "Product restored successfully.",
                                              icon: "success"
                                            });
                                          } else {
                                              // Error deleting product
                                              console.error("Error deleting product: " + response.message);
                                              alert("Error deleting product: " + response.message);
                                          }

                                  }
                              };
                              // Send a GET request to the PHP file with the product code as a parameter
                              xmlhttp.open("GET", "archieve_product_and_delete_archieve.php?q=" + Product_code, true);
                              xmlhttp.send();
                              }
                            });
                            
                          }


                

            
            </script>
        <!-- JavaScript dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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