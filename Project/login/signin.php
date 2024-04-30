<?php 
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signin</title>
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="/shopping-cart-oche/Project/Image/logo.png">
        <link rel="stylesheet" href="signin.css">
          <!--This is bootstrap-->
          <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    </head>
    <body>
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">
            <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Ecommerce
          </a>
        </div>
      </nav>
      <!--this for layout -->
      <div class="container text container2">
        <div class="row justify-content-md">
        <div class="row">
          <div class="col ">
          <img src="/shopping-cart-oche/Project/Image/two.png" width="710px" height="501px" alt="">
          </div>
          <!-- this is form sign in-->
          <div class="col-md-4 form_signin">
            <?php 
                if (isset($_POST["sign_button"])){
                   //data base connection
                   $localhost = "localhost";
                   $user ="root";
                   $password="";
                   $dbname = "ecommerce";

                   $con = mysqli_connect($localhost,$user,$password,$dbname) or die ("Error");
                  // this is sql inject prevent
                   $user = mysqli_real_escape_string($con, $_POST["email"]);
                   $pass = mysqli_real_escape_string($con, $_POST["password"]);
                  
                   $sql = "SELECT * FROM admin WHERE Username='$user' AND Password='$pass'";
                   $result = $con->query($sql);
                   $row = $result->fetch_assoc();
                   $total  = $result-> num_rows;

                   if ($total > 0){
                      // redirect admin 
                      $_SESSION ['ffname']  = $row ['First_name'];
                      $_SESSION ['llname'] = $row ['Last_name'];
                      header ("Location: /shopping-cart-oche/Project/admin/dashboard/dashboard.php");
                   }else{
                      $sql = "SELECT * FROM user_information WHERE  Email='$user' AND Password='$pass'";
                      $result = $con -> query($sql);
                      $total = $result->fetch_assoc();
                      $row = $result->num_rows;

                      if ($row > 0){
                        $_SESSION ['ffname']  = $total ['First_name'];
                        $_SESSION ['llname'] = $total ['Last_name'];
                        $_SESSION ['email'] = $total ['Email'];
                        $_SESSION ['contact'] = $total ['Contact_No'];
                        $_SESSION ['block'] = $total ['Block_&_Lot'];
                        $_SESSION ['barangay'] = $total ['Barangay'];
                        $_SESSION ['city'] = $total ['City'];
                        $_SESSION ['province'] = $total ['Province'];
                        header ("Location: /shopping-cart-oche/Project/user_login/user_login_home/guest.php");
                      }
                      else {
                        echo '
                      <div style="margin-top:-30px" class="alert alert-warning alert-dismissible fade show" d-flex align-items-center" role="alert">
                       <div>
                       <i class="fa-solid fa-triangle-exclamation"></i><label style="margin-left: 10px;">Please Check Email or Password </label>
                        </div>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        ';
                      }
                   }

                }
            
            ?>
        <div class="container-fluid login">Log In</div>
            <form class="" action="" method="post">
              <div class="mb-3 form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
             </div>
             <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
                <a href="/shopping-cart-oche/Project/login/forget_password/forget.php" style="text-decoration: none;">Forget Password</a>
                <br>
                <br>
              <button type="submit" class="btn btn-primary form-control" name="sign_button">Sign in</button>
              <a  href="/shopping-cart-oche/Project/login/signup.php" class="btn btn-outline-dark form-control" style="margin-top: 10px; ">Sign up</a>
            </form>
          </div>
        </div>
      </div>
        
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
          <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body>
</html>