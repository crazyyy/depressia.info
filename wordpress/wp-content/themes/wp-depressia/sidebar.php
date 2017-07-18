<div class="content_right">

  <p class="cr_head">Виды депрессий</p>
  <div class="menu-vidy-depressij-container">
    <?php wpeSideNav(); ?>
  </div>
  <div class="article_line"></div>

  <p class="art_head">Статьи</p>
  <a href="/articles/" class="other_art">другие статьи</a>
  <div class="clear"></div>
  <a href="#" class="block_1_push popular">Популярные</a>
  <a href="#" class="block_2_push new">Новые</a>
  <div class="clear"></div>
  <div class="block_1">
    <?php $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
    while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
      <div class="article_block">
        <p class="article_head"><?php the_title(); ?></p>
        <p>
          <br>
        </p>
        <?php wpeExcerpt('wpeExcerpt20'); ?>
        <a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
        <p></p>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="block_2">
    <?php query_posts("showposts=5"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="article_block">
        <p class="article_head"><?php the_title(); ?></p>
        <p>
          <br>
        </p>
        <?php wpeExcerpt('wpeExcerpt20'); ?>
        <a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
        <p></p>
      </div>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </div>

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>
  <?php endif; ?>

</div>
