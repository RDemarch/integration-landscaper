/* variables */

/* get gallery buttons */
const allButton = document.getElementById("allBtn");
const lawnCareButton = document.getElementById("lawnCareBtn");
const gardenCareButton = document.getElementById("gardenCareBtn");
const plantingButton = document.getElementById("plantingBtn");

const allPhotos = ["photo1", "photo2", "photo3", "photo4", "photo5", "photo6", "photo7", "photo8", "photo9"];
const lawnCarePhotos = ["photo1",
"photo3", "photo4", "photo8"];
const gardenCarePhotos = ["photo6", "photo7"];
const plantingPhotos = ["photo2", "photo5", "photo9"];

/* functions */

/* show/hide gallery photos */
function showHideAll() {
  for (var i = 0; i < allPhotos.length; i++) {
    let allGallery = document.getElementById(allPhotos[i]);
    allGallery.style.display = "block";
    /*
    if (photos.style.display === "none") {
      photos.style.display = "block";
      photos.style.transition = "all 0.5s";
    } else {
      photos.style.display = "none";
    }
    */
  }
};
function showHideLawnCare() {
  for (var i = 0; i < lawnCarePhotos.length; i++) {
    let lawnCareGallery = document.getElementById(lawnCarePhotos[i]);
    let allGallery = document.getElementById(allPhotos[i]);
    if (lawnCarePhotos[i] == allPhotos[i]) {
      lawnCareGallery.style.display = "block";
    } else {
      allGallery.style.display = "none";
    }
  }
};
function showHidegardenCare() {
  for (var i = 0; i < gardenCarePhotos.length; i++) {
    let photos = document.getElementById(gardenCarePhotos[i]);
    if (photos.style.display === "none") {
      photos.style.display = "block";
      photos.style.transition = "all 0.5s";
    } else {
      photos.style.display = "none";
      photos.style.transition = "all 0.5s";
    }
  }
};
function showHidePlanting() {
  for (var i = 0; i < plantingPhotos.length; i++) {
    let photos = document.getElementById(plantingPhotos[i]);
    if (photos.style.display === "none") {
      photos.style.display = "block";
      photos.style.transition = "all 0.5s";
    } else {
      photos.style.display = "none";
      photos.style.transition = "all 0.5s";
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
allButton.addEventListener("click", showHideAll);
lawnCareButton.addEventListener("click", showHideLawnCare);
gardenCareButton.addEventListener("click", showHidegardenCare);
plantingButton.addEventListener("click", showHidePlanting);
