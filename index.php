<?php
/*
 * The main template file */
get_header(); ?>

<main>

  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/post/content', get_post_format() );
      
    endwhile;

    the_posts_pagination();

  else :

    get_template_part( 'template-parts/post/content', get_post_format() );

  endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>