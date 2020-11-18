// Fluid scroll to about anchor
function aboutScroll() {
    var element = document.querySelector("#about");
    element.scrollIntoView({ behavior: 'smooth', block: 'start'});
}
// Fluid scroll to portfolio anchor
function portfolioScroll() {
    var element = document.querySelector("#portfolio");
    element.scrollIntoView({ behavior: 'smooth', block: 'start'});
}
// Fluid scroll to contact anchor
function contactScroll() {
    var element = document.querySelector("#contact");
    element.scrollIntoView({ behavior: 'smooth', block: 'start'});
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navMobile");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }