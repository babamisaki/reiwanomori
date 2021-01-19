<?php get_header(); ?>
<main class="page">
  <aside>
    <?php get_sidebar() ; ?>
  </aside>
  <div class="main">
    <?php
    $post = $wp_query->post;
    if ( in_category('tree') ) {
      include(TEMPLATEPATH.'/single-tree.php');
    } elseif ( in_category('indoor') ) {
      include(TEMPLATEPATH.'/single-indoor.php');
    } elseif ( in_category('pet') ) {
      include(TEMPLATEPATH.'/single-pet.php');
    } else {
      include(TEMPLATEPATH.'/single.php');
    }
    ?>
  </div>
</main>
<footer>

<?php get_footer(); ?>