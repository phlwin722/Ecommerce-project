<?php 
                 // session checking if user has login
                  session_start();
                  if (!isset($_SESSION['ffname'])){
                      header ('Location: /shopping-cart-oche/Project/user_login/logout/logout.php');
                  }
                  
                  $firstname = $_SESSION['ffname'];
                  $lastname = $_SESSION['llname'];
                  $email = $_SESSION ['email'];
                  $contact = $_SESSION ['contact'];
                  $block = $_SESSION ['block'];
                  $barangay = $_SESSION['barangay'];
                  $city = $_SESSION ['city'];
                  $province = $_SESSION ['province'];

                //            <!--start sent feedback php-->
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error){
                    die("Connection error" . $con->connect_error);
                }

                // feedback 
                if (isset($_POST["sent_message"])){
                    $recipient = mysqli_real_escape_string($con, $_POST['recipient']);
                    $message = mysqli_real_escape_string($con, $_POST['message']);

                    // Prepare and bind statement 
                    $stmt = $con->prepare("INSERT INTO feedback (Email, Description) VALUES (?, ?)");
                    // Use 's' for string data type
                    $stmt->bind_param("ss", $recipient, $message);
                    
                    if ($stmt->execute()){
                      echo '<script>
                                document.addEventListener("DOMContentLoaded", function (){
                                    var modal = new bootstrap.Modal(document.getElementById("exampleModal2"));
                                    modal.show();
                                });
                            </script>';
                    }             
              // Close connection
              $stmt->close();
              $con->close();
              }

            
          ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/user_login/Payment/payment.css">
           <!--Favicon-->
           <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
  
        <title>Payment</title>
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
                    <button class="btn shopping_cart" type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!--my account-->
            <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" height="25" style="border-radius: 50%;">
                      <!--Name of user-->
                      <?php echo $firstname ." ". $lastname;?>
                    </button>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/logout/logout.php">Logout</a></li>
                      <li><hr class="dropdown-divider"></li>
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
                  <div class="card position-relative" style="width: 100%; padding:10px; height:100px;">
                        
                        <div class="" style="font-size:18px; margin-left:15px;">
                            <i class="fa-solid fa-location-dot" style="color: #de0202;"></i>
                                Delivery Address
                        </div>

                      <div class="card-body" style="position:relative;">
                          <label style="font-weight:bold;" id="full_name">  
                               <!--?php echo $firstname ." ". $lastname . " ". $contact;?-->
                              </label>
                          <label id="address"> <!-- ?php echo " " .$block . " " . $barangay. " " . $city. " " . $province? --></label>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn " style="color:blue;" data-bs-toggle="modal" data-bs-target="#change">
                            Change
                            </button>
                            <!-- Button trigger modal -->
                      </div>    
                        
                  </div>

                  <!--products-->
                  <div class="row cem" style=""> 
                      <div class="col-md-12"></div>
                  </div>
                  <div class="card sticky-bottom" style="width: 100%; padding:10px; height:70px;">
                      <div class="card-body" style="position:relative;">
                          <input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox">
                          <label style="" for="selectAllCheckbox">Select All</label>
                          <label style=" margin-left:20px;" id="DeleteDataAll" for="">Delete All</label>
                          <label class="card-text" style=" position:absolute; right:350px;" id="totalItemSelect">Total (0 item)</label>
                          <label class="card-text" style=" position:absolute; right:250px;" id="totalPriceDisplay"></label>
                          <button type="button" class="btn btn-primary" style="font-weight:bold; position:absolute; right:40px ; top:9px;">Buy now</button>
                      </div>
                  </div>
              </div>
          </div>


          
            <!--end Display product-->

              <!---->
                
                  <!-- modal edit -->
                    <!-- Modal -->
                    <div class="modal fade" id="change" tabindex="-1" style="margin-right: 200px;" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                            
                        </div>
                        <div class="modal-body">
                            <form class="" action="edit_address.php" method="post">
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" id="floatingInput" name="contact" value="<?php echo $contact ;?>" >
                                    <label for="floatingInput">Contact</label>
                                    
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" id="floatingInput" name="block_lot" value="<?php echo $block ;?>" placeholder="name@example.com">
                                    <label for="floatingInput">Block & Lot</label>
                                    
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select" id="mySelect" onclick="removePlaceholderOption()" name="barangay" required>
                                    <option selected disabled value="<?php echo $barangay;?>"><?php echo $barangay;?></option>
                                    <option value="FVR">FVR</option>
                                    <option value="San Rafael 1">San Rafael 1</option>
                                    <option value="San Rafael 2">San Rafael 2</option>
                                    <option value="San Rafael 3">San Rafael 3</option>
                                    <option value="San Rafael 4">San Rafael 5</option>
                                    <option value="Kaypian">Kaypian</option>
                                </select>
                                <label for="floatingInput">Barangay</label>
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select"  id="mySelect" onclick="removePlaceholderOption()"  name="cityy" value="" required>
                                    <option selected disabled value="<?php echo $city ;?>"><?php echo $city ;?></option>
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
                                    <option value="Virac">Vir
                                    </select>
                                    <label for="floatingInput">City</label>
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select"  id="mySelect" onclick="removePlaceholderOption()"  name="province" required>
                                <option selected disabled value="<?php echo $barangay;?>"><?php echo $province;?></option>
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
                                    <option value="Virac">Vir
                                    </select><label for="floatingInput">Province</label>
                                </div>
                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="editChange">Save changes</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                     <!-- modal edit -->
              <!---->

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
                          <button type="button" class="btn btn-primary">Send message</button>
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
                              searchResults.innerHTML = '<div class="col-md-12 text-center" id="no_result">  <p style="font-size:40px; color:red; padding: 170px; 0px 30px 0px">No results found!</p>  </div>';
                          } else {
                              const tableBody = document.querySelector('.cem');
                              tableBody.innerHTML = ''; // Clear previous results
                              data.forEach(product => {
                                  const row = `<div class="col-md-3">
                                                  <div class="card" style="width: 18rem; padding:10px; height:420px;">
                                                    <input class="form-check-input productCheckbox" type="checkbox" value="" id="" data-product-code="${product.Product_code}">
                                                      <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="100" height="150" alt="${product.Product_name}" class="card-img-top" width="150" height="170">  
                                                      <div class="card-body" style="position:relative;">
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
                                              </div>`;
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
                  } else {
                      // If search query is empty, hide the "No results found" message
                      document.querySelector('#no_result').style.display = "none";
                      // Fetch and display all products
                      fetchData();
                  }
              });

              // Function to fetch data using AJAX to fetch all products
              function fetchData() {
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        let data = JSON.parse(this.responseText);

                        const full_name = document.querySelector('#full_name');
                        const address = document.querySelector('#address');

                        // Clear previous content
                        full_name.innerHTML = "";
                        address.innerHTML = "";

                        data.forEach(product => {
                            // Concatenate full name
                            full_name.innerHTML += `${product.First_name} ${product.Last_name} ${product.Contact_No} `;
                            // Concatenate address
                            address.innerHTML += `${product["Block_&_Lot"]} ${product.Barangay} ${product.City} ${product.Province}`;
                        });

                        populateTable(data);
                    }
                };
                xhr.open("GET", "user_information_fetch.php", true);
                xhr.send();
            }


              // Function to populate table with fetched data
              function populateTable(data) {
               

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

                  calculateTotalPrice(); // Calculate total price initially
              }

              // Function to recalculate and display total price
              function calculateTotalPrice() {
                  let totalPrice = 0;
                  let totalItems = 0; // Initialize totalItems variable
                  const productCheckboxes = document.querySelectorAll('.productCheckbox');

                  // Iterate through each product checkbox
                  productCheckboxes.forEach(checkbox => {
                      if (checkbox.checked) {
                          // Get the corresponding total price element for the checked product
                          let productCode = checkbox.dataset.productCode;
                          let totalPriceElement = document.getElementById(`totalprice_${productCode}`);
                          if (totalPriceElement) {
                              // Parse the total price value and add it to the total price accumulator
                              let price = parseFloat(totalPriceElement.value);
                              if (!isNaN(price)) {
                                  totalPrice += price;
                                  totalItems++; // Increment totalItems when a checkbox is checked

                              }
                          }
                      }
                  });

                  // Display the total price somewhere on the page
                  document.getElementById('totalPriceDisplay').textContent = "₱ " + totalPrice.toFixed(2);
                  document.getElementById('totalItemSelect').textContent = `Total (${totalItems} item)`;
              }

              function removePlaceholderOption (){
                var selectElement = document.getElementById("mySelect");
                var placeholderOption = selectElement.options[0];
                
                // Remove the placeholder option
                selectElement.removeChild(placeholderOption);
                
                // Remove the onclick event to prevent further removals
                selectElement.onclick = null;
              }

              // Call the fetchData function when the page loads
              window.onload = function() {
                fetchData();
                removePlaceholderOption();
              };
          </script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>