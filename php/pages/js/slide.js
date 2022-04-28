const slideWrap = document.querySelector(".img_type");
const sliderImg = document.querySelector(".slider_img"); 
const sliderInner = document.querySelector(".slider_inner");
const slider = document.querySelectorAll(".slider");
const sliderBtn = document.querySelector(".slider_arrow");        
const sliderBtnPrev = sliderBtn.querySelector(".prev");        
const sliderBtnNext = sliderBtn.querySelector(".next");        
const sliderDot = document.querySelector(".slider_dot");

let currentIndex = 0;
let sliderWidth = 100;
let sliderLength = slider.length;


let slideFirst = slider[0];
let slideLast = slider[sliderLength-1];   
let cloneFirst = slideFirst.cloneNode(true);   
let cloneLast = slideLast.cloneNode(true); 
let posInitial = "";
let dotIndex = "";
let sliderTimer = "";
let interval = 3000;

//이미지 복사 appendTo//prependYo // append//prepend
sliderInner.appendChild(cloneFirst);
sliderInner.insertBefore(cloneLast, slideFirst);

let sliderMoving = false;

// function gotoSlider(index){
//     sliderInner.classList.add("transition");
//     sliderInner.style.left = -sliderWidth * (index+1) + "%";
//     currentIndex = index;
//     dotActive();
// };

function gotoSlider(index){
    if(!sliderMoving){
        sliderInner.classList.add("transition");
        sliderInner.style.left = -sliderWidth * (index+1) + "%";
        currentIndex = index;
        sliderMoving = true;
        dotActive();
        moving();
    }

};

function moving(){
    setTimeout(() => {
        return sliderMoving = false;
    }, 700);
}

function dotInit(){
    for(let i=0; i<sliderLength; i++){
        dotIndex += "<a href='#' class='dot'></a>";
    };
    dotIndex += "<a href='#' class='play'></a>";
    dotIndex += "<a href='#' class='stop show'></a>";
    sliderDot.innerHTML = dotIndex;
    sliderDot.firstElementChild.classList.add("active");
};
dotInit();

//닷 버튼 활성화
function dotActive(){
    let dotAll = document.querySelectorAll(".slider_dot .dot");
    dotAll.forEach(dot => {     //전체 닷 메뉴 비활성화
        dot.classList.remove("active");
    });

    //마지막 이미지 왔을 때
    if(currentIndex == sliderLength){   
        dotAll[0].classList.add("active");
    } else if (currentIndex == -1){            
        dotAll[sliderLength -1].classList.add("active");//처음 이미지 왔을 때
    } else {
    //현재 보고 있는 이미지 닷 활성화
        dotAll[currentIndex].classList.add("active");
    }
}
document.querySelectorAll(".slider_dot .dot").forEach((dot, index) => {
    dot.addEventListener("click", () => {
        gotoSlider(index);
    })
});



function autuPlay(){
    sliderTimer = setInterval(() => {
        gotoSlider(currentIndex + 1);
    }, interval);
};

autuPlay();

function stopPlay(){
    clearInterval(sliderTimer);
};


sliderBtnPrev.addEventListener("click", () => {
    let prevIndex = currentIndex -1;
    gotoSlider(prevIndex);     
});

sliderBtnNext.addEventListener("click", () => {
    let nextIndex = currentIndex + 1;
    gotoSlider(nextIndex);
});

sliderInner.addEventListener("transitionend",  () => {
    sliderInner.classList.remove("transition");

    if(currentIndex == -1){
        sliderInner.style.left = -(sliderLength * sliderWidth) + "%";
        currentIndex = sliderLength -1;
    } if(currentIndex == sliderLength){
        sliderInner.style.left = -(1 * sliderWidth) + "%";
        currentIndex = 0;
    }
});


sliderInner.addEventListener("mouseenter", () => {
    stopPlay();
});
sliderInner.addEventListener("mouseleave", () => {
    if(document.querySelector(".play").classList.contains("show")){
        stopPlay();
    } else {
        autuPlay();
    }
});

document.querySelector(".play").addEventListener("click", () => {
    document.querySelector(".play").classList.remove("show");
    document.querySelector(".stop").classList.add("show");
    autuPlay();
})
document.querySelector(".stop").addEventListener("click", () => {
    document.querySelector(".stop").classList.remove("show");
    document.querySelector(".play").classList.add("show");
    stopPlay();
})