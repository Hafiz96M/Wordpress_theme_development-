

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Neogym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>./assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri();?>./assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo get_template_directory_uri();?>./assets/css/responsive.css" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            <?php
    $options = get_option( '_prefix_my_options' );
    echo $options['opt-text-1'];
    
    ?>
            </span>
       
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <?php
            wp_nav_menu(array(
              "theme_location"=>"top_menu",
              "menu_class" => "navbar-nav",
              "add_li_class" =>"neogymliclass",
              "add_a_class" => "neogymanchorclass"
            ));
            
            ?>

              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="why.html"> Why us </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="trainer.html"> trainers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html"> Contact Us</a>
                </li>
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>


