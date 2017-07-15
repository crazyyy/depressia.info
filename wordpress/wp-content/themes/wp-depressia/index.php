<?php get_header(); ?>

  <div class="content_left">

    <p class="headline_2"><?php _e( 'Latest Posts', 'wpeasy' ); ?></p>

    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>

  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
