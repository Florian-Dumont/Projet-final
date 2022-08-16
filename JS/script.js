"use strict"

$(".option").hover(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
});

// supression de css-6kluu6 du DOM

window.addEventListener("DOMContentLoaded", (event) => {
   console.log("DOM entièrement chargé et analysé");
   
   
  });
  const element = document.getElementByClassName('css-6kluu6');
   element.style.display = "none";




console.log("hello");

// css-6kluu6