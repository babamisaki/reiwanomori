<?php if(have_posts()):
while(have_posts()):
the_post(); ?>
<main class="page">
  <aside>
    <?php get_sidebar() ; ?>
  </aside>
  <div class="main">
    <?php the_content(); ?>
  </div>
</main>
<footer>
<?php endwhile;
endif; ?>