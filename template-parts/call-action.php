<!-- Call To Action Start -->
<?php
$config = get_option('painting_options');
?>
<div class="container-fluid bg-primary bg-call-to-action py-5" style="margin-top: 90px;">
  <div class="container py-5">
    <div class="row g-0 justify-content-start">
      <div class="col-lg-6">
        <h1 class="display-5 mb-4"><?php echo $config['call_title']; ?></h1>
        <p class="fs-4 fw-normal"><?php echo $config['call_desc']; ?>
        </p>
        <a href="contact-us"
          class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4"><?php echo $config['call_btn']; ?></a>
      </div>
    </div>
  </div>
</div>
<!-- Call To Action Start -->