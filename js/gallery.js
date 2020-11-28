function toggleMobileMenu() {
    var show = document.getElementById("navMobile");
    if (show.classList.contains("w3-show")) {
        show.classList.remove("w3-show");
    } else {
        show.classList.add("w3-show");
    }
}

function galleryDisplay(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("gallery-modal").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}