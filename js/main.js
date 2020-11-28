// Modal Image Gallery
function indexDisplay(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("index-modal").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

function galleryDisplay(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("gallery-modal").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
