<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!--This is bootstrap-->
           <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <link rel="stylesheet" href="signup.css">
         <link rel="stylesheet" href="logo.css">
    </head>
    <body>
        <div class="container-fluid signup_container">
            <div class="container-fluid sign_up_logo" >
              <!--Insert php-->
              <?php 
                if (isset($_POST["sign_up"])){
                    $firstname = htmlspecialchars($_POST['fname']);
                    $lastname = htmlspecialchars($_POST['lname']); // Corrected input name
                    $middlename = htmlspecialchars($_POST['mname']);
                    $blockLot = htmlspecialchars($_POST['blk_lot']); // Corrected variable name
                    $province = htmlspecialchars($_POST['province']);
                    $city = htmlspecialchars($_POST['city']);
                    $barangay = htmlspecialchars($_POST['barangay']);
                    $email = htmlspecialchars($_POST['email']);     
                    $password = htmlspecialchars($_POST['password']); // You need to add a name attribute to this input field in HTML

                    $servername = "localhost";
                    $username = "root";
                    $dbpassword = ""; // Changed variable name to avoid conflict with form field
                    $dbname = "ecommerce";

                    // Create connection 
                    $con = new mysqli($servername, $username, $dbpassword, $dbname);

                    if ($con->connect_error){
                        die("Connection Failed: " . $con->connect_error);
                    }

                    $sql = "SELECT Email FROM user_information WHERE Email = ?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    
                    if ($result->num_rows > 0) {
                        echo '<script>
                            document.addEventListener("DOMContentLoaded", function (){
                                var mymoda2 = new bootstrap.Modal(document.getElementById("exampleModa2"));
                                mymoda2.show();
                            });
                        </script>';
                    }else {
                          // Using prepared statement to prevent SQL injection
                    $sql = $con->prepare("INSERT INTO user_information (First_name, Last_name, Middle_name, `Block_&_Lot`, Barangay, City, Province, Email, Password) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

                        // Bind parameters
                        $sql->bind_param("sssssssss", $firstname, $lastname, $middlename, $blockLot, $barangay, $city, $province, $email, $password);

                        // Execute query
                        if ($sql->execute()){
                        // Output success message
                        echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                            myModal.show();
                        });
                        </script>';
                            
                        } else {
                        // Output error message
                        echo 'Error: '. $sql . "<br>". $con->error;
                        }

                        // Close connection
                        $con->close();
                    }
                }
                ?>

                <!--end Insert php-->
              Sign up
            </div>
              <form class="row g-3 needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" required>
                    <div class="invalid-feedback">
                    Please provide First name
                    </div>
                </div>
                <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname" required>
                    <div class="invalid-feedback">
                    Please provide last name
                    </div>
                </div>
                <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Middle name</label>
                    <input type="text" class="form-control" id="validationCustom03" name="mname" required>
                    <div class="invalid-feedback">
                    Please provide Middle name
                    </div>
                </div>
                <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Contact No</label>
                    <input type="text" class="form-control" id="validationCustom03" name="mname" required>
                    <div class="invalid-feedback">
                    Please provide Contact No
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="validationCustom04" class="form-label">Block Lot & Street</label>
                    <input type="text" class="form-control" id="validationCustom04" name="blk_lot" required>
                    <div class="invalid-feedback">
                    Please provide Block Lot & Street.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Barangay</label>
                    <select class="form-select" id="validationCustom05" name="barangay" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="FVR">FVR</option>
                    <option value="San Rafael 1">San Rafael 1</option>
                    <option value="San Rafael 2">San Rafael 2</option>
                    <option value="San Rafael 3">San Rafael 3</option>
                    <option value="San Rafael 4">San Rafael 5</option>
                    <option value="Kaypian">Kaypian</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select barangay
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">City</label>
                    <select class="form-select" id="validationCustom06" name="city" required>
                    <option selected disabled value="">Choose...</option>
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
                    <div class="invalid-feedback">
                    Please select city
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Province</label>
                    <select class="form-select" id="validationCustom08" name="province" required>
                    <option selected disabled value="">Choose...</option>
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
                    <div class="invalid-feedback">
                    Please select province
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom07" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationDefault07" name="email" placeholder="name@example.com" required>
                    
                    <div class="invalid-feedback">
                    Please provide email
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom09" class="form-label">Password</label>
                    <input type="password" class="form-control" id="validationDefault09" name="password" required>
                    <div class="invalid-feedback">
                    Please provide password
                    </div>
                </div>
                <div class="col-md-6">
                <label for="validationCustom08" class="form-label">Secret Question</label>

                    <select class="form-select" id="validationCustom08" name="barangay" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Who is your first love">Who is your first love</option>
                       <option value="First pet name">First pet name</option>
                        <option value="Mother Maiden name">Mother Maiden name</option>
                    </select>

                    <div class="invalid-feedback">
                    Please provide Secret Question
                    </div>
                </div>
                <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Answer</label>
                    <input type="text" class="form-control" id="validationCustom03" name="mname" required>
                    <div class="invalid-feedback">
                    Please provide Answer
                    </div>
                </div>
                <div class="col-12">
                <div class="wrapper">
                    <header>Captcha</header>
                    <div class="captcha-area">
                      <div class="captcha-img">
                        <img src="/shopping-cart-oche/Project/Image/back-img-capha.jpg" alt="">
                        <span class="captacha"><i class="captachaa"></i></span> 
                      </div>
                      <a class="reload-btn"><i class="fa-sharp fa-solid fa-rotate-right"></i></a>
                    </div>
                    <form action="#" class="input_area">
                      <input type="text" class="form-control captcha_input"  placeholder="Enter captcha" required>
                   <!--   <button class="check-btn">Check</button> -->
                    </form>
                    <div class="status-txt"></div>
                  </div>
                </div>
                <br>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="sign_up">Sign up</button>
                </div>
                </form>
            </div>

            <!--Modal section successfull register-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="text-align: center; justify-content:center; align-items:center;">
            <div class="modal-dialog" >
                <div class="modal-content">
                <div class="modal-body">
                <button type="button" class="btn-close" style="margin-left: 430px;" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="check-container" style="margin-left:180px;">
                    <div class="check-background">
                        <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                        </div>
                    <div class="check-shadow"></div> 
                </div>
                <h3>Successfull Registered!</h3>
                <div >
                    <br>
                <button type="button" class="btn btn-secondary" id="ok" style="margin-bottom: 20px;" data-bs-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
            </div>
            <!--end Modal section successfull register-->

              <!--Modal section have a existing email account-->
              <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="text-align: center; justify-content:center; align-items:center;">
            <div class="modal-dialog" >
                <div class="modal-content">
                <div class="modal-body">
                <button type="button" class="btn-close" style="margin-left: 430px;" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="wrong-container" style="margin-left:180px;">
                    <div class="wrong-background">
                        <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                        </div>
                    <div class="wrong-shadow"></div> 
                </div>
                <h3>Already Email Registered!</h3>
                <div >
                    <br>
                <button type="button" class="btn btn-secondary" id="ok" style="margin-bottom: 20px;" data-bs-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
            </div>
            <!--end Modal ssection have a existing email account-->
        </div>
                <script>
                    // to check all filled are have value
                    (() => {
                    'use strict';

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    const forms = document.querySelectorAll('.needs-validation');

                    // Loop over them and prevent submission
                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add('was-validated');
                        }, false);
                    });
                })();
                  // to check all filled are have value

                const ok =document.getElementById("ok");
                ok.addEventListener("click",function(){
                    window.location.href="/shopping-cart-oche/Project/login/signin.php";
                });

                // if press ok button the page will be move in sign in page
            const okk = document.querySelector("ok");
                okk.addEventListener("click",function (){
                    window.location.href="/shopping-cart-oche/Project/login/signin.php";
                });

                </script>
        <script src="signup.js"></script>
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body><!--https://www.youtube.com/watch?v=_0B7wy05WHk-->
</html>