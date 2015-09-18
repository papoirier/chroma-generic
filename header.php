<!DOCTYPE html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Chroma fabrique du feutre constitué à 100% de matières recyclées, offert en trois couleurs et fait au Québec. Chroma manufactures felt 100% made from recycled materials, offered in 3 colours and made in Québec.">
    <meta name="author" content="Marianne Coquelicot Mercier">
    <meta name="keywords" content="feutre, felt, textile, non woven, tangible studio, design d'interieur, architecture d'interieur, design textile, architecture, decoration, durable, eco-design, post-consommation, matériau, rénovation, montréal, québec, canada, felt, interior design, interior architecture, material, home improvement, sustainable, post-consumption">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" rel="shortcut icon">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon-152x152-precomposed.png">
    <title><?php _e( 'Chroma felts', 'chroma' );  ?>
      <?php if (!is_front_page()) {
        echo ' > '; wp_title('');
    } ?></title>
    <!-- CSS - - - - - - - - - - - - - - - -->
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/styles.css" rel="stylesheet" media="screen">
    
    <?php wp_enqueue_script('jquery'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="10" <?php if(is_home()) {echo "class=\"home\"";} ?>>
  <!-- NAV - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <?php get_sidebar(); ?>