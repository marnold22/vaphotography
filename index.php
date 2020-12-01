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
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center"><em>I love photography</em></p>
    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Cras
      justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Maecenas
      sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Integer
      posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.
      Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus
      commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis
      euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis
      interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent commodo
      cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
      auctor. Donec sed odio dui.</p>
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

    <!-- Row 1 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/flowers/Flower-4.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/flowers/Flower-11.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/flowers/Flower-17.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/landscape/Landscape-16.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/landscape/Landscape-14.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <!-- <img class="imgcard" src="assets/gallery/landscape/Landscape-13.png" onclick="indexDisplay(this)"> -->
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
    </div>

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
    <h3 class="w3-center">Contact Me!</h3>
    <p class="w3-center"><em>I'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m6 w3-container">
        <img src="assets/img/map-1.jpg" class="w3-image w3-round">
      </div>
      <div class="w3-col m6 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Location: Washington,
          US<br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Phone: 509.123.1234<br>
          <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Email:
          vaphotography@gmail.com<br>
        </div>
      </div>
    </div>
  </div>

  <!-- INCLUDE FOOTER -->
  <?php include 'modules/footer.php';?>

  <script src="js/main.js"></script>
</body>

</html>