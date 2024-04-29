<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forget Password</title>
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
        <div class="row justify-content-md" style="margin-top: 50px;">
            <div class="col-12">
                <div class="col-md-12 text-center" style="font-size: 30px;">
                    <label for="validationDefault11" class="form-label">Forget Password</label>
                </div>
                <div class="col-12 position-relative">
                   
                    <div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 90px;">
                        <form class="row g-3 " novalidate>
                          <!--email-->
                            <div class="col-12 " id="emaill">
                                <label for="validationDefault11" class="form-label">Email</label>
                                <input type="email" class="form-control" id="validationDefault11" required>
                            </div>
                             <!--question-->
                            <div class="col-12 " id="secret_ques" style="display:none;">
                             <div class="col-md-12">               
                                  <label for="validationDefault13" class="form-label">Secret Question</label>
                                  <select class="form-select" id="validationDefault13" name="barangay" required>
                                  <option selected disabled value="">Choose...</option>
                                  <option value="Who is your first love">Who is your first love</option>
                                    <option value="First pet name">First pet name</option>
                                      <option value="Mother Maiden name">Mother Maiden name</option>
                                  </select>
                              </div>
                              <div class="col-md-12">
                                  <label for="validationDefault14" class="form-label">Answer</label>
                                  <input type="email" class="form-control" id="validationDefault16" required>
                              </div>
                            </div>
                            <!--new password-->
                            <div class="col-12 " id="newpassword" style="display:none;">
                               <div class="col-12">
                               <label for="validationDefault11" class="form-label">New  password</label>
                                <input type="email" class="form-control" id="validationDefault17" required>
                               </div>

                               <div class="col-12">
                               <label for="validationDefault11" class="form-label">Retype new password</label>
                                <input type="email" class="form-control" id="validationDefault18" required>
                               </div>
                            </div>
                            <!--email-->
                            <div class="col-12" id="verify">
                              <button class="btn btn-primary" id="Verify" type="submit">Verify</button>
                            </div>
                            <!--secret qyest-->
                            <div class="col-12" id="secret" style="display:none;">
                              <button class="btn btn-primary" id="Verifysecret" type="submit">Verify</button>
                            </div>
                            <!--new password-->
                            <div class="col-12" id="password" style="display:none;">
                              <button class="btn btn-primary" id="newpasswordd" type="submit">Update</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <script>
          // newpassword
          document.querySelector('#newpasswordd').addEventListener('click', function () {
            event.preventDefault();
            let email = document.querySelector('#validationDefault11').value;
            let newpassword = document.querySelector('#validationDefault17').value;       
            let retypepass = document.querySelector('#validationDefault18').value;

            if (newpassword != retypepass){
              alert('Please correct new password or retype passowrd')
            }else {
              let xhr = new XMLHttpRequest();
            xhr.onreadystatechange =function ( ) {
              if (this.readyState=== 4   && this.status === 200 ){
                let data = JSON.parse(this.responseText);

                if (data.success){
                  window.location.href="/shopping-cart-oche/Project/login/signin.php"
                }
              }
            }
            xhr.open("GET","user_info_update.php?newpassword=" + newpassword + "&email=" + email ,true);
            xhr.send();   
            }
          })
          // secret question
          document.querySelector('#Verifysecret').addEventListener('click',function ( ) {
            event.preventDefault();
            let selectquestion =document.querySelector('#validationDefault13').value;
            let answer =document.querySelector('#validationDefault16').value;    

            let secret_ques = document.querySelector('#secret_ques');       
            let secret = document.querySelector('#secret');

            let newpassword = document.querySelector('#newpassword');       
            let password = document.querySelector('#password');
            console.log(answer)
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange =function ( ) {
              if (this.readyState=== 4   && this.status === 200 ){
                let data = JSON.parse(this.responseText);

                if (data.success){
                  secret.style.display="none";
                  secret_ques.style.display="none";
                  newpassword.style.display="block";
                  password.style.display="block";
                }else {
                  alert  ('Not Correct');  
                }
              }
            }
            xhr.open("GET","verify_user.php?secret_quest=" + selectquestion + "&answer=" + answer ,true);
            xhr.send();
          })
          ///  email
          document.querySelector('#Verify').addEventListener('click', function () {
              event.preventDefault();
              let email = document.querySelector('#validationDefault11').value;
              let secret_ques = document.querySelector('#secret_ques');
              let emaill = document.querySelector('#emaill');
              let verify = document.querySelector('#verify');
 
              let xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function () {
                  if (this.readyState == 4 && this.status == 200) {
                      let data = JSON.parse(this.responseText);
                      if (data.success) {
                          emaill.style.display = "none";
                          verify.style.display = "none";
                          secret.style.display = "block";
                          secret_ques.style.display = "block";
                      } else {
                          alert('Email does not exist');
                          secret_ques.style.display = "none";
                      }
                  }
              };

              xhr.open("GET", "forget_user_verify.php?email=" + email, true);
              xhr.send();
          });

        </script>
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
          <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body>
</html>