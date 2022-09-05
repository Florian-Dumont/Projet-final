

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


function change() {
let drop = document.querySelector(".chatbox");
  const elements = document.querySelectorAll(".fa-caret-down");
  for (let element of elements) {
    element.classList.toggle("transformed-state");
    drop.classList.toggle("transformed-hidden")
   //  drop.classList.remove("transformed-hidden")
   console.log(drop)
   console.log(change)
   
  }
}

const changeButton = document.querySelector(".fa-caret-down");
changeButton.addEventListener("click", change);

