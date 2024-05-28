// Header Scroll
let nav = document.querySelector(".header");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 50) {
    nav.classList.add("header-scrolled");
  } else {
    nav.classList.remove("header-scrolled");
  }
};


// // Home Image Modal Popup
document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".activity-image");
  const modalImage = document.getElementById("modalImage");
  const imageModal = new bootstrap.Modal(document.getElementById("imageModal"));
  let currentIndex = 0;

  images.forEach((img, index) => {
      img.addEventListener("click", () => {
          currentIndex = index;
          modalImage.src = img.src;
          imageModal.show();
      });
  });

  document.getElementById("prevBtn").addEventListener("click", () => {
      currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
      modalImage.src = images[currentIndex].src;
  });

  document.getElementById("nextBtn").addEventListener("click", () => {
      currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
      modalImage.src = images[currentIndex].src;
  });
});

// Galley Page Modal Popup
 // When the second modal is shown, hide the first modal
 $('#secondModal').on('show.bs.modal', function () {
  $('#firstModal').modal('hide');
});

// Optionally, show the first modal again when the second modal is hidden
$('#secondModal').on('hidden.bs.modal', function () {
  $('#firstModal').modal('show');
});