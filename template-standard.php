<?php
/**
 * Template Name: Standard Template
 */
?>

<div class="inner-wrapper">
<h1><?php echo get_the_title(); ?></h1>
  <?php
  while (have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
            <!-- Page Content -->
    <?php
    endwhile;
    wp_reset_query();
    ?>
<a class="home-link" href="/">Home</a>
</div>