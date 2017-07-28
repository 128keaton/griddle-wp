<?php
/**
 * Template Name: Ph.d Template
 */
?>


<div class="inner-wrapper services">
<h1 class="blue"><?php echo get_the_title(); ?></h1>
  <?php
    while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?> 
            <!-- Page Content -->
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<a class="home-link" href="/">Home</a>
</div>