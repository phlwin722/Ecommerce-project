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
        <link rel="stylesheet" href="/shopping-cart-oche/Project/admin/product/product.css">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/login/logo.css">
        <title>Product</title>
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
                          <label class="text-start " style="font-weight: bold; font-size: 20px; margin-top: 10px;"> Product</label>
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
                              <input class="form-control me-2 search_input" style="width: 400px;"  onkeyup="search()" id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                              <button class="btn btn-success" style="margin-left:-10px;" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="newbuttin text-right" style=" width:160px; padding-right:0px; padding-left:80px">
                            <button type="button" class="btn btn-primary new_button" style=""><i class="fa-solid fa-plus"></i> New</button>
                          </div>
                          </form>
                      
                         <!--this is the list of table product-->
                         <div class="dispaly_Table" style="margin-top:10px; right:-4px">
                           <table class="table table-hover " id="productTable">
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
                                      
            <!-- Modal edit-->
          <div class="modal fade "  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body edit text-start">
                <form class="row" action="#" style="height:400px" method="POST" enctype="multipart/form-data">
        <div class="col-md-3">
            <label for="product_name" class="form-label">Product name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
            <input type="hidden" class="form-control" id="product_code" name="product_code" required>
        </div>
        <div class="col-md-3">
            <label for="Price" class="form-label">Price</label>
            <input type="number" class="form-control" id="Price" name="price" value="1" required min="1">
        </div>
        
        <div class="col-md-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="quantity" value="1" required min="1">
        </div>
        <div class="col-md-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
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
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="col-md-12" style="margin-top: -1px;">
            <img src="/shopping-cart-oche/Project/Image/default-image.jpg" id="imagePreview" class="" alt="Default Image" height="250px" width="250px">
        </div>
        <div class="col-12">
            <input type="file" class="form-control" aria-label="file example" id="imageInput" name="image" value="" required accept="image/png, image/jpeg, image/jpg">
            <div class="invalid-feedback">Please select an image.</div>
        </div>
    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="edit_product" class="btn btn-primary">Upload</button>
                </div>
              </div>
            </div>
          </div>
            <!-- Modal edit-->

               <!--JQuerry library-->
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               
               <script>
                // show selecected product using selected Category
                function showProduct (categorySelected){
                  let xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function (){
                    if (this.readyState === 4 && this.status === 200){
                      console.log(categorySelected);
                        let data =JSON.parse(this.responseText);
                        display_select_category(data);
                    }
                  }
                  xhr.open("GET","product_display_catergory.php?selectedCategory=" + categorySelected, true);
                  xhr.send();
                }
                function display_select_category (data){
                  const tableBody =document.querySelector('#productTable tbody');
                  tableBody.innerHTML="";
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
                                        <a href="#" onclick="editprodSpecific('${product.Product_code}')" class="btn btn-sm edit-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-solid fa-pen-to-square" style="color: green;"></i> </a>
                                        <a href="#" onclick="deleteprodSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
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
                    } else {
                        console.error("Error fetching data: " + this.status);
                    }
                }
            };
            xhr.open("GET", "product_fetch.php", true);
            xhr.send();
        }

        // Function to populate table with fetched data
        function populateTable(data) {
          console.log(data)
            const tableBody = document.querySelector('#productTable tbody');
          //  const productCategory = document.querySelector('#producttCategory');
            tableBody.innerHTML = ""; // Clear existing table rows
           // productCategory.innerHTML = ""; // Clear existing options
            data.forEach(product => {
                const row = `<tr>
                                    <td>${product.Product_code}</td>
                                    <td>${product.Product_name}</td>
                                    <td>${product.Price}</td>
                                    <td>${product.Quantity}</td>
                                    <td><img src="product_image_list/${product.Image}" width="100" height="100" title="${product.Product_name}"></td>
                                    <td>${product.Category}</td>
                                    <td class="text-center"> 
                                        <a href="#" onclick="editprodSpecific('${product.Product_code}')"  class="btn btn-sm edit-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-solid fa-pen-to-square" style="color: green;"></i> </a>
                                        <a href="#" onclick="deleteprodSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                    </td>
                                </tr>`;
                tableBody.innerHTML += row;
            });
          /* data.forEach(product => {
                const row = `
                <option value="${product.Category}">All</option>
                <option value="${product.Category}">${product.Category}</option>
               `;
               productCategory.innerHTML += row;
            });*/
        }

        // Call the fetchData function when the page loads
        window.onload = fetchData;
                // edit product
        // Handler for editing specific product
