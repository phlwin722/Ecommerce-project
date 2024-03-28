
const captchaa = document.querySelector(".captachaa");
reloadBtn = document.querySelector('.reload-btn');
inputField = document.querySelector('.captcha_input');
checkBtn = document.querySelector('.check-btn');
statustxt = document.querySelector('.status-txt');
// string all captcha charactes in array
let allcharacters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O',
                     'P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d',
                     'e','f','g','h','i','j','k','l','m','n','o','p','q','r','s',
                     't','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9];
function getCaptcha (){
    for (let i = 0; i <6; i++) {//getting 6 random characters from the array
        let randomChar = allcharacters[Math.floor(Math.random()  * allcharacters.length)];
        captchaa.textContent += `${randomChar}`; // passing 6 random characters inside captcha text content
    }
}
getCaptcha();
reloadBtn.addEventListener ("click", () =>{
    captchaa.textContent ="";
    getCaptcha();
});

checkBtn.addEventListener("click", e =>{
   e.preventDefault();// preventing button from its defaul behavior 
   statustxt.style.display = "block";
   // adding space after each value if user entered captch becayse ive added spaces while generating
   let inputVal = inputField.value.split('').join(``);
    if (inputVal == captchaa.textContent){ // if captcha is matched
        statustxt.style.display ="";
        setTimeout (() => {// removing user entered value and change captcha textcontent after 4 seconds
            statustxt.style.display ="";
            inputField.value="";
            captchaa.textContent ="";
            getCaptcha();

        },4000); // removing user entered value and change captcha textcontent after 4 seconds
    }else {
        statustxt.style.color = "#ff0000"
        statustxt.textContent = "Captcha not matched. Please try again!";
    }
});

