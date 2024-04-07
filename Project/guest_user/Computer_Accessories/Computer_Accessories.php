<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/guest_user/Computer_Accessories/Computer_Accessoriess.css">
           <!--Favicon-->
           <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
  
        <title>Computer Accessories</title>
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
        
          <form class="d-flex" role="search" style="margin-right: 100px;">
            <input class="form-control me-2 search_input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <button class="btn shopping_cart" type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
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
                        <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">Ecommerce</a>
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
                              <i class="fa-solid fa-house"></i><a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php"> Home</a>
                          </h5>
                        </div>
                        <hr>
                        <div>
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              <a class="navbar-brand" href="">Products Available</a>
                              </h5>
                              <ul class="list-group list-group-flush">
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/gaming_accessories/gamingaccessories.php">Gaming Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/musical_instrument/musical_instrument.php">Musical Instrument</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/kitchen_tools/kitchen_tools.php">Kitchen Tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/woment_fassion/women_fassion.php"> Women's Fassion & Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/Computer_Accessories/Computer_Accessories.php">Computer Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/automotive_parts/automotive_parts.php">Automotive & Motorcycle Parts</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/electronic_parts/electronic_accessorise.php">Electronic Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/health_beuty/health_beuty.php">Health & Beauty</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/men_fassion/men_fassion.php">Men's Fassion & Accessoriess</a></li>
                          </ul>
                            
                      </div>
                      <hr>
                      <div>
                        <h6> <a class="navbar-brand" href="/shopping-cart-oche/Project/login/signin.php">Sign in to buy product</a> </h6>

                      <a  class="sign-in" href="/shopping-cart-oche/Project/login/signin.php">Sign in</a>
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
            <div class="row " style="padding-left:20px;">
              <div class="col-md-11" style="margin-left:auto; margin-right:auto;">
                <!--products-->
                 <div class="row cem" style=""> </div>
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
           
    
            <!--Feed back-->
           <div class="feedback_Container">
            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Feedback</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                  </div>
                </div>
              </div>
           </div>
          </div>

          <script>
                // function to fetch data using ajax
                  // Function to fetch data using AJAX
              function fetchData() {
                  let xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                      if (this.readyState === 4 && this.status === 200) {
                          let data = JSON.parse(this.responseText);
                          populateTable(data);
                      }
                  };
                  xhr.open("GET", "Computer_Accessories_fetch.php", true);
                  xhr.send();
              }

              // Function to populate table with fetched data
              function populateTable(data) {
                  const tableBody = document.querySelector('.cem');
                  data.forEach(product => {
                      const row = `<div class="col-md-3 id="cem"">
                                          <div class="card" style="width: 18rem; padding:10px; height:420px;">
                                              <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="100" height="150" alt="${product.Product_name}" class="card-img-top" width="150" height="170">  
                                              <div class="card-body" style="postion:relative;">
                                                  <h6 style="font-weight:bold;">${product.Product_name}</h6>
                                                  <p class="card-text">${product.Category}</p>
                                                  <p class="card-text">₱ ${product.Price}</p>
                                                  <button class="CartBtn">
                                                      <span class="IconContainer"> 
                                                          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                                                              <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                          </svg>
                                                      </span>
                                                      <p class="text">Add to Cart</p>
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                  `;
                      tableBody.innerHTML += row;
                  });
              }

              // Call the fetchData function when the page loads
              window.onload = fetchData;
          </script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>