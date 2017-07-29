<div class="box footer">
	<div class="name-tag">
		<h1><a href="/"><?php echo get_bloginfo('name')?></a></h1>
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
  </div>
  <p>Copyright &copy <?php echo date('Y'); ?>, <?php echo get_bloginfo('name')?></p>
</div>
