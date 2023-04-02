let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

// for gallery pop-up effect controls
var fullImgBox = document.getElementById("fullImgBox") ;
var fullImg = document.getElementById("fullImg") ;

function openFullImg(pic){
    fullImgBox.style.display = "flex" ;
    fullImg.src = pic ;
}
function closeFullImg(){
    fullImgBox.style.display = "none" ;
}