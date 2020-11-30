// Fluid scroll to about anchor
function aboutScroll() {
  var element = document.querySelector("#about");
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}
// Fluid scroll to portfolio anchor
function portfolioScroll() {
  var element = document.querySelector("#portfolio");
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}
// Fluid scroll to contact anchor
function contactScroll() {
  var element = document.querySelector("#contact");
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}

function toggleMobileMenu() {
  var show = document.getElementById("navMobile");
  if(show.classList.contains("w3-show")) {
    show.classList.remove("w3-show");
  } else {
    show.classList.add("w3-show");
  }
}

function hideMobileMenu() {
  var show = document.getElementById("navMobile");
  show.classList.remove("w3-show");
}

function aboutMobile() {
  aboutScroll();
  hideMobileMenu();
}

function portfolioMobile() {
  portfolioScroll();
  hideMobileMenu();
}

function contactMobile() {
  contactScroll();
  hideMobileMenu();
}

// Scroll animation for navbar
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 400) {
    $("#navHome").addClass("navScrolled");
    $("#navHome").addClass("w3-card-4");
  } else {
    $("#navHome").removeClass("navScrolled");
    $("#navHome").removeClass("w3-card-4");
  }
});

// Disable rightclick on images
$(document).ready(function() {
    $('img').bind('contextmenu', function(e){
        return false;
    }); 
});


// Modal Image Gallery
function indexDisplay(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("index-modal").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Mobile Scaling 
function mobileScaling(x) {
  if (x.matches) { // If media query matches
    var vaBanner = document.getElementById("va-banner");
    vaBanner.classList.remove("w3-xlarge");
    var navHome = document.getElementById("navHome");
    navHome.classList.remove("navBackground");
    navHome.classList.add("w3-dark-grey");

  } else {
    var vaBanner = document.getElementById("va-banner");
    vaBanner.classList.add("w3-xlarge");
    var navHome = document.getElementById("navHome");
    navHome.classList.remove("w3-dark-grey");
    navHome.classList.add("navBackground");

  }
}

var x = window.matchMedia("(max-width: 700px)")
mobileScaling(x) // Call listener function at run time
x.addListener(mobileScaling) // Attach listener function on state changes
