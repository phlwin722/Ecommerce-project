<!DOCTYPE html>
<html>
    <head>
 <!--This is bootstrap-->
 <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet"href="logo.css">
    </head>
    <body>  

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
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
      <button type="button" class="btn btn-secondary" style="margin-bottom: 20px;" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>



<svg class="crossmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
  <circle class="crossmark__circle" cx="26" cy="26" r="25" fill="none"/>
  <path class="cross__path cross__path--right" fill="none" d="M16,16 l20,20" />
  <path class="cross__path cross__path--left" fill="none" d="M16,36 l20,-20" />
</svg>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  var $crossmark = $(".crossmark");

  function animateCross() {
    $crossmark.addClass("animateElement");
    setTimeout(function() {
      $crossmark.removeClass("animateElement");
    }, 1000);
  }

  setInterval(animateCross, 4000);
});
</script>


        
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body>
</html>