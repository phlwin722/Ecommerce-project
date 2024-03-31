// dropdown accordion
let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }

  // this is to link the new product html

  let new_button = document.getElementsByClassName(".new_button");
  new_button.addEventListener("click",function(){
      window.location.href="/shopping-cart-oche/Project/admin/product/newproduct.php";
  });
