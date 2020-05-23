/* VARIABLES */

// get gallery buttons
const btns = document.querySelectorAll('[class*="btn-gallery"]');
const buttonContainer = document.getElementById("btnContainer");
const buttons = buttonContainer.getElementsByClassName("btn");
//var galleryButtons = allButtons.slice(0, 3);
// get gallery thumbnails
const thumbnails = document.getElementsByClassName("overlay");
// slide index for lightbox
let slideIndex = 1;

/* FUNCTIONS */

// display all thumbnails
filterSelection("all");
// display filtered thumbnails
function addClass(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");
  for (var i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
};
// hide thumbnails that are not selected
function removeClass(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");
  for (var i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      // remove class "show"
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
};
// add the "show" class to the filtered thumbnails, and remove the "show" class from the thumbnails that are not selected
function filterSelection(c) {
  var x = document.getElementsByClassName("filterDiv");
  if (c == "all") {
    c = "";
  }
  for (var i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) {
      x[i].className += " visuallyhidden";
      addClass(x[i], "show");
    }
  }
};
/*
function filterThumbnails() {
  filterSelection(this.id);
}
*/
// keyboard control
function logKey(e) {
  if (keys[event.keyCode] !== undefined) {
    if (keys[event.keyCode] === "left") {
      plusSlides(-1);
    } else if (keys[event.keyCode] === "right") {
      plusSlides(1);
    } else if (keys[event.keyCode] === "esc") {
      closeModal();
    }
  }
}
// display first modal slide
showSlides(slideIndex);
// modal functions
function openModal() {
  document.getElementById("myModal").style.display = "block";
}
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  // clip max with slide 1
  if (n > slides.length) {
    slideIndex = 1;
  }
  // clip min with last slide
  if (n < 1) {
    slideIndex = slides.length;
  }
  // hide all thumbnails
  for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  // display selected thumbnail
  slides[slideIndex-1].style.display = "block";
}
// display modal
function displayThumbnail() {
  // indexes from 1 to 9
  let thumbnail = Number(this.id) + 1;
  openModal();
  currentSlide(thumbnail);
}

/* CLASSES AND OBJECTS */

// keyboard keys
const keys = {
  37: "left",
  39: "right",
  27: "esc"
}

/* EVENT LISTENERS */

// filter thumbnails and add active class to current button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {;
    console.log(this.class)
    filterSelection(this.id);
    var current = buttonContainer.getElementsByClassName("active");
    console.log(current);
    current.className = current.className.replace(" active", "");
    this.className += " active";
  });
}


// filter thumbnails
/*
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", filterThumbnails);
}
*/
// add active class to current button
/*
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    var current = buttonContainer.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
*/
// add event listener to all thumbnails
for (var i = 0; i < thumbnails.length; i++) {
  thumbnails[i].addEventListener("click", displayThumbnail);
}
// control modal with "left", "right" and "esc" key
document.addEventListener('keydown', logKey);
