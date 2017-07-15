<?php get_header(); ?>

  <div class="content_left">

    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <p class="headline_2"><?php the_category(', '); ?></p>

    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>

  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
