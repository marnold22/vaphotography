<!DOCTYPE html>
<html>

<!-- INCLUDE HEADER -->
<?php include 'modules/header.php' ?>

<body>

  <!-- INCLUDE NAVBAR -->
  <?php include 'modules/homeNav.php' ?>


  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span id="va-banner" class="w3-center w3-padding-large w3-black w3-wide w3-animate-opacity">VA_PHOTOGRAPHY</span>
    </div>
  </div>

  <!-- ABOUT SECTION -->
  <div id="about" class="w3-content w3-container w3-padding-64">
    <!-- <h3 class="w3-center">ABOUT ME</h3> -->
    <p class="w3-center w3-xxlarge quote">
      <span style="font-size:100px">&#10077;</span><br>
      <em>"In photography there is a reality so subtle that it becomes more real than reality." - Alfred Stieglitz.</em>
    </p>
    <p></p>
  </div>

  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
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

  <!-- INCLUDE LIGHTBOX -->
  <?php include 'modules/homeLightbox.php' ?>

  <!-- PORTFOLIO SECTION -->
  <div id="portfolio" class="w3-padding-64">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest pieces of work!<br> Click on the images to make them larger</em>
    </p><br>

    <!-- INCLUDE GALLERY -->
    <?php include 'modules/homeGallery.php'; ?>

    <!-- Button for more images -->
    <div class="w3-row-padding w3-center w3-section">
      <a href="/gallery.php"><button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD
          MORE</button></a>
    </div>

  </div>

  <!-- Third Parallax Image with Portfolio Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <div id="contact" class="w3-content w3-container w3-padding-64">

    <div class="w3-card-3 w3-hover-shadow w3-dark-grey w3-padding-large">
      <h3 class="w3-center">Contact Me!</h1>
        <p class="w3-center"><em>I'd love your feedback!</em></p>
        <p></p>

        <div class="w3-center">
          <div class="w3-row">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p style="display: inline-block;"> Spokane, Washington</p>
          </div>

          <div class="w3-row">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p style="display: inline-block;"> vaphotography@gmail.com</p>
          </div>
        </div>
    </div>
  </div>

  <!-- INCLUDE FOOTER -->
  <?php include 'modules/footer.php'; ?>

  <script src="js/main.js"></script>
</body>

</html>