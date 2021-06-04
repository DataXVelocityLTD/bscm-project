const slidePage = document.querySelector(".slidepage");
const secondTxt = document.querySelector(".second-text");

const createBtn = document.querySelector(".create-btn");
const createBtnAgain = document.querySelector(".second-create");
const declineBtn = document.querySelector(".go-back");
const nextBtn = document.querySelector(".next-button");
const progressTxt = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let max = 3;
let current = 1;

createBtn.addEventListener("click", function(){
    slidePage.style.marginLeft = "-25%";
    // const text = document.getElementById("first-text"); 
    // text.style.color = "#d43f8d";
    bullet[current - 1].classList.add("active");
    progressTxt[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
});
createBtnAgain.addEventListener("click", function(){
    slidePage.style.marginLeft = "-50%";
    // const text = document.getElementById("second-text");
    // text.style.color = "#d43f8d";
    secondTxt.innerHTML = "Password";
    bullet[current - 1].classList.add("active");
    progressTxt[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
});
declineBtn.addEventListener("click", function(){
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressTxt[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
nextBtn.addEventListener("click", function(){
    // const text = document.getElementById("third-text");
    // text.style.color = "#d43f8d";
    bullet[current - 1].classList.add("active");
    progressTxt[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
 
});