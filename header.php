<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js>

<head>
  <meta charset=" <?php bloginfo('charset'); ?>">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
  href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
  rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Topbar Start -->
  <div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
          <?php 
          $config = get_option('painting_options');
          ?>
          <div class="d-inline-flex align-items-center">
            <a class="text-dark py-2 pe-3 border-end border-white" href="">
              <i
                class="<?php echo $config['phone_icon']; ?> text-secondary me-2"></i><?php echo $config['phone_number']; ?>
            </a>
            <a class="text-dark py-2 px-3" href=""><i
                class="<?php echo $config['email_icon']; ?> text-secondary me-2"></i><?php echo $config['p_email']; ?></a>
          </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
          <div class="d-inline-flex align-items-center">
            <?php
            $t_socil_icons = $config['top_icon'];
            foreach( $t_socil_icons as  $t_socil_icon){
              ?>
            <a class="text-body py-2 px-3 border-end border-white"
              href="<?php echo  $t_socil_icon['social_icon_link']; ?>">
              <i class="<?php echo  $t_socil_icon['social_icon']; ?> text-secondary"></i>
            </a>
            <?php } ?>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="<?php echo site_url(); ?>" class="navbar-brand p-0">
      <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-paint-roller text-secondary me-3"></i>Nitu121
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php 
    wp_nav_menu(array(
      'theme_location' => 'main_menu',
      'menu_class' => 'navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary',
     ));
    ?>
      <div class="d-none d-lg-flex align-items-center ps-4">
        <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
        <div>
          <h5 class="text-primary mb-1"><small>Call Now</small></h5>
          <h6 class="text-light m-0">+012 345 6789</h6>
        </div>
      </div>
    </div>

    <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
        <a href="index.html" class="nav-item nav-link active">Home</a>
        <a href="about.html" class="nav-item nav-link">About</a>
        <a href="service.html" class="nav-item nav-link">Service</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
          <div class="dropdown-menu m-0">
            <a href="blog.html" class="dropdown-item">Blog Grid</a>
            <a href="detail.html" class="dropdown-item">Blog Detail</a>
            <a href="team.html" class="dropdown-item">The Team</a>
            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
          </div>
        </div>
        <a href="contact.html" class="nav-item nav-link">Contact</a>
      </div>
      <div class="d-none d-lg-flex align-items-center ps-4">
        <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
        <div>
          <h5 class="text-primary mb-1"><small>Call Now</small></h5>
          <h6 class="text-light m-0">+012 345 6789</h6>
        </div>
      </div>
    </div> -->
  </nav>
  <!-- Navbar End -->