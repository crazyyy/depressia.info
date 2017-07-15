<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class('article_item_block'); ?>>
    <a href="<?php the_permalink(); ?>" class="aib_head"><?php the_title(); ?></a>
    <p class="aib_author"><?php the_author_posts_link(); ?>, <?php the_time('j F Y'); ?></p>

    <?php wpeExcerpt('wpeExcerpt40'); ?>
    <a class="more" href="<?php the_permalink(); ?>">читать далее</a>
    <div class="clear"></div>
  </div>

<?php endwhile; endif; ?>
