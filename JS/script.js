"use strict"

$(".option").hover(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
});

// supression de css-6kluu6 du DOM

window.addEventListener("DOMContentLoaded", (event) => {
   console.log("DOM entièrement chargé et analysé");
   
   
  });
  const element = document.getElementsByClassName('css-6kluu6').style.display = "none";
//    element.style['display'] = "none";
   document.getElementsByClassName('.css-6kluu6').hidden = true;

console.log(element);




// css-6kluu6