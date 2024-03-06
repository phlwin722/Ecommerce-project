<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="container-fluid signup_container">
            <div class="container-fluid sign_up_logo" >
              Sign up
            </div>
          <form class="row g-3">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault01" name="fname" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationDefault02" name="lname" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Middle name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="mname" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationDefault03" class="form-label">Block & Lot</label>
                  <input type="text" class="form-control" id="validationDefault03" name="blk_lot" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">Province</label>
                  <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Abra">Abra</option> 
                     <option value="Abra"> Agusan del Norte</option> 
                     <option value="Abra">Agusan del Sur</option> 
                     <option value="Abra">Aklan</option> 
                     <option value="Abra">Antique</option> 
                     <option value="Abra">Apayao</option> 
                     <option value="Abra">Aurora</option> 
              
                     <option value="Abra">Basilan</option> 
                     <option value="Abra">Bataan</option> 
                     <option value="Abra">Batanes</option> 
                     <option value="Abra">Batangas</option> 
                     <option value="Abra">Benguet</option> 
                     <option value="Abra">Biliran</option> 
                     <option value="Abra">Bohol</option> 
                     <option value="Abra">Bukidnon</option> 
                     <option value="Abra" > Bulacan</option> 

                     <option value="Abra">Cagayan</option> 
                     <option value="Abra">Camarines Norte</option> 
                     <option value="Abra"> Camarines Sur</option> 
                     <option value="Abra">Camiguin</option> 
                     <option value="Abra">Capiz</option> 
                     <option value="Abra">Catanduanes</option> 
                     <option value="Abra">Cavite</option> 
                     <option value="Abra">Cebu</option> 
                     <option value="Abra">Cotabato</option> 

                     <option value="Abra">Davao de Oro</option> 
                     <option value="Abra">Davao del Norte</option> 
                     <option value="Abra">Davao del Sur</option> 
                     <option value="Abra">Davao Occidental</option> 
                     <option value="Abra">Davao Oriental</option> 
                     <option value="Abra">Dinagat Islands</option> 

                     <option value="Abra">Eastern Samar</option> 

                     <option value="Abra">Guimaras</option> 

                     <option value="Abra">Ifugao</option> 
                     <option value="Abra">Ilocos Norte</option> 
                     <option value="Abra">Ilocos Sur</option> 
                     <option value="Abra">Iloilo</option> 
                     <option value="Abra">Isabela </option> 

                     <option value="Abra">Kalinga</option> 

                     <option value="Abra"> La Union</option> 
                     <option value="Abra">Laguna</option> 
                     <option value="Abra">Lanao del Norte</option> 
                     <option value="Abra">Lanao del Sur</option> 
                     <option value="Abra">Leyte</option> 

                     <option value="Abra">Maguindana</option> 
                     <option value="Abra">Maguindanao del Norte</option> 
                     <option value="Abra">Maguindanao del Sur</option> 
                     <option value="Abra">Marinduque</option> 
                     <option value="Abra">Masbate</option> 
                     <option value="Abra">Misamis Occidental</option> 
                     <option value="Abra">Mountain Province</option> 

                     <option value="Abra">Negros Occidental</option> 
                     <option value="Abra">Negros Oriental</option> 
                     <option value="Abra">Northern Samar</option> 
                     <option value="Abra">Nueva Ecija</option> 
                     <option value="Abra">Nueva Vizcaya</option> 

                     <option value="Abra">Occidental Mindoro</option> 
                     <option value="Abra">Oriental Mindoro</option> 

                     <option value="Abra"> Palawan</option> 
                     <option value="Abra">Pampanga</option> 
                     <option value="Abra">Pangasinan</option> 

                     <option value="Abra">Quezon</option> 
                     <option value="Abra">Quirino</option> 

                     <option v>Rizal</option> 
                     <option value="Abra">Romblon</option> 

                     <option value="Abra">Samar</option> 
                     <option value="Abra">Sarangani</option> 
                     <option value="Abra"> Siquijor</option> 
                     <option value="Abra">Sorsogon</option> 
                     <option value="Abra"> South Cotabato</option> 
                     <option value="Abra">Southern Leyte</option> 
                     <option value="Abra">Sultan Kudarat</option> 
                     <option value="Abra">Sulo</option> 
                     <option value="Abra">Surigao del Norte</option> 
                     <option value="Abra">Surigao del Sur</option> 

                     <option value="Abra">Tarlac</option> 
                     <option value="Abra">Tawi-Tawi</option> 

                     <option value="Abra"> Zambales</option> 
                     <option value="Abra">Zamboanga del Nort</option> 
                     <option value="Abra">Zamboanga del Sur</option> 
                     <option value="Abra">Zamboanga Sibugay</option> 
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">City</label>
                  <select class="form-select" id="validationDefault04"   name="city" required>
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
                </div>
                <div class="col-md-4">
                  <label for="validationDefault05" class="form-label">Barangay</label>
                  <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                     
                  </select>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault03" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationDefault03" class="form-label">Passowrd</label>
                    <input type="password" class="form-control" id="validationDefault03" required>
                  </div>
                <div class="col-12">
                  <!--Capcha code-->
                  <div class="wrapper">
                    <header>Captcha</header>
                    <div class="captcha-area">
                      <div class="captcha-img">
                        <img src="/shopping-cart-oche/Project/Image/back-img-capha.jpg" alt="">
                        <span class="captacha"><i class="captachaa"></i></span> 
                      </div>
                      <button class="reload-btn"><i class="fa-sharp fa-solid fa-rotate-right"></i></button>
                    </div>
                    <form action="#" class="input_area">
                      <input type="text" class="form-control captcha_input"  placeholder="Enter captcha" required>
                   <!--   <button class="check-btn">Check</button> -->
                    </form>
                    <div class="status-txt"></div>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                      Agree to terms and conditions
                    </label>
                  </div>
                </div>
                <br>
                <div class="col-12">
                  <button class="btn btn-primary check-btn" type="submit">Sign up</button>
                </div>
              </form>
        </div>
        <script src="signup.js" defer></script>
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body><!--https://www.youtube.com/watch?v=_0B7wy05WHk-->
</html>