// When the user scrolls the page, execute myFunction
window.onscroll = function() {navBarScroll()};

// Get the navbar
var navbar = document.getElementsByClassName("navbar");

// Get the offset position of the navbar
var sticky = 110;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function navBarScroll() {
  if (window.pageYOffset >= sticky) {
    navbar[0].classList.add("sticky")
  } else {
    navbar[0].classList.remove("sticky");
  }
}