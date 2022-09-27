<!DOCTYPE html>
<html>

<!-- INCLUDE HEADER -->
<?php include 'header.php' ?>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div id="navGallery" class="w3-bar w3-large bg-grey w3-card-4">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" onclick="toggleMobileMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a class="w3-hide-medium w3-hide-large" onClick="window.scroll({ top: 0,left: 0,behavior: 'smooth' });"><img class="logo-mobile" src="/assets/logo/VAP-Logo-White.png"></a>
      <a class="w3-bar-item w3-hide-small w3-right galleryNav" href="index.php">HOME</a>
      <a href="index.php" class="w3-bar-item w3-hide-small"><img class="logo" src="/assets/logo/VAP-Logo-White.png"></a>
    </div>

    <!-- Navbar on mobile screens -->
    <div id="navMobile" class="w3-bar-block bg-grey w3-hide w3-hide-large w3-hide-medium">
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    </div>
  </div>

  <!-- INCLUDE LIGHTBOX -->
  <!-- Modal for full size images on click-->
  <div id="gallery-modal" class="w3-modal w3-black" style="padding-top:10%" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


  <!-- GALLERY START -->
  <div class="w3-padding-64 fc-light bg-grey">
    <h1 class="w3-center">MY GALLERY</h1>
    <p class="w3-center"><em>Here are some of my latest pieces of work!<br> Click on the images to make them larger</em>
    </p><br>

    <!-- <div id="gallery"> -->
      <ul class="image-gallery">
      <?php
        // count the number of pictures in the gallery folder
        // Then iterate through creating an image tag for each picture
        // Start the counting at the max number of pictures and descende that way newest images are on top of the gallery

        $i = count(glob("assets/gallery/compression/*.jpg"))-1;
        while( $i >= 0 ) {
          echo
            (
              "<li><img loading='lazy' src='assets/gallery/compression/($i).jpg' onclick='galleryDisplay(this)'></li>"
            );
            $i--;
        }
      ?>
      </ul>
    <!-- </div> -->
  </div>
  <!-- GALLERY END -->

  <!-- FOOTER -->
  <?php include 'footer.php' ?>

  <script src="js/gallery.js"></script>
</body>

</html>