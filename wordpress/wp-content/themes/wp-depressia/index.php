<?php get_header(); ?>

  <div class="content_left">

	<p class="nav"><a href="/">Главная</a><img src="<?php echo get_template_directory_uri(); ?>/img/nav_tri.png" alt="">Статьи</p>

    <p class="headline_2">Статьи</p>

    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>

  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
