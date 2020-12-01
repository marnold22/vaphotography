<!DOCTYPE html>
<html>

<!-- INCLUDE HEADER -->
<?php include 'modules/header.php' ?>

<body>
<!-- INCLUDE NAVBAR -->
<?php include 'modules/homeNav.php' ?>

<!-- INCLUDE LIGHTBOX -->
<?php include 'modules/galleryLightbox.php' ?>


  <!-- GALLERY START -->
  <div class="w3-padding-64">
    <h1 class="w3-center">MY GALLERY</h1>
    <p class="w3-center"><em>Here are some of my latest pieces of work!<br> Click on the images to make them larger</em>
    </p><br>

    <!-- Row 1 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/flowers/Flower-4.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/flowers/Flower-11.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/flowers/Flower-17.png" onclick="galleryDisplay(this)">
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
          <img class="imgcard" src="assets/gallery/landscape/Landscape-16.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/landscape/Landscape-14.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/landscape/Landscape-13.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 3 of Cards -->
    <div class="w3-row-padding w3-margin-top">
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/other/Other-1.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/other/Other-4.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card cardhover">
          <img class="imgcard" src="assets/gallery/other/Other-9.png" onclick="galleryDisplay(this)">
          <div class="w3-container">
            <h5>5 Terre</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Gallery Container End -->
  </div>

  <!-- INCLUDE FOOTER -->
  <?php include 'modules/footer.php';?>
  
  <script src="js/gallery.js"></script>
</body>

</html>