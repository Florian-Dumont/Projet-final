

$(".option").hover(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
});

// *tentative* supression de css-6kluu6 du DOM

window.addEventListener("DOMContentLoaded", (event) => {
   console.log("DOM entièrement chargé et analysé");
   
   
  });
// //  const element = document.getElementsByClassName('.css-lgbo0i').remove();
// const element = document.querySelector("span.css-lgbo0i")
// element.a.removeChild(element);
// //    element.style['display'] = "none";
//    // document.getElementsByClassName('.css-6kluu6').hidden = true;
   
//    // element.removeAttribute("style");
//    element.style.width = 0;

// console.log(element);

//

const changeButton = document.querySelector(".fa-caret-down");
if(changeButton !=null){
        
        function change() {
                let drop = document.querySelector(".chatbox");
                const elements = document.querySelectorAll(".fa-caret-down");
                for (let element of elements) {
                    element.classList.toggle("transformed-state");
                    drop.classList.toggle("transformed-hidden");
                    drop.classList.toggle("transformed-toggle");
//    console.log(drop)
//    console.log(change)
   
  }
}


changeButton.addEventListener("click", change);
        
        
}
if(document.querySelector("#eyes") !== null){
        let eyes = document.querySelector('#eyes');
        document.querySelector('#eyes').addEventListener("click", activatedEyes);
        let eyes_2 = document.querySelector('#eyes_2');
        document.querySelector('#eyes_2').addEventListener("click", activatedEyes_2);
        
}   

        function activatedEyes() {
                let password_1 = document.querySelector('#password_1');
                // let password_2 = document.querySelector('#password_2');
                if(password_1.type == 'password'){
                        password_1.setAttribute('type', 'text');
                        eyes.classList.remove('fa-eye-slash');
                        eyes.classList.add('fa-eye');
                        // eyes.setAttribute('style', 'color:red');
                }else{
                        password_1.setAttribute('type', 'password');
                        eyes.classList.add('fa-eye-slash');
                        eyes.classList.remove('fa-eye');
                        // eyes.setAttribute('style', 'color:white');
                }
        } 
        function activatedEyes_2(){
                // let password_1 = document.querySelector('#password_1');
                let password_2 = document.querySelector('#password_2');
                if(password_2.type == 'password'){
                        password_2.setAttribute('type', 'text');
                        eyes_2.classList.remove('fa-eye-slash');
                        eyes_2.classList.add('fa-eye');
                        // eyes.setAttribute('style', 'color:red');
                }else{
                        password_2.setAttribute('type', 'password');
                        eyes_2.classList.add('fa-eye-slash');
                        eyes_2.classList.remove('fa-eye');
                        // eyes.setAttribute('style', 'color:white');
                }
        }





