<div class="box footer">
	<div class="name-tag">
		<h1><a href="/">Mekel Harris</a></h1>
          <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
  </div>
  <p>Copyright 2017, Mekel Harris</p>
</div>
