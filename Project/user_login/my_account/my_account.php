<?php 
                 // session checking if user has login
                  session_start();
                  if (!isset($_SESSION['ffname'])){
                      header ('Location: /shopping-cart-oche/Project/user_login/logout/logout.php');
                  }
                  
                  $firstname = $_SESSION['ffname'];
                  $lastname = $_SESSION['llname'];
                  $email = $_SESSION ['email'];

          ?>

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
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>My account</title>
    </head>
    <body>
    <div class="container-fluid  sticky-top" style=" padding: 0px;" >
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="display:block;">
      <div class="container-fluid">
          <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">
              <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
            </a>
        <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex" id="searchForm" role="search" action="" method="post" style="margin-right: 100px;">
                    <input class="form-control me-2 search_input" id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <button class="btn btn-success" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="submit" class="btn shopping_cart position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <label for="" id="count_of_cart">99+</label>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                    </button>
                </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!--my account-->
            <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" id="srcimage" height="25" style="border-radius: 50%; width:30px;">
                      <!--Name of the user-->
                      <label id="firstname"></label> <label id="lastname"></label>
                    </button>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/my_account/my_account.php">My Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/order_cart/order_cart.php">My Purchase</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/logout/logout.php">Logout</a></li>
                    </ul>
                  </div>
               <!--end my account-->
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
           <!--Display product-->
          <div class="row " style="padding-left:20px;">
              <div class="col-md-11" style="margin-left:auto; margin-right:auto;">

              <div class="co" style=" margin-top:10PX; ">
                              <ul class="nav nav-tabs" id="myTab" role="tablist" style="">
                                <label style="padding: 10px; font-weight: bold;">PROFILE ACCOUNT</label>
                                <li class="nav-item" role="presentation" style="margin-left: 450px;">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">User Account info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Change Avatar</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Change Password</button>
                                </li>
                      
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <!--1St tab-->
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" style="padding: 10px;">
                                  <div class="container" style="text-align: left;">
                                    <div class="row" style="">
                                      <div class="col">
                                        <label for="validationDefault01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="input_firstname" required>
                                      
                                      </div>
                                      <div class="col">
                                        <label for="validationDefault02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="input_lastname" required>
                                      
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" id="input_middlename" required>
                                      
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Contact No</label>
                                        <input type="text" class="form-control" id="input_contact" required>
                                      
                                      </div>    
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Block/Lot</label>
                                        <input type="text" class="form-control" id="input_block" required>
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Barangay</label>
                                      <select class="form-select" id="input_barangay" name="barangay" required>
                                          <option value="FVR">FVR</option>
                                          <option value="San Rafael 1">San Rafael 1</option>
                                          <option value="San Rafael 2">San Rafael 2</option>
                                          <option value="San Rafael 3">San Rafael 3</option>
                                          <option value="San Rafael 4">San Rafael 4</option>
                                          <option value="San Rafael 5">San Rafael 5</option>
                                          <option value="Kaypian">Kaypian</option>
                                      </select>
                                     
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">City</label>
                                      <select class="form-select"  id="input_city"  name="cityy" value="" required>
                                          <option value="Manila">Manila</option>
                                          <option value="Quezon City">Quezon City</option>
                                          <option value="Davao City">Davao City</option>
                                          <option value="Cebu City">Cebu City</option>
                                          <option value="Caloocan">Caloocan</option>
                                          <option value="Zamboanga City">Zamboanga City</option>
                                          <option value="Taguig">Taguig</option>
                                          <option value="Pasig">Pasig</option>
                                          <option value="Antipolo">Antipolo</option>
                                          <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                                          <option value="Parañaque">Parañaque</option>
                                          <option value="Makati">Makati</option>
                                          <option value="Bacolod">Bacolod</option>
                                          <option value="Pasay">Pasay</option>
                                          <option value="Angeles City">Angeles City</option>
                                          <option value="General Santos City">General Santos City</option>
                                          <option value="Cainta">Cainta</option>
                                          <option value="Marikina">Marikina</option>
                                          <option value="Iloilo City">Iloilo City</option>
                                          <option value="Dasmarinas">Dasmarinas</option>
                                          <option value="Valenzuela">Valenzuela</option>
                                          <option value="Bacoor">Bacoor</option>
                                          <option value="Muntinlupa">Muntinlupa</option>
                                          <option value="San Juan">San Juan</option>
                                          <option value="Navotas">Navotas</option>
                                          <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                                          <option value="Mandaluyong">Mandaluyong</option>
                                          <option value="Imus">Imus</option>
                                          <option value="Las Piñas">Las Piñas</option>
                                          <option value="Baguio">Baguio</option>
                                          <option value="Malabon">Malabon</option>
                                          <option value="Santa Rosa">Santa Rosa</option>
                                          <option value="Bacoor">Bacoor</option>
                                          <option value="Taytay">Taytay</option>
                                          <option value="Lucena">Lucena</option>
                                          <option value="Lipa">Lipa</option>
                                          <option value="Legazpi">Legazpi</option>
                                          <option value="Ormoc">Ormoc</option>
                                          <option value="Naga">Naga</option>
                                          <option value="San Fernando">San Fernando</option>
                                          <option value="Panabo">Panabo</option>
                                          <option value="Koronadal">Koronadal</option>
                                          <option value="Toledo">Toledo</option>
                                          <option value="Roxas City">Roxas City</option>
                                          <option value="Tabaco">Tabaco</option>
                                          <option value="Gingoog">Gingoog</option>
                                          <option value="Baybay">Baybay</option>
                                          <option value="Sorsogon City">Sorsogon City</option>
                                          <option value="Surigao City">Surigao City</option>
                                          <option value="Ozamiz">Ozamiz</option>
                                          <option value="Talisay">Talisay</option>
                                          <option value="Bayawan">Bayawan</option>
                                          <option value="Isabela">Isabela</option>
                                          <option value="Bogo">Bogo</option>
                                          <option value="Silay">Silay</option>
                                          <option value="Guihulngan">Guihulngan</option>
                                          <option value="Kabankalan">Kabankalan</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Tuguegarao">Tuguegarao</option>
                                          <option value="Dipolog">Dipolog</option>
                                          <option value="Talisay">Talisay</option>
                                          <option value="Tanauan">Tanauan</option>
                                          <option value="Cauayan">Cauayan</option>
                                          <option value="Calapan">Calapan</option>
                                          <option value="Bayugan">Bayugan</option>
                                          <option value="Surallah">Surallah</option>
                                          <option value="Cabadbaran">Cabadbaran</option>
                                          <option value="Maasin">Maasin</option>
                                          <option value="Kidapawan">Kidapawan</option>
                                          <option value="Bislig">Bislig</option>
                                          <option value="Bais">Bais</option>
                                          <option value="Cotabato City">Cotabato City</option>
                                          <option value="La Carlota">La Carlota</option>
                                          <option value="Bayugan">Bayugan</option>
                                          <option value="San Carlos">San Carlos</option>
                                          <option value="Legaspi">Legaspi</option>
                                          <option value="Laoag">Laoag</option>
                                          <option value="Baybay">Baybay</option>
                                          <option value="Bulacan">Bulacan</option>
                                          <option value="Samar">Samar</option>
                                          <option value="Sorsogon">Sorsogon</option>
                                          <option value="Surigao">Surigao</option>
                                          <option value="Tarlac">Tarlac</option>
                                          <option value="Zambales">Zambales</option>
                                          <option value="Marawi">Marawi</option>
                                          <option value="Catarman">Catarman</option>
                                          <option value="Calbayog">Calbayog</option>
                                          <option value="Pagadian">Pagadian</option>
                                          <option value="Tacloban">Tacloban</option>
                                          <option value="Digos">Digos</option>
                                          <option value="La Trinidad">La Trinidad</option>
                                          <option value="Trece Martires">Trece Martires</option>
                                          <option value="Koronadal">Koronadal</option>
                                          <option value="Catbalogan">Catbalogan</option>
                                          <option value="Dapitan">Dapitan</option>
                                          <option value="Tandag">Tandag</option>
                                          <option value="Baler">Baler</option>
                                          <option value="Libmanan">Libmanan</option>
                                          <option value="Mati">Mati</option>
                                          <option value="Bongao">Bongao</option>
                                          <option value="Virac">Vir</option>
                                      </select>
                                     
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Province</label>
                                      <select class="form-select"  id="input_province"  name="province" required>
                                          <option value="Abra">Abra</option> 
                                          <option value="Agusan del Norte">Agusan del Norte</option> 
                                          <option value="Agusan del Sur">Agusan del Sur</option> 
                                          <option value="Aklan">Aklan</option> 
                                          <option value="Antique">Antique</option> 
                                          <option value="Apayao">Apayao</option> 
                                          <option value="Aurora">Aurora</option> 
                                    
                                          <option value="Basilan">Basilan</option> 
                                          <option value="Bataan">Bataan</option> 
                                          <option value="Batanes">Batanes</option> 
                                          <option value="Batangas">Batangas</option> 
                                          <option value="Benguet">Benguet</option> 
                                          <option value="Biliran">Biliran</option> 
                                          <option value="Bohol">Bohol</option> 
                                          <option value="Bukidnon">Bukidnon</option> 
                                          <option value="Bulacan" > Bulacan</option> 

                                          <option value="Cagayan">Cagayan</option> 
                                          <option value="Camarines Norte">Camarines Norte</option> 
                                          <option value="Camarines Sur"> Camarines Sur</option> 
                                          <option value="Camiguin">Camiguin</option> 
                                          <option value="Capiz">Capiz</option> 
                                          <option value="Catanduanes">Catanduanes</option> 
                                          <option value="Cavite">Cavite</option> 
                                          <option value="Cebu">Cebu</option> 
                                          <option value="Cotabato">Cotabato</option> 

                                          <option value=">Davao de Oro">Davao de Oro</option> 
                                          <option value="Davao del Norte">Davao del Norte</option> 
                                          <option value="Davao del Sur">Davao del Sur</option> 
                                          <option value="Davao Occidental">Davao Occidental</option> 
                                          <option value="Davao Oriental">Davao Oriental</option> 
                                          <option value="inagat Islands">Dinagat Islands</option> 

                                          <option value="astern Samar">Eastern Samar</option> 

                                          <option value="Guimaras">Guimaras</option> 

                                          <option value="Ifugao">Ifugao</option> 
                                          <option value="Ilocos Norte">Ilocos Norte</option> 
                                          <option value="Ilocos Sur">Ilocos Sur</option> 
                                          <option value="Iloilo">Iloilo</option> 
                                          <option value="Isabela">Isabela </option> 

                                          <option value="Kalinga">Kalinga</option> 

                                          <option value="La Union"> La Union</option> 
                                          <option value="Laguna">Laguna</option> 
                                          <option value="Lanao del Norte">Lanao del Norte</option> 
                                          <option value="Lanao del Sur">Lanao del Sur</option> 
                                          <option value="Leyte">Leyte</option> 

                                          <option value="Maguindana">Maguindana</option> 
                                          <option value="Maguindanao del Norte">Maguindanao del Norte</option> 
                                          <option value="Maguindanao del Sur">Maguindanao del Sur</option> 
                                          <option value="Marinduque">Marinduque</option> 
                                          <option value="Masbate">Masbate</option> 
                                          <option value="Misamis Occidenta">Misamis Occidental</option> 
                                          <option value="Mountain Province">Mountain Province</option> 

                                          <option value="Abra">Negros Occidental</option> 
                                          <option value="Abra">Negros Oriental</option> 
                                          <option value="Abra">Northern Samar</option> 
                                          <option value="Abra">Nueva Ecija</option> 
                                          <option value="Abra">Nueva Vizcaya</option> 

                                          <option value="Occidental Mindoro">Occidental Mindoro</option> 
                                          <option value="Oriental Mindoro<">Oriental Mindoro</option> 

                                          <option value="Palawan"> Palawan</option> 
                                          <option value="Pampanga">Pampanga</option> 
                                          <option value="Pangasinan">Pangasinan</option> 

                                          <option value="Quezon">Quezon</option> 
                                          <option value="Quirino">Quirino</option> 

                                          <option value="Rizal">Rizal</option> 
                                          <option value="Romblon">Romblon</option> 

                                          <option value="Samar">Samar</option> 
                                          <option value="Sarangani">Sarangani</option> 
                                          <option value="Siquijor"> Siquijor</option> 
                                          <option value="Sorsogon">Sorsogon</option> 
                                          <option value="South Cotabato"> South Cotabato</option> 
                                          <option value="Southern Leyte">Southern Leyte</option> 
                                          <option value="Sultan Kudarat">Sultan Kudarat</option> 
                                          <option value="Sulo">Sulo</option> 
                                          <option value="Surigao del Norte">Surigao del Norte</option> 
                                          <option value="Surigao del Sur">Surigao del Sur</option> 

                                          <option value="Tarlac">Tarlac</option> 
                                          <option value="Tawi-Tawi">Tawi-Tawi</option> 

                                          <option value="Zambales"> Zambales</option> 
                                          <option value="Zamboanga del Nort">Zamboanga del Nort</option> 
                                          <option value="Zamboanga del Sur">Zamboanga del Sur</option> 
                                          <option value="Zamboanga city">Zamboanga Sibugay</option> 
                                    </select>
                                     
                                      </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="input_email" required>
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Secret Question</label>
                                      <select class="form-select" id="input_sec_ques" aria-label="Default select example">
                                        <option value="Who is your first love">Who is your first love</option>
                                        <option value="First pet name">First pet name</option>
                                        <option value="Mother Maiden name">Mother Maiden name</option>
                                      </select>
                                                                          
                                      </div>
                                      <div class="col">
                                      <label for="validationDefault02" class="form-label">Answer</label>
                                        <input type="text" class="form-control" id="input_answer" required>
                                     
                                      </div>
                                      <div class="col">
                                      </div>
                                    </div>
    
                                    <div class="row text-start" style="margin-top: 100px; justify-content: left;">
                                      <div class="col">
                                        <button type="button" id="changeinfo" class="btn btn-primary">Submit</button>
                                      <button type="button" class="btn btn-secondary">Cancel</button>
                                      </div>
                                </div>
                                  </div>

                                </div>
                                <!--2nd tab-->
                              <div class="tab-pane fade text-start" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style="padding: 10px;">
                              <div class="container"> 
                                 <img src="/shopping-cart-oche/Project/Image/back-img-capha.jpg"style="width: 400px; height: 300px; " id="imagePreview" class="img-thumbnail rounded text-start" alt="...">   
                                  <br>  
                                  <input type="file" class="form-control" aria-label="file example" id="imageInput" name="image" value="" style="margin-top: 5px;" required accept="image/png, image/jpeg, image/jpg">
                                <br>
                                <p style="color: rgb(14, 14, 14);"><label style="padding: 5px; background-color: rgb(241, 63, 63); width: 50px; border-radius: 5px; color: white;">Note!</label>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</p>
                                <a><button type="button" id="changepicture" class="btn btn-primary">Submit</button></a>
                               <a><button type="button" class="btn btn-secondary">Cancel</button></a>
                              </div>  
                            </div>
                            <!--end tag of 2nd tab-->
                                <!--3rd tab-->
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0" style="padding: 10px;height: 360px;">
                                  <div class="container text-start">
                                    <div class="row row-cols-1">
                                      <div class="col">
                                        <label for="validationDefault01" class="form-label">Current Password</label>
                                        <input type="text" id="currentPassword" class="form-control" id="validationDefault01" required>                                   
                                      </div>
                                      <div class="col">
                                        <label for="validationDefault01" class="form-label">New Password</label>
                                        <input type="text" id="newPassword" class="form-control" id="validationDefault01" required>                                   
                                      </div>
                                      <div class="col">
                                        <label for="validationDefault01" class="form-label">Re-type Password</label>
                                        <input type="text" id="retypePassword" class="form-control" id="validationDefault01" required>                         
                                      </div>
                                      <div class="col"  style="margin-top: 50px;">                                      
                                          <button type="button" id="changepassword" class="btn btn-primary">Change Password</button>
                                          <button type="button" class="btn btn-secondary">Cancel</button>    
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--end of 3rd tab-->
                            </div>
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
                          <input type="text" class="form-control" id="recipient" disabled >
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary sent_message" name="">Send message</button>
                    </div>
                  </div>
                </div>
              </div>
           </div>
          </div>

          <script>
                                    // feed back
                                    $('.sent_message').click (function () {
            let recipient = document.querySelector('#recipient').value;
            let message   = document.querySelector('#message').value;
            let exampleModale =document.querySelector('#exampleModal');
            let modalinstance =bootstrap.Modal.getInstance(exampleModale);
            let xhr = new XMLHttpRequest ();
            xhr.onreadystatechange =function () {
                if (this.readyState === 4 && this.status === 200) {
                    let data =JSON.parse (this.responseText);
                    if (data.success) {
                        modalinstance.hide()
                        Swal.fire({
                        icon: "success",
                        title: "Successfull send",
                        showConfirmButton: false,
                        timer: 1500
                        });
                    }
                }
            }   
            let url = "/shopping-cart-oche/Project/guest_user/guest/insert_feedback.php?recipient="
             + encodeURIComponent(recipient) + "&message=" + encodeURIComponent (message)
            xhr.open ("GET", url, true);
             xhr.send(); 
          })

            $(document).ready(function () {
                $('#changepicture').click(function () {
                  Swal.fire({
                  title: "Do you want to save the changes?",
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: "Save",
                  denyButtonText: `Don't save`
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    let name = document.querySelector('#firstname').innerHTML;
                    let imageInput = document.querySelector('#imageInput').files[0];
                    console.log(name)
                    let formData = new FormData();
                    formData.append('firstname', name);
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
                              
                                Swal.fire("Saved!", "", "success");
                                fetchData();
                            } else {
                                // Handle failure
                                alert("Failed to edit product.");
                            }
                        }
                    };
                    xhr.open("POST", "picture_update.php", true);
                    xhr.send(formData);
                  } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                  }
                });
                })
              })
                           // when click cart icon the page will be go on add to cart interface
                           document.querySelector('.shopping_cart').addEventListener('click', function(){
                            event.preventDefault(); // to avoid refresh website
                            console.log("POTa")
                    window.location.href="/shopping-cart-oche/Project/user_login/Add_to_Cart/add_to_cart.php";
                  });
              // Function to fetch data using AJAX to fetch all products
              function fetchData() {
                             let firstname = document.querySelector("#firstname");
                              let lastname = document.querySelector('#lastname');
                              let input_firstname = document.querySelector("#input_firstname");
                              let input_lastname = document.querySelector('#input_lastname');
                              let input_middlename = document.querySelector("#input_middlename");
                              let input_contact = document.querySelector('#input_contact');
                              let input_block = document.querySelector("#input_block");
                              let input_barangay = document.querySelector('#input_barangay');
                              let input_city = document.querySelector("#input_city");
                              let input_province = document.querySelector('#input_province');
                              let input_email = document.querySelector("#input_email");
                              let input_sec_ques = document.querySelector('#input_sec_ques');
                              let input_answer = document.querySelector("#input_answer");
                              let srcimage =document.querySelector('#srcimage');
                              let imagePreview =document.querySelector ('#imagePreview');
                              let recipient =document.querySelector('#recipient')
                              let xhr = new XMLHttpRequest();
                              xhr.onreadystatechange = function () {
                                if (this.readyState === 4 && this.status === 200) {
                                  let data = JSON.parse(this.responseText);

                                  // Assuming data is an array of objects
                                  data.forEach(info => {
                                    recipient.value = info.Email
                                    lastname.innerHTML = info.Last_name;
                                    firstname.innerHTML = info.First_name;
                                    input_firstname.value = info.First_name;
                                    input_lastname.value = info.Last_name;
                                    input_middlename.value = info.Middle_name;
                                    input_contact.value = info.Contact_No;
                                    input_block.value = info['Block_&_Lot'];
                                    input_email.value = info.Email;
                                    console.log(info.City)
                                    input_answer.value = info.Answer;
                                    srcimage.src = `/shopping-cart-oche/Project/user_login/my_account/user_image/${info.Image}`;
                                    imagePreview.src = `/shopping-cart-oche/Project/user_login/my_account/user_image/${info.Image}`;

                                    let barangay = `${info.Barangay}`;
                                    let city = `${info.City}`;
                                    let province = `${info.Province}`;
                                    let question = `${info.Secret_question}`;

                                    input_barangay.querySelectorAll('option').forEach(option => {
                                          // check if the option value matches the fetched barangay
                                          if (option.value === barangay) {
                                              // set the selected attribute if there is a match
                                              option.selected = true;
                                          }
                                      });

                                      // For selecting city, you need to use querySelectorAll as well
                                      input_city.querySelectorAll('option').forEach(option => {
                                          // check if the option values matches the fetched city
                                          if (option.value === city) {
                                              // set the selected attribute if there is a match
                                              option.selected = true;
                                          }
                                      });

                                      // For selecting province, you need to use querySelectorAll as well
                                      input_province.querySelectorAll('option').forEach(option => {
                                          // check if the option values matches the fetched province
                                          if (option.value === province) {
                                              // set the selected attribute if there is a match
                                              option.selected = true;
                                          }
                                      });

                                      // For selecting secret question, you need to use querySelectorAll as well
                                      input_sec_ques.querySelectorAll('option').forEach(option => {
                                          // check if the option values matches the fetched question
                                          if (option.value === question) {
                                              // set the selected attribute if there is a match
                                              option.selected = true;
                                          }
                                      });

                    
                                  });
                                }
                              };
                              xhr.open("GET", "/shopping-cart-oche/Project/user_login/user_login_home/info_user.php", true);
                              xhr.send();
                      }
              // function to fetch user information using ajax to fetch user info   

              document.querySelector('#changeinfo').addEventListener('click', function () {
                Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  let input_firstname = document.querySelector("#input_firstname").value;
                let input_lastname = document.querySelector('#input_lastname').value;
                let input_middlename = document.querySelector("#input_middlename").value;
                let input_contact = document.querySelector('#input_contact').value;
                let input_block = document.querySelector("#input_block").value;
                let input_barangay = document.querySelector('#input_barangay').value;
                let input_city = document.querySelector("#input_city").value;
                let input_province = document.querySelector('#input_province').value;
                let input_email = document.querySelector("#input_email").value;
                let input_sec_ques = document.querySelector('#input_sec_ques').value;
                let input_answer = document.querySelector("#input_answer").value;  
                
                let xhr = new XMLHttpRequest ();
                xhr.onreadystatechange =function () {
                  if (this.readyState === 4 && this.status === 200){
                    let data =JSON.parse(this.responseText);
                    if(data.success){
                      fetchData();
                      Swal.fire("Saved!", "", "success");
                    }
                  }
                }
                let url = "updateinfo.php?firstname=" +encodeURIComponent(input_firstname) + "&lastname=" +encodeURIComponent(input_lastname)+"&middlename=" + encodeURIComponent(input_middlename)+
                "&contact="+ encodeURIComponent(input_contact)+"&block=" +encodeURIComponent(input_block) + "&barangay=" +encodeURIComponent(input_barangay) + "&city=" +encodeURIComponent(input_city)+"&province=" +encodeURIComponent(input_province) +
                "&email=" +encodeURIComponent(input_email) + "&question=" +encodeURIComponent(input_sec_ques) + "&answer=" +encodeURIComponent(input_answer);
                xhr.open("GET",url,true)
                xhr.send();
                } else if (result.isDenied) {
                  Swal.fire("Changes are not saved", "", "info");
                }
              });
              })
              //changeinfo
              // change password
              document.querySelector('#changepassword').addEventListener('click', function () {
                let currentPassword =document.querySelector('#currentPassword').value;
                let newPassword =document.querySelector('#newPassword').value;
                let retypePassword =document.querySelector('#retypePassword').value;

                if (newPassword != retypePassword) {
                  Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please check the new password and retype password",
                  });
                }else{
                  Swal.fire({
                  title: "Do you want to save the changes?",
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: "Save",
                  denyButtonText: `Don't save`
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    let xhr = new XMLHttpRequest ();
                  xhr.onreadystatechange =function () {
                    if (this.readyState === 4 && this.status === 200) {
                      let data =JSON.parse (this.responseText);
                      if (data.success){
                        Swal.fire("Saved!", "", "success");
                        window.location.href ='/shopping-cart-oche/Project/user_login/logout/logout.php';
                      }else {
                        Swal.fire({
                          icon: "error",
                          title: "Oops...",
                          text: "Please check the password",
                        });
                      }
                    }
                  }
                  let url = "changePassword.php?currentPassword=" +encodeURIComponent(currentPassword) + "&newPassword=" + encodeURIComponent(newPassword) ;
                  xhr.open("GET",url,true);
                  xhr.send ();
                    
                  } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                  }
                });
                }
              })
              function fetchCart() {
                    let xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function() {
                          if (this.readyState === 4 && this.status === 200) {
                                  let data = JSON.parse(this.responseText);
                                  let count_of_cart = document.querySelector('#count_of_cart');

                                  count_of_cart.innerHTML = data.count;
                                  console.log(data.count)
                                  
                          }else {
                                  console.error("Failed to fetch cart count. Status code: " + this.status);
                              }
                      };
                      xhr.open("GET", "/shopping-cart-oche/Project/user_login/user_login_home/fetch_cart.php", true);
                      xhr.send();
                  }
              // change password
              window.onload = function() {
                fetchData();   
                fetchCart (); 
              };

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
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>c 