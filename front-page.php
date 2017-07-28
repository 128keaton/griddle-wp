<div class="home-wrapper">
    <div class="name-tag">
        <div class="name-tag-picture" style="background-image: url(<?php echo get_theme_mod('header_image') ?>);"></div>
        <h1><?php echo get_bloginfo( 'name' )?></h1>
    </div>
    <!-- Blue -->
    <div class="box blue psychologist-box" id="ph.d">
        <div class="upper-message">
            <h1><?php echo get_theme_mod('main_box_title') ?></h1>
            <p><?php echo get_theme_mod('main_box_subtitle') ?></p>
        </div>
        <div class="left">
            <p><?php echo get_theme_mod('main_box_text') ?>.</p>
            <div class="main-link">
                <a href="<?php echo get_theme_mod('main_box_url') ?>"><?php echo get_theme_mod('main_box_button_title') ?></a>
            </div>
        </div>
        <div class="right">
            <?php dynamic_sidebar('front-page'); ?>
        </div>
    </div>
    <!-- Green -->
    <div class="box green author-box" id="author">
        <div class="upper-message">
            <h1><?php echo get_theme_mod('green_box_title') ?></h1>
            <p><?php echo get_theme_mod('green_box_subtitle') ?></p>
        </div>
        <p><?php echo get_theme_mod('green_box_text') ?></p>
        <div class="main-link">
            <a href="<?php echo get_theme_mod('green_box_url') ?>"><?php echo get_theme_mod('green_box_button_title') ?></a>
        </div>
    </div>
    <!-- Red -->
    <div class="box red speaker-box" id="speaker">
        <div class="upper-message">
             <h1><?php echo get_theme_mod('red_box_title') ?></h1>
             <p><?php echo get_theme_mod('red_box_subtitle') ?></p>
        </div>
        <p><?php echo get_theme_mod('red_box_text') ?></p>
        <div class="main-link">
            <a href="<?php echo get_theme_mod('red_box_url') ?>"><?php echo get_theme_mod('red_box_button_title') ?></a>
        </div>
    </div>
    <!-- Yella -->
    <div class="box yellow human-box" id="human">
        <div class="upper-message">
             <h1><?php echo get_theme_mod('yellow_box_title') ?></h1>
             <p><?php echo get_theme_mod('yellow_box_subtitle') ?></p>
        </div>
        <p><?php echo get_theme_mod('yellow_box_text') ?></p>
        <div class="main-link">
            <a href="<?php echo get_theme_mod('yellow_box_url') ?>"><?php echo get_theme_mod('yellow_box_button_title') ?></a>
        </div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
</div>