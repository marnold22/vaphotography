<!DOCTYPE html>
<html>

<!-- INCLUDE HEADER -->
<?php include 'modules/header.php' ?>

<body>

  <!-- Navbar for desktop and tablet -->
  <div class="w3-top">
    <div id="navHome" class="w3-bar w3-large bg-grey navBackground">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" onclick="toggleMobileMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a class="w3-hide-medium w3-hide-large" onClick="window.scroll({ top: 0,left: 0,behavior: 'smooth' });"><img class="logo-mobile" src="/assets/logo/VAP-Logo-White.png"></a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="contactScroll()">CONTACT</a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="portfolioScroll()">GALLERY</a>
      <a class="w3-bar-item w3-hide-small w3-right" onclick="aboutScroll()">ABOUT</a>
      <a class="w3-bar-item w3-hide-small" onClick="window.scroll({ top: 0,left: 0,behavior: 'smooth' });"><img class="logo" src="/assets/logo/VAP-Logo-White.png"></a>
    </div>

    <!-- Navbar on mobile screens -->
    <div id="navMobile" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium bg-grey">
      <a class="w3-bar-item w3-button" onclick="aboutMobile()">ABOUT</a>
      <a class="w3-bar-item w3-button" onclick="portfolioMobile()">GALLERY</a>
      <a class="w3-bar-item w3-button" onclick="contactMobile()">CONTACT</a>
    </div>
  </div <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span id="va-banner" class="w3-center w3-padding-large w3-black w3-wide w3-animate-opacity">VA_PHOTOGRAPHY</span>
    </div>
  </div>

  <!-- ABOUT SECTION -->
  <div id="about" class="w3-content w3-container w3-padding-64 fc-dark">
    <p class="w3-center w3-xxlarge quote">
      <span style="font-size:100px">&#10077;</span><br>
      <em>"In photography there is a reality so subtle that it becomes more real than reality." - Alfred Stieglitz.</em>
    </p>
    <p></p>
  </div>

  <div class="w3-row w3-center w3-padding-16 bg-grey">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Nature</span><br>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Landscape</span><br>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Sunrise</span><br>
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Sunset</span><br>
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">GALLERY</span>
    </div>
  </div>

  <!-- INCLUDE LIGHTBOX (Modal for full size images on click) -->
  <div id="index-modal" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- PORTFOLIO SECTION -->
  <div id="portfolio" class="w3-padding-64 fc-light bg-grey">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest pieces of work!<br> Click on the images to make them larger</em>
    </p><br>

    <!-- INCLUDE GALLERY -->
    <!-- Row 1 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(85).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(87).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(102).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(89).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(97).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(122).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(88).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(146).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
    </div>

    <!-- Row 3 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(31).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(63).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(42).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
      <div class="w3-quarter w3-margin-top">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/(131).jpg" onclick="indexDisplay(this)">
          <div class="w3-container">
          </div>
        </div>
      </div>
    </div>

    <!-- Button for more images -->
    <div class="w3-row-padding w3-center w3-section">
      <a href="/gallery.php">
        <button class="custom-btn" style="margin-top:64px">
          LOAD MORE
        </button>
      </a>
    </div>

  </div>

  <!-- Third Parallax Image with Portfolio Text -->
  <div id="contact" class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle w3-center">
      <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
      <div class="w3-col w3-center">
        <p class="contact-text">I'd love your feedback!</p>
        <p class="contact-text">Spokane, Washington</p>
        <p class="contact-text">vaphotography@gmail.com</p>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="w3-center w3-padding-64 bg-grey">
    <p class="contact-text">
      &copy VAPhotography
      <script>
        document.write(new Date().getFullYear())
      </script>
    </p>

  </footer>

  <script src="js/main.js"></script>
</body>

</html>