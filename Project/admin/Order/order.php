<?php 
  session_start();

    if (!isset($_SESSION['ffname'])){
      header("Location: /shopping-cart-oche/Project/admin/logout/logout.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="autor" autor="Dexter Jamero">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/admin/product/product.css">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/login/logo.css">
        <title>Order</title>
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
                              <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
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
                    <!--table of content-->
                    <div class="col text-start table_content"  style=" background-color: rgba(236, 236, 236, 0.966); padding:0px 10px 10px 10px;">
                          <label class="text-start " style="font-weight: bold; font-size: 20px; margin-top: 10px;">List order user</label>
                          <br>
                          <br>
                          <form class="row gx-3 gy-2 d-flex" id="searchForm" style="height:45px;">
                            <div class="col-sm-7 d-flex">
                              <input class="form-control me-2 search_input" style="width: 400px;"  onkeyup="search()" id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                              <button class="btn btn-success" style="margin-left:-10px;" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                          </form>
                      
                         <!--this is the list of table product-->
                         <div class="dispaly_Table" style="margin-top:10px; right:-4px">
                           <table class="table table-hover " id="productTable">
                               <thead>
                                   <tr>
                                      <th scope="col">Product name</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Price</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Deliver</th>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Contact No</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Mode of Payment</th>
                                        <th scope="col">Status</th>
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
                                      
               <!--JQuerry library-->
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               
               <script>

 // Function to fetch data using ajax
function fetchData() {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let data = JSON.parse(this.responseText);
                populateTable(data);
            } else {
                console.error("Error fetching data: " + this.status);
            }
        }
    };
    xhr.open("GET", "Order_fetch.php", true);
    xhr.send();
}

// Function to populate table with fetched data
function populateTable(data) {
    const tableBody = document.querySelector('#productTable tbody');
    tableBody.innerHTML = ""; // Clear existing table rows
    data.forEach(message => {
        const row = `<tr>
                        <td>${message.Product_name}</td>
                        <td><img src="/shopping-cart-oche/Project/admin/product/product_image_list/${message.Image}" width="100" height="100"></td>
                        <td>${message.Quantity}</td>
                        <td>${message.Price}</td>
                        <td>${message.Total_price}</td>
                        <td>
                            <select class="form-select status-select" data-product-code="${message.Product_code}" style="width:110px;" aria-label="Default select example">
                                <option hidden>Choose..</option>
                                <option value="Pending">Pending</option>
                                <option value="On the way">On the way</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </td>
                        <td>${message.Full_name}</td>
                        <td>${message.Contact_No}</td>
                        <td>${message.Address}</td>
                        <td>${message.Mode_payment}</td>
                        <td>${message.Stat}</td>
                    </tr>`;
        tableBody.innerHTML += row;
    });

    // Set select options for each select element
    const selectElements = document.querySelectorAll('.status-select');
    selectElements.forEach(select => {
        const productCode = select.dataset.productCode;
        const selectedStatus = data.find(message => message.Product_code === productCode).Status;
        const options = select.querySelectorAll('option');
        options.forEach(option => {
            if (option.value === selectedStatus) {
                option.selected = true;
            }
        });
        
 // Add event listener to each select element
 select.addEventListener('change', function() {
            const selectedStatus = select.value; // Get the newly selected status
            updateStatus(productCode, selectedStatus); // Call the function to update status in the database
        });
    });
}

// Function to update status in the database
function updateStatus(productCode, selectedStatus) {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
             status ();
        }
    };
    console.log(selectedStatus)
    xhr.open('GET', 'update_status.php?productCode=' + productCode + "&selectedStatus=" + selectedStatus, true);
    xhr.send();
}

        //
        document.getElementById('searchQuery').addEventListener('input', function(event) {
        search();
                });

                document.getElementById('searchForm').addEventListener('submit', function(event) {
                      event.preventDefault(); // Prevent form submission

                      const searchQuery = document.getElementById('searchQuery').value.trim(); // Trim the search query

                      // Check if search query is empty
                      if (searchQuery !== '') {
                          fetch('search.php', {
                              method: 'POST',
                              body: new FormData(this)
                          })
                          .then(response => response.json())
                          .then(data => {
                              const searchResults = document.querySelector('#productTable tbody');
                              searchResults.innerHTML = ''; // Clear previous results
                              if (data.length === 0) {
                                  searchResults.innerHTML = '<tr><td colspan="10">No results found</td></tr>';
                              } else {
                                const tableBody = document.querySelector('#productTable tbody');
    tableBody.innerHTML = ""; // Clear existing table rows
    data.forEach(message => {
        const row = `<tr>
                        <td>${message.Product_name}</td>
                        <td><img src="/shopping-cart-oche/Project/admin/product/product_image_list/${message.Image}" width="100" height="100"></td>
                        <td>${message.Quantity}</td>
                        <td>${message.Price}</td>
                        <td>${message.Total_price}</td>
                        <td>
                            <select class="form-select status-select" data-product-code="${message.Product_code}" style="width:110px;" aria-label="Default select example">
                                <option hidden>Choose..</option>
                                <option value="Pending">Pending</option>
                                <option value="On the way">On the way</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </td>
                        <td>${message.Full_name}</td>
                        <td>${message.Contact_No}</td>
                        <td>${message.Address}</td>
                        <td>${message.Mode_payment}</td>
                    </tr>`;
        tableBody.innerHTML += row;
    });

    // Set select options for each select element
    const selectElements = document.querySelectorAll('.status-select');
    selectElements.forEach(select => {
        const productCode = select.dataset.productCode;
        const selectedStatus = data.find(message => message.Product_code === productCode).Status;
        const options = select.querySelectorAll('option');
        options.forEach(option => {
            if (option.value === selectedStatus) {
                option.selected = true;
            }
        });
        
 // Add event listener to each select element
 select.addEventListener('change', function() {
            const selectedStatus = select.value; // Get the newly selected status
            updateStatus(productCode, selectedStatus); // Call the function to update status in the database
        });
    });
                              }
                          })
                          .catch(error => {
                              console.error('Error:', error);
                          });
                      } else if (searchQuery === ''){
                        // Fetch and display all products
                        fetchData();

                      } 
                      else {
                          // If search query is empty, hide the "No results found" message
                          document.querySelector('#no_result').style.display = "none";
                          // Fetch and display all products
                          fetchData();

                      }
                  });

                  function info () {
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
                      }
                      
                      window.onload =function () {
                        fetchData();
                        info ();
                      }

                      function status(){
                        Swal.fire({
                        icon: "success",
                        title: "Status updated successfull",
                        showConfirmButton: false,
                        timer: 1500
                      });
                      }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <!--JQuerry library-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="product.js" ></script>
        <!--This is for fontawesome icon-->
        <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
        <!--This is bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    </body>
</html>