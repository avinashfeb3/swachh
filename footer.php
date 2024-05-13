<footer class="site-footer mt-4">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4 mb-5">
          <h2>Swachh Bharat Mission</h2>
          <p class="text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
          </p>
          <ul class="list-unstyled footer-link d-flex footer-social">
            <li><a href"#"><img src="./images/social/facebook.png" class="img-fluid" alt="Facebook"></a></li>
            <li><a href"#"><img src="./images/social/twitter.png" class="img-fluid" alt="Twitter"></a></li>
            <li><a href"#"><img src="./images/social/youtube.png" class="img-fluid" alt="Youtube"></a></li>
            <li><a href"#"><img src="./images/social/instagram.png" class="img-fluid" alt="Instagram"></a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-5">
          <h2> Quick Links</h2>
          <ul class="list-unstyled footer-link">
            <li><a href="Index.html" style="text-decoration: none;">Home</a></li>
            <li><a href="packages.html" style="text-decoration: none;">About Us</a></li>
            <li><a href="gallery.html" style="text-decoration: none;">Gallery</a></li>
            <li><a href="contact.html" style="text-decoration: none;" >Disclaimer</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-5">
          <h2> Other Links</h2>
          <ul class="list-unstyled footer-link">
            <li><a href="Index.html" style="text-decoration: none;">Copyright Policy</a></li>
            <li><a href="packages.html" style="text-decoration: none;">Web Information Manager</a></li>
            <li><a href="services.html" style="text-decoration: none;">Feedback</a></li>
            <li><a href="gallery.html" style="text-decoration: none;">Website Policies</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer> 
  <section class="copyright_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h3 class="text-white">
          Designed & Developed By National Informatics Center (NIC)
          </h3>
        </div>
        <div class="col-md-8 text-left">
          <h4 class="text-white">Content Owned & Maintained By Ministry of Electronics & IT (Meity) | Government of India</h4>
        </div>
      </div>
    </div>
  </section>
<!-- Bootstrap JavaScript Libraries -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
<!-- jQuery (necessary for Slick Slider) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.partner-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
