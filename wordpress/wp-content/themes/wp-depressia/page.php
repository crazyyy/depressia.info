<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class('content_left'); ?>>
      <h1 class="headline_2"><?php the_title(); ?></h1>
      <div class="content-redaktor">
        <?php the_content(); ?>
      </div><!-- content-redaktor -->
    </div><!-- content_left -->

  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
