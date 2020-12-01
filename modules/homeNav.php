  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div id="navHome" class="w3-bar w3-large navBackground">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" onclick="toggleMobileMenu()"
        title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a class="w3-hide-medium w3-hide-large" onClick="window.scroll({ top: 0,left: 0,behavior: 'smooth' });"><img
          class="logo-mobile" src="/assets/logo/VAP-Logo-White.png"></a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="contactScroll()">CONTACT</a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="portfolioScroll()">GALLERY</a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="aboutScroll()">ABOUT</a>
      <a class="w3-bar-item w3-hide-small" onClick="window.scroll({ top: 0,left: 0,behavior: 'smooth' });"><img
          class="logo" src="/assets/logo/VAP-Logo-White.png"></a>
    </div>

    <!-- Navbar on mobile screens -->
    <div id="navMobile" class="w3-bar-block w3-dark-grey w3-hide w3-hide-large w3-hide-medium">
      <a class="w3-bar-item w3-button" onclick="aboutMobile()">ABOUT</a>
      <a class="w3-bar-item w3-button" onclick="portfolioMobile()">GALLERY</a>
      <a class="w3-bar-item w3-button" onclick="contactMobile()">CONTACT</a>
    </div>
  </div>