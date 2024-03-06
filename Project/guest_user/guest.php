<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="guest.css">
        <title>Musical Instrument</title>
    </head>
    <body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary" data-bs-theme="dark">
              <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
                    </a>
                <a class="navbar-brand" href="#">Ecommerce</a>
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
          </div>
          <br>
          <br>
          <!--about us--> 
            <div class="container-fluid con2">
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
                      <a class="navbar-brand" href="#">Ecommerce</a>
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
                            <i class="fa-solid fa-house"></i><a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest.php"> Home</a>
                        </h5>
                      </div>
                      <hr>
                      <div>
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            <a class="navbar-brand" href="">Products Available</a>
                            </h5>
                            <ul class="list-group list-group-flush">
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/gamingaccessories.php">Gaming Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/musical_instrument.php">Musical Instrument</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/kitchen_tools.php">Kitchen Tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/women_fassion.php"> Women's Fassion & Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/sport_tools.php">Sports tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/automotive_parts.php">Automotive & Motorcycle Parts</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/electronic_accessorise.php">Electronic Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/health_beuty.php">Health & Beauty</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/men_fassion.php">Men's Fassion & Accessoriess</a></li>
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
            <!--Courosel-->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/shopping-cart-oche/Project/Image/two.jpeg" class="d-block w-100 " height="350px" style="object-fit: cover;" alt="...">
           </div>
                <div class="carousel-item">
                <img src="/shopping-cart-oche/Project/Image/one.jpg" class="d-block w-100" height="350px" style="object-fit: cover;" alt="...">
           </div>
                <div class="carousel-item">
                <img src="/shopping-cart-oche/Project/Image/three.jpg" class="d-block w-100 " height="350px" style="object-fit: cover;" alt="...">
          </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

              <!--List of product-->
        <div class="container text-center ">
          <nav class="nav flex-column">
          <div class="row list_product_chosee">
            <div class="col lay">
              <a href="gamingaccessories.php" class="product_list">
                Gaming Accessories
                <br>
                <img src="/shopping-cart-oche/Project//Image/gameaccessories.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
            <div class="col lay">
              <a href="/shopping-cart-oche/Project/guest_user/musical_instrument.php" class="product_list">
                Musical Instrument
                <img src="/shopping-cart-oche/Project//Image/musical_instrument.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
            <div class="col lay">
              <a href="/shopping-cart-oche/Project/guest_user/kitchen_tools.php" class="product_list">
                Kithchen Tools
                <img src="/shopping-cart-oche/Project//Image/kitchen_tool.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
          </div>

          <div class="row list_product_chosee">
    
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/women_fassion.php" class="product_list">
                Women's Fassion & Accessories
                <br>
                <img src="/shopping-cart-oche/Project//Image/women_fassion.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/sport_tools.php" class="product_list">
                Sports tools
                <br>
                <img src="/shopping-cart-oche/Project//Image/sport_tools.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/automotive_parts.php" class="product_list">
                Automotive & Motorcycle Parts
                <br>
                <img src="/shopping-cart-oche/Project//Image/parts_accerores.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
          </div>

          <div class="row list_product_chosee">
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/electronic_accessorise.php" class="product_list">
                Electronic Accessories 
              <img src="/shopping-cart-oche/Project//Image/elecronic_accessories.jpg" width="300px" height="200px" alt="">
            </a></div>
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/health_beuty.php" class="product_list">
                Health & Beauty
                  <img src="/shopping-cart-oche/Project//Image/personal_care.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
            <div class="col">
              <a href="/shopping-cart-oche/Project/guest_user/men_fassion.php" class="product_list">
                Men's Fassion & Accessories
                <img src="/shopping-cart-oche/Project//Image/mens_fassion.jpg" width="300px" height="200px" alt="">
              </a>
            </div>
          </div>
            <br> <br>  <br>  <br>  <br>  
        </nav>
          </div>
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
          <script src="guest.js" defer></script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>