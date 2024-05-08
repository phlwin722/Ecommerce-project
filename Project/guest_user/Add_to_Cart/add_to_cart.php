
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/user_login/Add_to_cart/add_to_cartt.css">
           <!--Favicon-->
           <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
  
        <title>Add to Cart</title>
    </head>
    <body>
    <div class="container-fluid  sticky-top" style=" padding: 0px;" >
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="display:block;">
              <div class="container-fluid">
                  <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
                    </a>
                <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">Ecommerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                  <form class="d-flex" role="search" style="margin-right: 100px;" id="searchForm" method="post" enctype="multipart/form-data">
                    <input class="form-control me-2 search_input" type="search" placeholder="Search" id="searchQuery" name="search_data" aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass" name="search_data_product"></i></button>
                        <button class="btn shopping_cart  position-relative" type="submit"><i class="fa-solid fa-cart-shopping"></i>

                      </button>
                  </form>
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link c" style="color: white;" href="/shopping-cart-oche/Project/login/signin.php">Sign in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/shopping-cart-oche/Project/login/signup.php">Sign up</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
   

          <!--about us--> 
              <div class="container-fluid con2 " style="display:block; padding:2px">
                <ul class="nav">
                  <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars"></i>
                  </a>
                  <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                          <div class="container-fluid">
                          <a class="navbar-brand" href="#">
                              <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
                            </a>
                        <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">Ecommerce</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        </div>
                      </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div>
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              <i class="fa-solid fa-house"></i><a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php"> Home</a>
                          </h5>
                        </div>
                        <hr>
                        <div>
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              <a class="navbar-brand" href="">Products Available</a>
                              </h5>
                              <ul class="list-group list-group-flush">
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/gaming_accessories/gamingaccessories.php">Gaming Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/musical_instrument/musical_instrument.php">Musical Instrument</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/kitchen_tools/kitchen_tools.php">Kitchen Tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/woment_fassion/women_fassion.php"> Women's Fassion & Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/Computer_Accessories/Computer_Accessories.php">Computer Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/automotive_parts/automotive_parts.php">Automotive & Motorcycle Parts</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/electronic_parts/electronic_accessorise.php">Electronic Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/health_beuty/health_beuty.php">Health & Beauty</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/men_fassion/men_fassion.php">Men's Fassion & Accessoriess</a></li>
                          </ul>
                            
                      </div>
                      <hr>
                      <div>
                            <a  class="sign-in" href="/shopping-cart-oche/Project/user_login/logout/logout.php"> <i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                      </div>
                      <hr>
                    
                    </div>
                  </div>
                  <li class="nav-item">
                    <a class="nav-link fontt" aria-current="page" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fontt" aria-current="page" href="#footer">Contact us</a>
                  </li>
                </ul>
              </div>
          </div>
              <!--end of aboout-->

               <!--Display product-->
        <!-- Display product -->
<div class="row" style="padding-left: 20px;">
    <div class="col-md-11" style="margin-left:auto; margin-right:auto;">
        <div class="card position-relative" style="width: 100%; padding: 10px; height: 100px;">
            <div style="font-size: 18px; margin-left: 15px;">
                <i class="fa-solid fa-location-dot" style="color: #de0202;"></i> Delivery Address
            </div>
            <div class="card-body" style="position:relative;">
                <label style="font-weight:bold;" id="full_name"></label>
                <label id="address"></label>
            </div>
        </div>

        <div class="card position-relative" style="width: 100%; padding: 10px; height: 70px;">
            <div class="card-body" style="position:relative;">
                <label style="font-weight:bold;">
                    <input class="form-check-input productCheckbox" type="checkbox" value="" id=""> Product
                </label>
                <label class="card-text" style="font-weight:bold; position:absolute; right:510px;">Unit Price</label>
                <label class="card-text" style="font-weight:bold; position:absolute; right:350px;">Quantity</label>
                <label class="card-text" style="font-weight:bold; position:absolute; right:180px;">Total Price</label>
                <label class="card-text" style="font-weight:bold; position:absolute; right:40px;">Actions</label>
            </div>
        </div>

        <!-- Products -->
        <div class="row cem" style=""> 
            <div class="col-md-12">
                <div class="col-md-12 text-center" id="no_result">
                    <p style="font-size: 40px; color:red; background-color:white; padding: 170px; margin-top:20px;">No results found!</p>
                </div>
            </div>
        </div>

        <div class="card position-relative sticky-bottom" style="width: 100%; padding: 10px; height: 70px;">
            <div class="card-body" style="position:relative;">
                <input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox">
                <label style="" for="selectAllCheckbox">Select All</label>
                <label style="margin-left: 20px;" id="DeleteDataAll" for="">Delete All</label>
                <label for="payment" style="margin-left: 120px;">Payment</label>
                <label class="card-text" style="position:absolute; right:350px;" id="totalItemSelect">Total (0 item)</label>
                <label class="card-text" style="position:absolute; right:250px;" id="totalPriceDisplay"></label>
                <button type="button" id="buy_now" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalpayment" style="font-weight:bold; position:absolute; right:40px ; top:9px;">
                    Buy now
                </button>
            </div>
            <select class="form-select position-absolute" id="payment" aria-label="Default select example" style="width:200px; top:20px; left:400px;">
                <option value="1">Cash On Delivery</option>
                <option disabled value="2">Gcash (Not Available)</option>
            </select>
        </div>
    </div>
