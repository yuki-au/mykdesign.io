
// change the menu color, when it's scrolled
window.addEventListener("scroll", function () {
    var height = window.scrollY;
    if (height > 10) {
        main_nav.style.backgroundColor = '#f0bc02';
        main_nav.style.color = 'white';   
    }
    else {
        main_nav.style.backgroundColor = '#a3a19e';
    }

    if (height > 590){
      profile_img.style.opacity = "1";
    }

})

// hover animation for top

function zoomPhoto(img) {
  var imgfrom = img.src;
  var imgtitle = img.title;
  var imgdesc = img.alt;
 
  zoom.style.visibility="visible"; 
  zoom.style.opacity = "1";
    zoom_img.src = imgfrom;
    title_img.innerHTML = imgtitle;
    desc_img.innerHTML = imgdesc;
}



function closeImg() {
  zoom.style.visibility="hidden"; 
   zoom.style.opacity = "0" 
}



  function closeImg() {
    zoom.style.visibility="hidden"; 
    zoom.style.opacity = "0" 
  }

// change page in profile
var count = 0;
function slidePage() {

   if(count %2 == 0){
    hidden_pro2.style.opacity = "1";
    hidden_pro2.style.transform = "translateX(30px)";
    hidden_pro1.style.opacity = "0";
    hidden_pro1.style.transform = "translateX(0)";
 
   }else {
    hidden_pro2.style.opacity = "0";
    hidden_pro2.style.transform = "translateX(0)";
    hidden_pro1.style.opacity = "1";
    hidden_pro1.style.transform = "translateX(30px)";
   }

   count+=1;
}