let navBar = document.querySelector("#menu_responsive");
let content_left = document.querySelector(".content-left");
let btn_close = document.querySelector("#btn_close");


navBar.addEventListener("click",()=>{
    content_left.style.display="block";
    content_left.style.animation="animNavmobile 0.7s  linear";

})

btn_close.addEventListener("click",()=>{

  
    content_left.style.animation="animNavmobileClose 0.7s  linear";

    setTimeout(() => {
        content_left.style.display="none";
    }, 100);
})

