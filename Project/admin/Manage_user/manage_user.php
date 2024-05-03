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
        <meta name="viewport" content="width:device-width, initial-scale=1">
        <meta name="autor" content="Dexter Jamero">
        <link rel="stylesheet" href="manage.css">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Manage user</title>
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
                <!--my account-->
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
               <!--end my account-->
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
                              <img src="/Project/Image/logo.png" alt="Lo" width="30" height="24">
                              <!-- <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">--> 
                              </a>
                          <a class="navba-brand color" style="text-decoration: none;" href="#">Ecommerce</a>
          
                          </div>
                        </h4>
                        <hr style="color: white;">
                        
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/dashboard/dashboard.php"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
                          </li>
                          <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Manage_user/manage_user.php"><i class="fa-solid fa-users "style="margin-right:10px;" ></i>Manage user</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/admin/Message/Message.php">  <i class="fa-solid fa-message" style="margin-right:10px;"></i>
                                Message
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
                    <!--this is second grid of data display-->
                        <div class="col-md" id="grid_size" style=" background-color: rgba(236, 236, 236, 0.966);">
                          <!--message error of modal or successfull-->
                         
                        <label class="text-start " style="font-weight: bold; font-size: 20px; margin-top: 10px;">Manage user</label>
                        <br>
                          <br>
                          <form class="row gx-3 gy-2 d-flex" id="searchForm" style="height:45px;">
                            
                            <div class="col-sm-7 d-flex">
                              <input class="form-control me-2 search_input" style="width: 400px;"  id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                              <button class="btn btn-success" style="margin-left:-10px;" type="submit" id="submitSearch" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="newbuttin text-right" style=" width:160px; padding-right:0px; padding-left:80px">
                          </div>
                          </form>

                        <div class="dispaly_Table" style="margin-top:10px; right:-4px">
                           <table class="table table-hover " id="employeeTable">
                               <thead>
                                   <tr>
                                      <th scope="col"class="">#</th>
                                      <th scope="col"class="table_name">Full name</th>
                                      <th scope="col" class="table_address">Address</th>
                                      <th scope="col" class="table_email ">Email</th>
                                      <th scope="col" class="table_action text-center">Action</th>
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
                    xhr.open("GET", "search_archieve_user copy.php?searchQuery=" + searchQuery, true); // Corrected file name
                    xhr.send();
                }

                function searchResullt(data) { // Corrected function name
                    const tableBody = document.querySelector('#employeeTable tbody');
                    let searchQuery = document.querySelector('#searchQuery');
                    tableBody.innerHTML = "";
                    if (searchQuery.value == ""){
                      fetchData();
                    }
                    else if (data.length === 0) {   
                      tableBody.innerHTML = '<tr><td colspan="7">No results found</td></tr>';
                    } else {
                        
                          data.forEach(user => {
                          const row = `<tr>
                                          <td>${user.ID}</td>
                                          <td>${user.First_name} ${user.Middle_name} ${user.Last_name}</td>
                                          <td>${user['Block_&_Lot']} ${user.Barangay} ${user.City} ${user.Province}</td>
                                          <td>${user.Email}</td>
                                          <td class="text-center"> 
                                              <a href="#" onclick="delete_user('${user.ID}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                          </td>
                                      </tr>`;
                            tableBody.innerHTML += row;
                            searchQuery.innerHTML="";
                        });
                    }
                }

              // end searh product

                  // Function to fetch data using AJAX
        function fetchData() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var data = JSON.parse(this.responseText);
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
                }
            };
            xhr.open("GET", "manage_fetchdate.php", true);
            xhr.send();
        }

        // Function to populate table with fetched data
        function populateTable(data) {
            const tableBody = document.querySelector('#employeeTable tbody');
            tableBody.innerHTML="";
            data.forEach(user => {
                const row = `<tr>
                                <td>${user.ID}</td>
                                <td>${user.First_name} ${user.Middle_name} ${user.Last_name}</td>
                                <td>${user['Block_&_Lot']} ${user.Barangay} ${user.City} ${user.Province}</td>
                                <td>${user.Email}</td>
                                <td class="text-center"> 
                                    <a href="#" onclick="delete_user('${user.ID}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                </td>
                            </tr>`;
                tableBody.innerHTML += row;
            });
        }

        function delete_user(user_id){
          event.preventDefault();
          console.log(user_id)
          Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function (){
              if (this.readyState === 4 && this.status === 200){
                var response = JSON.parse(this.responseText);
                if (response.success) {
                  fetchData();
                  Swal.fire({
                title: "Deleted!",
                text: "User information has been deleted.",
                icon: "success"
              });
                }else{
                    alert("Error");
                }
              }
            }
            xhr.open("GET", "delete_user_and_archives.php?user_id="+user_id, true);
            xhr.send();
            }
          });
        }

        // Call the fetchData function when the page loads
        window.onload = fetchData;
            </script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="manage.js"></script>
        <!--This is for fontawesome icon-->
        <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
        <!--This is bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    </body>
</html>