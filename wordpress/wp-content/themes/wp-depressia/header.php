<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="header_wrapper">
    <div class="header">
      <a href="<?php echo home_url(); ?>" class="logo"></a>
      <?php wpeHeadNav(); ?>
      <div class="search_block">
        <form action="<?php echo home_url(); ?>" id="searchform" method="get" name="searchform">
          <input type="text" class="search_in" id="s" name="s" placeholder="поиск по сайту" value="">
          <a style="cursor: pointer" class="search_but" id="searchsubmit" onclick="document.forms[&#39;searchform&#39;].submit();"></a>
        </form>
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="content">
