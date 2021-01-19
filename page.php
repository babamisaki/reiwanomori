<?php
/**
 * Template Name: 固定ページ
 */
get_header(); ?>
<main class="page">
  <aside>
    <?php get_sidebar() ; ?>
  </aside>
  <div class="main">
    <?php
      if(have_posts()):
      while(have_posts()):
      the_post();
      the_content();
      endwhile;
      endif;
    ?>
  </div>
</main>
<footer>

<?php get_footer(); ?>