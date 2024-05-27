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
 // When the second modal is shown, hide the first modal
 $('#secondModal').on('show.bs.modal', function () {
  $('#firstModal').modal('hide');
});

// Optionally, show the first modal again when the second modal is hidden
$('#secondModal').on('hidden.bs.modal', function () {
  $('#firstModal').modal('show');
});