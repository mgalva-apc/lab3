var personaGoddess = document.getElementById("goddess-stuff");
var personaBea = document.getElementById("bea-stuff");
var goddessTitle = document.getElementsByClassName("god-title");
var goddessDesc = document.getElementsByClassName("god-texboxx");
var beaTitle = document.getElementsByClassName("bea-title");
var beaDesc = document.getElementsByClassName("bea-texboxx");

function swapPersona(persona) {
  console.log("(debug) test" + persona);
  if (persona == 0) { //if persona is goddess
    // personaBea[0].style.height = "0";
    // personaBea[0].style.opacity = "0";
    // personaGoddess[0].style.opacity = "1";
    // personaGoddess[0].style.height = "50vh"
    personaBea.style.display="none";
    personaGoddess.style.display="flex";
    goddessDesc[0].style.display="none";
    goddessTitle[0].style.display="block";
    beaTitle[0].style.display="none";
    beaDesc[0].style.display="none";
  }
  if (persona == 1) { //if persona is bea
    // personaGoddess[0].style.height = "0";
    // personaGoddess[0].style.opacity = "0";
    // personaBea[0].style.opacity = "1";
    // personaBea[0].style.height = "50vh"
    personaBea.style.display="flex";
    personaGoddess.style.display="none";
    goddessDesc[0].style.display="none";
    goddessTitle[0].style.display="none";
    beaTitle[0].style.display="block";
    beaDesc[0].style.display="none";
  }
}

function swapTitle(persona, textDisplay) {
  if (persona ==  0) { //if persona is goddess
    if (textDisplay == 0) { //if desired display is title
      // goddessDesc[0].style.height = "0";
      // goddessDesc[0].style.opacity = "0";
      // goddessTitle[0].style.opacity = "1";
      // goddessTitle[0].style.height = "50vh"
      goddessDesc[0].style.display="none";
      goddessTitle[0].style.display="block";
    }

    if (textDisplay == 1) { //if desired display is desc
      // goddessTitle[0].style.height = "0";
      // goddessTitle[0].style.opacity = "0";
      // goddessDesc[0].style.opacity = "1";
      // goddessDesc[0].style.height = "50vh"
      goddessDesc[0].style.display="block";
      goddessTitle[0].style.display="none";
    }
  }

  if (persona ==  1) { //if persona is bea
    if (textDisplay == 0) { //if desired display is title
      // beaDesc[0].style.height = "0";
      // beaDesc[0].style.opacity = "0";
      // beaTitle[0].style.opacity = "1";
      // beaTitle[0].style.height = "50vh"
      beaDesc[0].style.display = "none";
      beaTitle[0].style.display="block";
    }

    if (textDisplay == 1) { //if desired display is desc
      // beaTitle[0].style.height = "0";
      // beaTitle[0].style.opacity = "0";
      // beaDesc[0].style.opacity = "1";
      // beaDesc[0].style.height = "50vh"
      beaDesc[0].style.display = "block";
      beaTitle[0].style.display="none";
    }
  }
}

var container2 = document.getElementById("education-stuff"); //LESSON 2.1 - VARIABLES//
var slides2 = container2.getElementsByClassName("schoolskill");

function showSlides2(s, i) {
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
    setTimeout(function () { showSlides2(s, i) }, 5000);
}

swapPersona(0);
swapTitle(0,0)
showSlides2(slides2, 0)