const imgFull = document.getElementById("fullbox");

const fullImg = document.getElementById("fullImg");
const nav = document.querySelector("#top-panel");

function closeImg(){
    imgFull.style.display = "none";
    nav.style.opacity = "1";
    document.body.style.overflow = "scroll";
    

}

function openFullImage(reference){
    imgFull.style.display = "flex";
    fullImg.src = reference;
    document.body.style.overflow = "hidden";
    nav.style.opacity = "0";
}


