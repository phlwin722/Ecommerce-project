<?php 
  session_start();

    if (!isset($_SESSION['ffname'])){
      header("Location: /shopping-cart-oche/Project/admin/logout/logout.php");
    }
    $firtname = $_SESSION['ffname'];
    $lastname = $_SESSION['llname'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
           <link rel="stylesheet" href="myacct.css"> 
           <title>My Account</title>
           <!--the creator of this website-->
           <meta name="autor" content="Dexter Jamero">
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
                <form class="d-flex" role="search" style="margin-right: 15px;">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" height="25" style="border-radius: 50%;">
                     <!--Name of the user-->
                     <?php echo $firtname ." ". $lastname;?>
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
          <!--this is color of 2nd container-->
          <div class="container text-center" style=" max-width: 100%; padding: 0px;  background-color: rgba(224, 223, 221, 0.966);">
                     <div class="row" id="row" style="padding: 0px;">
                        <div class="col-md-auto" id="wid">
                          <ul class="nav flex-column">
                            <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                     
                        </h4>
                        <hr style="color: white;">
                        
                        <li class="nav-item">
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Projet/admin/dashboard/dashboard.php"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
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
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php">  <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><img width="" height="25" src="https://img.icons8.com/windows/32/FFFFFF/total-sales--v1.png" alt="total-sales--v1"/>
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
                            <!-- this is settings-->
                            <button class="accordion nav-link" style="color: white;" > <i class="fa-solid fa-gear" style="margin-right:10px;"></i> Setting</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/Project/admin/product/product.html">List product</a></li>
                                <li><a class="dropdown-item" href="#">Archive product</a></li>
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
                            <a class=" nav-link" style="color: white;" href="/shopping-cart-oche/Projet/admin/dashboard/dashboard.php"><img width="20" height="20" src="https://img.icons8.com/material/24/FFFFFF/dashboard-layout.png " style="margin-right:10px;" alt="dashboard-layout"/>Dashboard</a>
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
                            <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/Feedback/feedback.php">  <i class="fa-solid fa-comment" style="margin-right:10px;"></i>
                              Feedback
                          </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/shopping-cart-oche/Project/guest_user/guest.php"><img width="" height="25" src="https://img.icons8.com/windows/32/FFFFFF/total-sales--v1.png" alt="total-sales--v1"/>
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
                            <!-- this is settings-->
                            <button class="accordion nav-link" style="color: white;" > <i class="fa-solid fa-gear" style="margin-right:10px;"></i> Setting</button>
                            <div class="panel">
                              <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="/Project/admin/product/product.html">List product</a></li>
                                <li><a class="dropdown-item" href="#">Archive product</a></li>
                              </ul>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;"  href="/shopping-cart-oche/Project/admin/logout/logout.php"><i class="fa-solid fa-right-from-bracket"style="margin-right:10px;" ></i>Logout</a>
                        </li>
                        </ul> 
                    </div>        
                    <!--this is second grid of my account-->
                        <div class="col-md-auto"  id="grid_size" style=" background-color: rgba(224, 223, 221, 0.966); padding-top: 2vh;">
                          <div class="co" >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <label style="padding: 10px; font-weight: bold;">PROFILE ACCOUNT</label>
                              <li class="nav-item" role="presentation" style="margin-left: 429px;">
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
                                      <label for="validationDefault03" class="form-label">Middle name</label>
                                      <input type="text" class="form-control" id="input_middlename" required>
                                    
                                    </div>
                                  </div>
                                  <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                      <label for="validationDefault04" class="form-label">Secret Question</label>
                                      <select class="form-select" id="selectedQuestion" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="What is your first pet name">What is your first pet name</option>
                                        <option value="Mother Maiden name">Mother Maiden name</option>
                                      </select>
                                    </div>
                                    <div class="col">
                                      <label for="validationDefault05" class="form-label">Answer</label>
                                      <input type="text" class="form-control" id="input_answer" required>
                                    </div>
                                    <div class="col">
                                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="input_email">
                                    </div>
                                  </div>
  
                                  <div class="row text-start" style="margin-top: 100px; justify-content: left;">
                                     <div class="col">
                                      <button type="button" class="btn btn-primary">Submit</button>
                                     <button type="button" class="btn btn-secondary">Cancel</button>
                                     </div>
                               </div>
                                </div>

                              </div>
                              <!--2nd tab-->
                              <div class="tab-pane fade text-start" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style="padding: 10px;">
                              <div class="container"> 
                                 <img src="/shopping-cart-oche/Project/Image/back-img-capha.jpg" class="img-thumbnail rounded text-start" alt="...">   
                                  <br>  
                                <button type="button" class="btn btn-light">Select Image</button>
                                <br>
                                <p style="color: rgb(14, 14, 14);"><label style="padding: 5px; background-color: rgb(241, 63, 63); width: 50px; border-radius: 5px; color: white;">Note!</label>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</p>
                                <a><button type="button" class="btn btn-primary">Submit</button></a>
                               <a><button type="button" class="btn btn-secondary">Cancel</button></a>
                              </div>  
                            </div>
                            <!--end tag of 2nd tab-->
                              <!--3rd tab-->
                              <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0" style="padding: 10px;">
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
                                    <div class="col"  style="margin-top: 20px;">                                      
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
            <script>
                // fetch information
                function fetchinfo (){
                  let input_lastname = document.querySelector('#input_lastname');
                  let input_firstname = document.querySelector('#input_first_name');
                  let input_middlename = document.querySelector('#input_middlename');
                  let selectedQuestion = document.querySelector('#selectedQuestion');
                  let input_answer = document.querySelector('#input_answer');
                  let input_email = document.querySelector('#input_email');

                  let xhr = new XMLHttpRequest ();
                  xhr.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        let data = JSON.parse(this.responseText);

                        data.forEach(info => {
                            input_lastname.innerHTML =`${data.Last_name}`;
                            input_firstname.innerHTML =`${data.First_name}`;
                            input_lastname.innerHTML =`${data.First_name}`;
                            input_lastname.innerHTML =`${data.First_name}`;
                            input_lastname.innerHTML =`${data.First_name}`;
                            input_lastname.innerHTML =`${data.First_name}`;
                        });
                    }
                  }
                  xhr.open ("GET", "admin_fetch_info.php", true);
                  xhr.send ();
                }
                // fetch information

                // change password
                document.querySelector('#changepassword').addEventListener("click", function () {
                    let currentPassword = document.querySelector('#currentPassword').value;
                    let newPassword = document.querySelector('#newPassword').value;
                    let retypePassword = document.querySelector("#retypePassword").value;

                    if (newPassword !== retypePassword) {
                        alert("Please check the new password or retype password");
                    } else {
                        let xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                            if (this.readyState === 4 && this.status === 200) {
                                let data = JSON.parse(this.responseText);
                                if (data.success) {
                                    window.location.href = "/shopping-cart-oche/Project/admin/logout/logout.php";
                                } else {
                                    alert("Password update failed. Please type current password.");
                                }
                            }
                        }
                        // Construct the URL with parameters 
                        let url = "changepassword.php?currentpassword=" + encodeURIComponent(currentPassword) + "&newpassword=" + encodeURIComponent(newPassword);

                        xhr.open("GET", url, true);
                        xhr.send();
                    }
                });
                // change password


            </script>
             <script src="myacct.js" defer></script>
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
          <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body>