// Handler for editing specific product
function editprodSpecific(Product_code) {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);

            if (data.length === 0) {

            } else {
                let product_code = document.querySelector('#product_code');
                let product_name = document.querySelector('#product_name');
                let Price = document.querySelector('#Price');
                let Quantity = document.querySelector('#Quantity');
                let category = document.querySelector('#category');
                let imagePreview = document.querySelector('#imagePreview');

                data.forEach(product => {
                    product_code.value = `${product.Product_code}`;
                    product_name.value = `${product.Product_name}`;
                    Price.value = `${product.Price}`;
                    Quantity.value = `${product.Quantity}`;

                    // Set image preview using src
                    imagePreview.src = `product_image_list/${product.Image}`;

                    // Iterate through each option
                    category.querySelectorAll('option').forEach(option => {
                        // Check if the option values match the fetched category
                        if (option.value === `${product.Category}`) {
                            // Set the selected attribute if there's a match
                            option.selected = true;
                        }
                    });
                });
            }
        }
    };
    xhr.open("GET", 'display_edit_category.php?productcode=' + Product_code, true);
    xhr.send();
}

// Upload edit image
document.querySelector('#edit_product').addEventListener('click', function() {
      Swal.fire({
      title: "Do you want to save the changes?",
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Save",
      denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        let product_code = document.querySelector('#product_code').value;
        let product_name = document.querySelector('#product_name').value;
        let price = document.querySelector('#Price').value;
        let quantity = document.querySelector('#Quantity').value;
        let category = document.querySelector('#category').value;
        let modal = document.querySelector('#staticBackdrop');
        let modalInstance = bootstrap.Modal.getInstance(modal);
        let imageInput = document.querySelector('#imageInput').files[0];

        let formData = new FormData();
        formData.append('product_code', product_code);
        formData.append('product_name', product_name);
        formData.append('price', price);
        formData.append('quantity', quantity);
        formData.append('category', category);

        // Check if a new image is selected
        if (imageInput) {
            formData.append('image', imageInput);
        }

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let data = JSON.parse(this.responseText);
                if (data.success) {
                    // Handle success
                    modalInstance.hide();
                    Swal.fire("Saved!", "", "success");
                    fetchData();
                } else {
                    // Handle failure
                    alert("Failed to edit product.");
                }
            }
        };
        xhr.open("POST", "product_edit.php", true);
        xhr.send(formData);
      } else if (result.isDenied) {
        Swal.fire("Changes are not saved", "", "info");
      }
    });
});

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

        // edit product
       // Handler for deleting specific product
        function deleteprodSpecific(Product_code) {
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
              var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                        var response = JSON.parse(this.responseText);
                        if (response.success) {
                            // Product deleted successfully
                            fetchData(); // Fetch updated data after deletion
                            Swal.fire({
                          title: "Deleted!",
                          text: "Product has been deleted.",
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
            xmlhttp.open("GET", "delete_product_and_archives.php?q=" + Product_code, true);
            xmlhttp.send();
            }
          });

        }
        // to go the new product interface
        document.querySelector(".new_button").addEventListener("click", function () {
            window.location.href="/shopping-cart-oche/Project/admin/product/newproduct.php"
        })

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
                                  searchResults.innerHTML = '<tr><td colspan="7">No results found</td></tr>';
                              } else {
                                const tableBody = document.querySelector('#productTable tbody');
                                tableBody.innerHTML = ''; // Clear previous results
                                data.forEach(product => {
                                    const row = `<tr>
                                    <td>${product.Product_code}</td>
                                    <td>${product.Product_name}</td>
                                    <td>${product.Price}</td>
                                    <td>${product.Quantity}</td>
                                    <td><img src="product_image_list/${product.Image}" width="100" height="100" title="${product.Product_name}"></td>
                                    <td>${product.Category}</td>
                                    <td class="text-center"> 
                                        <a href="#" onclick="editprodSpecific('${product.Product_code}')"  class="btn btn-sm edit-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-solid fa-pen-to-square" style="color: green;"></i> </a>
                                        <a href="#" onclick="deleteprodSpecific('${product.Product_code}')" class="btn btn-sm delete-data"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                    </td>
                                </tr>
                                              `;
                                    tableBody.innerHTML += row;
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

      </script>

       <!--JQuerry library-->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="newproduct.js" ></script>
        <!--This is for fontawesome icon-->
        <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
        <!--This is bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    </body>
</html>