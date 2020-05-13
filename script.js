/* vanilla js version */

/* variables */

/* functions */


/* event handler */
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
