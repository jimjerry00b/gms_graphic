<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - AgriCulture Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/main.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?= get_site_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <?php
                
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                ));
            
            ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>