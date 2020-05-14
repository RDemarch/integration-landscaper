/* variables */

/* get gallery buttons */
const allButton = document.getElementById("allBtn");
const lawnCareButton = document.getElementById("lawnCareBtn");
const gardenCareButton = document.getElementById("gardenCareBtn");
const plantingButton = document.getElementById("plantingBtn");

/* functions */

/* show gallery photos */
filterSelection("all");

// Show filtered elements
function addClass(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");
  for (var i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
};
// Hide elements that are not selected
function removeClass(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");
  for (var i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
};
// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
function filterSelection(c) {
  var x = document.getElementsByClassName("filterDiv");
  if (c == "all") {
    c = "";
  }
  for (var i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) {
      addClass(x[i], "show");
    }
  }
};

/* event listeners */

/* scroll */
window.addEventListener("scroll", function(e) {
  currentPosition = window.scrollY;
  if (currentPosition > 170) {
    document.getElementById("navbarSection").style.background = "#333";
    document.getElementById("navbarSection").style.transition = "all 0.5s";
  } else {
    document.getElementById("navbarSection").style.background = "transparent";
    document.getElementById("navbarSection").style.transition = "all 0.5s";
  }
});

/* gallery project buttons */

allButton.addEventListener("click", function() {
  filterSelection("all");
});
lawnCareButton.addEventListener("click", function() {
  filterSelection("lawnCare");
});
gardenCareButton.addEventListener("click", function() {
  filterSelection("gardenCare");
});
plantingButton.addEventListener("click", function() {
  filterSelection("planting");
});
