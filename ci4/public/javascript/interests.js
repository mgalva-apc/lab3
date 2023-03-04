//CONTENT 1 DIV
var modalBtn = document.getElementById("berry-button1");
var modal = document.getElementById("berry-modal");
modalBtn.addEventListener('click', function() { modal.showModal() } );
var cancelBtn = document.getElementById("berry-cancel");
cancelBtn.addEventListener('click', function() { modal.close()} );
var vidSlides = document.getElementById("berry-slidebox").getElementsByClassName("berry-vids");
var txtSlides = document.getElementById("berry-slidebar").getElementsByClassName("slidebar-content");
var index = 0;
function showSlides(n){
    index += n;
    for (let i=0; i<vidSlides.length; ++i) { 
        vidSlides[i].style.opacity = "0";
        txtSlides[i].style.opacity = "0";
    }
    if (index >= vidSlides.length) {
        index = 0;
    }
    if (index < 0) {
        index=vidSlides.length-1;
    }
    vidSlides[index].style.opacity = "1"
    txtSlides[index].style.opacity = "1"
}

//pic rep
var container = document.getElementById("picrep"); //LESSON 2.1 - VARIABLES//
var slides = container.getElementsByClassName("picsforrep");

function showSlidesAuto(s, i) {
    s[i].style.opacity = "1"; //LESSON 7.1 - ARRAYS (array is 'slides' and is passed through s)//

    if (i == 0) { //LESSON 9.4 - IF ELSE//
        s[s.length-1].style.opacity = "0";
    } else {
        s[i-1].style.opacity = "0";
    }

    i++;
    if (i >= s.length) { //LESSON 9.3 - COMPARISONS//
        i = 0; //LESSON 5.2 - ASSINGMENTS//
    }
    setTimeout(function () { showSlidesAuto(s, i) }, 5000);
}

//CONTENT 2 DIV
var modalBtn2 = document.getElementById("berry-button2");
var modal2 = document.getElementById("berry-modal2");
modalBtn2.addEventListener('click', function() { modal2.showModal() } );
var cancelBtn2 = document.getElementById("berry-cancel2");
cancelBtn2.addEventListener('click', function() { modal2.close()} );
var vidSlides2 = document.getElementById("berry-slidebox2").getElementsByClassName("berry-vids2");
var txtSlides2 = document.getElementById("berry-slidebar2").getElementsByClassName("slidebar-content2");
var index2 = 0;
function showSlides2(n2){
    index2 += n2;
    for (let i=0; i<vidSlides2.length; ++i) { 
        vidSlides2[i].style.opacity = "0";
        txtSlides2[i].style.opacity = "0";
    }
    if (index2 >= vidSlides2.length) {
        index2 = 0;
    }
    if (index2 < 0) {
        index2=vidSlides2.length-1;
    }
    vidSlides2[index2].style.opacity = "1"
    txtSlides2[index2].style.opacity = "1"
}

//pic rep
var container2 = document.getElementById("picrep2");
var slides2 = container2.getElementsByClassName("picsforrep2");

function showSlidesAuto2(s, i) {
    s[i].style.opacity = "1"; 

    if (i == 0) { 
        s[s.length-1].style.opacity = "0";
    } else {
        s[i-1].style.opacity = "0";
    }

    i++;
    if (i >= s.length) { 
        i = 0; 
    }
    setTimeout(function () { showSlidesAuto2(s, i) }, 5000);
}

//simp rater
var simpPortraits = document.getElementsByClassName("simpfor");
var simpRatings = document.getElementsByClassName("simpytex");
var simpBtn = document.getElementById("picsimp");
var simpModal = document.getElementById("simpmodal");
simpBtn.addEventListener('click', function() { simpModal.showModal() } );
var simpicons = document.getElementsByClassName("iconsimp");
for (let i=0; i<simpicons.length; ++i) {
    simpicons[i].addEventListener('click', function() { simpModal.close() });
}
function showSimp(index) {
    for (var i=0; i<simpPortraits.length; ++i) {
      simpPortraits[i].style.opacity = "0";
      simpRatings[i].style.opacity = "0";
    }    
    simpPortraits[index].style.opacity = "1";
    simpRatings[index].style.opacity = "1";
  }

//infomodal
var infoBtn = document.getElementById("simpinfo");
var infoModal = document.getElementById("infoOnsimp");
infoBtn.addEventListener('click', function() { infoModal.showModal() } );
var canBtn = document.getElementById("berry-cancelagen");
canBtn.addEventListener('click', function() { infoModal.close()} );

showSlidesAuto(slides, 0);
showSlides(0);
showSlidesAuto2(slides2, 0);
showSlides2(0);
showSimp(0)