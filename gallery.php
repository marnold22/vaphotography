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
  <!-- Add this back into the modal div ------ style="padding-top:10%" -->
  <div id="gallery-modal" class="w3-modal w3-black"style="padding: 0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image modal-height">
      <p id="caption"></p>
    </div>
  </div>

  <!-- GALLERY START -->
  <div class="w3-padding-64 fc-light bg-grey">
    <h1 class="w3-center">MY GALLERY</h1>
    <p class="w3-center"><em>Here are some of my latest pieces of work!<br> Click on the images to make them larger</em>
    </p><br>
  </div>

  <div class="gallery">
    <ul id="paginated-list" class="image-gallery" data-current-page="1">
      <?php
      $img_count = count(glob('assets/gallery/*.jpg')) - 1;
      for ($i = 0; $i <= $img_count; $i++) {
        echo ("<li><img loading='lazy' class='galleryHover' src='assets/gallery/($i).jpg' onclick='galleryDisplay(this)'></li>");
      }
      ?>
    </ul>

    <nav class="pagination-container">
      <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
        &lt;
      </button>

      <div id="pagination-numbers">

      </div>

      <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
        &gt;
      </button>
    </nav>
  </div>




  <!-- GALLERY END -->

  <!-- FOOTER -->
  <?php include 'footer.php' ?>

  <script src="js/gallery.js"></script>
</body>

</html>