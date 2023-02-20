var container = document.getElementById("slideshow-container"); //LESSON 2.1 - VARIABLES//
var slides = container.getElementsByClassName("berry-slide");

function showSlides(s, i) {
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
    setTimeout(function () { showSlides(s, i) }, 5000);
}

showSlides(slides, 0);
