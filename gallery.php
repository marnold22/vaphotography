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

    <!-- INCLUDE GALLERY -->
    <?php include 'modules/galleryGallery.php'; ?>

    <!-- GALLERY END -->
  </div>

  <!-- INCLUDE FOOTER -->
  <?php include 'modules/footer.php';?>
  
  <script src="js/gallery.js"></script>
</body>

</html>