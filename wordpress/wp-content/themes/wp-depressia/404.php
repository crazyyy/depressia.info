<?php get_header(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class('content_left'); ?>>
    <h1 class="headline_2"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <div class="content-redaktor">
      <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
    </div><!-- content-redaktor -->
  </div><!-- content_left -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