</div>

            <!--end Display product-->

              <!--Footer-->
          <div class="container-fluid footer" id="footer">
            <div class="copy-right"> 
              <i class="fa-regular fa-copyright"></i> 2024, Ecommerce.com
            </div>
            <div class="contact_us"> 
              <i class="fa-regular fa-envelope"></i> ecomerce@gmail.com
              <br>
              <i class="fa-solid fa-phone"></i> 09496565245
            </div> 
           
    
            <!--Feed back modal-->
           <div class="feedback_Container">
            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModale" data-bs-whatever="@mdo">Feedback</button>
              <div class="modal fade" id="exampleModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name" disabled value="Ecommerce">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" name="sent_message">Send message</button>
                    </div>
                  </div>
                </div>
              </div>
           </div>
          </div>


          
          <script>
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
                          const searchResults = document.querySelector('.cem');
                          searchResults.innerHTML = ''; // Clear previous results
                          if (data.length === 0) {
                              searchResults.innerHTML = '<div class="col-md-12 text-center" id="no_result">  <p style="font-size:40px; color:red; background-color:white; padding: 170px; 0px 30px 0px; margin-top:20px;">No results found!</p>  </div>';
                          } else {
                              const tableBody = document.querySelector('.cem');
                              tableBody.innerHTML = ''; // Clear previous results
                              data.forEach(product => {
                                  const row = `<div class="col-md-12 text-center" id="no_result">  <p style="font-size:40px; color:red; background-color:white; padding: 170px; 0px 30px 0px; margin-top:20px;">No results found!</p>  </div>`;
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
                      fetchDataUserInfo();
                  } else {
                      // If search query is empty, hide the "No results found" message
                      document.querySelector('#no_result').style.display = "none";
                      // Fetch and display all products
                      fetchData();
                      fetchDataUserInfo();
                  }
              });

              // Function to fetch data using AJAX to fetch all products
              function fetchData() {
                  let xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                      if (this.readyState === 4 && this.status === 200) {
                          let data = JSON.parse(this.responseText);
                          populateTable(data);

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
                                  });
                                }
                              };
                              xhr.open("GET", "/shopping-cart-oche/Project/user_login/user_login_home/info_user.php", true);
                              xhr.send();
                      }
                  };
                  xhr.open("GET", "add_to_cart_fetch.php", true);
                  xhr.send();
              }

              // Function to populate table with fetched data
              function populateTable(data) {
                  const tableBody = document.querySelector('.cem');
                  tableBody.innerHTML = ''; // Clear previous results
                  data.forEach(product => {
                      const row = `<div class="col-12">
                          <div class="card" style="width: 100%; padding:10px; height:120px;">
                              <div class="row">
                                  <div class="text-center" style="width:10px; padding-top:35px; padding-left:25px;">
                                      <input class="form-check-input productCheckbox"  type="checkbox" value="" id="productCheckbox" data-product-code="${product.Product_code}">
                                  </div>
                                  <div class="" style=" width:165px;">
                                      <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="150" height="100" alt="${product.Product_name}">  
                                  </div>
                                  <div class="col">
                                      <label style="padding-top:15px;">${product.Product_name}</label>
                                  </div>
                                  <div class="col-1 position-relative" style="width:130px;">
                                      <div style="position: absolute; top: 36%; left:33%;">
                                          <lable>₱ </lable> 
                                          <input class="text-center" id="unitprice_${product.Product_code}" style="background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                      </div>
                                  </div>
                                  <div class="col position-relative" style="width:125px;">
                                      <div style="position: absolute; top: 30%; left:15%;">
                                          <button class="btn btn-link border border-light-subtle" onclick="minus(${product.Product_code})"><i class="fa-solid fa-minus" style="color:black"></i></button>
                                          <input class="text-center  border border-light-subtle" id="quantity_${product.Product_code}" style="width:70px;" value="${product.Quantity}" min="1" disabled>
                                          <button class="btn btn-link border border-light-subtle" onclick="add(${product.Product_code})"><i class="fa-solid fa-plus" style="color:black"></i></button>
                                      </div>
                                  </div>
                                  <div class="col-1 position-relative">
                                      <div style="position: absolute; top: 36%; left:20%;">
                                          <lable>₱ </lable> 
                                          <input class="text-center totalpricee"  id="totalprice_${product.Product_code}" style="position: absolute; background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                      </div>
                                  </div>
                                  <div class="col-2 position-relative" style="width:180px;">
                                    <a href="#" class="btn btn-sm delete-data" id="deleteProduct_${product.Product_code}" onclick="DeleteProduct(${product.Product_code})" value="${product.Product_code}" style="position: absolute; top: 35%; left:42%;">
                                        <i class="fa-solid fa-trash" style="color: red; font-size:20px"></i>
                                    </a>
                                  </div>
                              </div>
                          </div>
                      </div>`;
                      tableBody.innerHTML += row;
                  });

                  const selectAllCheckbox = document.getElementById('selectAllCheckbox');
                  const productCheckboxes = document.querySelectorAll('.productCheckbox');
                  // Delete All data
                  const deleteAllData = document.getElementById('DeleteDataAll');

                  // Add event listener to the "Select All" checkbox
                  selectAllCheckbox.addEventListener('change', function() {
                      // Iterate through each product checkbox
                      productCheckboxes.forEach(checkbox => {
                          // Set the checked property of each product checkbox to match the "Select All" checkbox
                          checkbox.checked = selectAllCheckbox.checked;
                      });
                      calculateTotalPrice(); // Recalculate total price when "Select All" checkbox is clicked
                  });

                  deleteAllData.addEventListener('click', function (){
                  let checkedProducts = [];
                  productCheckboxes.forEach(checkbox => {
                      if (checkbox.checked) {
                          checkedProducts.push(checkbox.dataset.productCode);
                      }
                  });

                  // Check if any product is checked
                  if (checkedProducts.length > 0) {
                     // Send a request to delete all checked products
                    var xmlHttp = new XMLHttpRequest();
                    xmlHttp.onreadystatechange =function (){
                           if (this.readyState == 4 && this.status == 200){
                            fetchData();
                              calculateTotalPrice(); // Recalculate total price after deletion
                              alert('Products deleted successfully');
                               // Uncheck all checkboxes
                              productCheckboxes.forEach(checkbox => {
                                  checkbox.checked = false;
                              });
                              selectAllCheckbox.checked = false; // Uncheck selectAllCheckbox
                           }
                        }
                        xmlHttp.open("GET","delete_all_data_cart.php",true);
                        xmlHttp.send();
                      // Send a request to delete all checked products
                  } else {
                      // If no product is checked, display a message
                      alert('Please select at least one product to delete.');
                  }
              });

                  productCheckboxes.forEach(checkbox => {
                      checkbox.addEventListener('change', calculateTotalPrice);
                  });


              }


              // function to fetch user information using ajax to fetch user info

            
              document.querySelector('.shopping_cart').addEventListener('click',function  ( ) {
                      window.location.href="/shopping-cart-oche/Project/guest_user/Add_to_Cart/add_to_cart.php";
                    })

              window.onload = function() {
                fetchData();
                fetchDataUserInfo();
              };
          </script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>