<!-- Header Include -->
<?php
include 'header.php';
?>

<body>
  <!-- Gallery Banner Section Start -->
  <section class="about_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-4 mb-md-0 align-items-center justify-content-center">
          <h2 className="about_text">Gallery</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Gallery Banner Section End -->

  <!-- Main Gallery Section Start -->
  <section class="main_wrapper">
    <div class="container">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <div class="row mx-3 mt-3 mb-2 pt-3 pb-2">
              <div class="col-md-3">
                <form>
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Please Select Organization</option>
                      <option value="1">STQC</option>
                      <option value="2">Bisag</option>
                      <option value="3">Meity</option>
                    </select>
                    <label for="floatingSelect">Organization</label>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <form>
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="Select Start Date..">
                    <label for="floatingInput">Start Date</label>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <form>
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="Select End Date..">
                    <label for="floatingInput">End Date</label>
                  </div>
                </form>
              </div>
              <div class="col-md-3">
                <a href="#">
                  <button type="submit" class="btn view_btn">Apply</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Gallery Section End -->

  <!-- Gallery Item Showing Section Start -->
  <section class="main_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="images/activities/activity1.png" class="card-img-top" alt="Image 1">
            <div class="card-body">
              <h5 class="card-title">STQC</h5>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="images/activities/activity1.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title">Meity</h5>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="images/activities/activity1.png" class="card-img-top" alt="Image 3">
            <div class="card-body">
              <h5 class="card-title">Bisag</h5>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  
  <!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Modal Image">
            </div>
        </div>
    </div>
</div>
  <!-- Gallery Item Showing Section End -->
</body>

<!-- Footer Include -->
<?php
include 'footer.php';
?>