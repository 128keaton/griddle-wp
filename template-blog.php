<?php
/**
 * Template Name: Griddle Template
 */
?>


<div class="inner-wrapper griddle">
<h1><?php echo get_the_title(); ?></h1>
  <?php
  while (have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
            <!-- Page Content -->
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<a class="home-link" href="/">Home</a>
</div>