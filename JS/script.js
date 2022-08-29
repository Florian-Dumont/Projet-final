"use strict"

$(".option").hover(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
});

// supression de css-6kluu6 du DOM

window.addEventListener("DOMContentLoaded", (event) => {
   console.log("DOM entièrement chargé et analysé");
   
   
  });
//  const element = document.getElementsByClassName('.css-lgbo0i').remove();
const element = document.querySelector("span.css-lgbo0i")
element.a.removeChild(element);
//    element.style['display'] = "none";
   // document.getElementsByClassName('.css-6kluu6').hidden = true;
   
   // element.removeAttribute("style");
   element.style.width = 0;

console.log(element);




// css-6kluu6