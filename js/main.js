// Header Scroll
let nav = document.querySelector(".header");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 50) {
    nav.classList.add("header-scrolled");
  } else {
    nav.classList.remove("header-scrolled");
  }
};


// Home Image Modal Popup
document.querySelectorAll('.partner-logo img').forEach(img => {
  img.addEventListener('click', function() {
      const modalImage = document.getElementById('modalImage');
      modalImage.src = this.src;
      const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
      imageModal.show();
  });
});

// Galley Page Modal Popup
document.querySelectorAll('.card-img-top').forEach(img => {
  img.addEventListener('click', function() {
      const modalImage = document.getElementById('modalImage');
      modalImage.src = this.src;
      const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
      imageModal.show();
  });
});