/*

vanilla js version

*/

/* variables */
const about = document.getElementById("aboutSection");
const aboutY = about.scrollHeight;

const services = document.getElementById("serviceSection");
const servicesY = services.scrollHeight;

/* functions */


/* event handler */
window.addEventListener("scroll", function(e) {
  currentPosition = window.scrollY;
  console.log("Current position: " + currentPosition + "px");
  if (currentPosition > 170) {
    document.getElementById("navbarSection").style.background = "#333";
    document.getElementById("navbarSection").style.transition = "all 0.5s";
  } else if (currentPosition > aboutY) {
    document.getElementById("aboutLink").style.color = "#6aaf08";
  } else {
    document.getElementById("navbarSection").style.background = "transparent";
    document.getElementById("navbarSection").style.transition = "all 0.5s";
  }
});
