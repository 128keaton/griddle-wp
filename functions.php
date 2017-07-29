<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/** Customize API */

function my_customize_register($wp_customize) {

    $wp_customize->add_section('header', array(
        'title' => __('Header', 'Griddle'),
    ));
    $wp_customize->add_setting('header_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'section' => 'header',
        'label' => __('Header Image', 'Griddle'),
        'settings' => 'header_image',
    )));

    /* Define Sections */
    $wp_customize->add_section(
        'box_titles',
        array(
            'title'    => __('Box Titles', 'Griddle'),
            'priority' => 18,
            )
        );
    $wp_customize->add_section(
      'box_urls',
        array(
            'title'    => __('Box Links', 'Griddle'),
            'priority' => 17,
            )
        );
    $wp_customize->add_section(
      'box_text',
        array(
            'title'    => __('Box Descriptions', 'Griddle'),
            'priority' => 16,
            )
        );

    $wp_customize->add_section(
      'box_subtitles',
        array(
            'title'    => __('Box Subtitles', 'Griddle'),
            'priority' => 15,
            )
        );
    
    $wp_customize->add_section(
      'box_button_titles',
        array(
            'title'    => __('Box Button Titles', 'Griddle'),
            'priority' => 14,
            )
        );


    /* Subtitles */
    $wp_customize->add_setting('main_box_subtitle');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'main_box_subtitle',
        array(
          'label' => 'Main Box',
          'section' => 'box_subtitles',
          'settings' => 'main_box_subtitle',
          )
        ));
    $wp_customize->add_setting('red_box_subtitle');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'red_box_subtitle',
        array(
          'label' => 'Red Box',
          'section' => 'box_subtitles',
          'settings' => 'red_box_subtitle',
        )
      ));
    $wp_customize->add_setting('green_box_subtitle');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'green_box_subtitle',
        array(
          'label' => 'Green Box',
          'section' => 'box_subtitles',
          'settings' => 'green_box_subtitle',
        )
      ));
    $wp_customize->add_setting('yellow_box_subtitle');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'yellow_box_subtitle',
        array(
          'label' => 'Yellow Box',
          'section' => 'box_subtitles',
          'settings' => 'yellow_box_subtitle',
        )
      ));
      
    /* Titles */
    $wp_customize->add_setting('main_box_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'main_box_title',
        array(
          'label' => 'Main Box',
          'section' => 'box_titles',
          'settings' => 'main_box_title',
          )
        ));
    $wp_customize->add_setting('red_box_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'red_box_title',
        array(
          'label' => 'Red Box',
          'section' => 'box_titles',
          'settings' => 'red_box_title',
        )
      ));
    $wp_customize->add_setting('green_box_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'green_box_title',
        array(
          'label' => 'Green Box',
          'section' => 'box_titles',
          'settings' => 'green_box_title',
        )
      ));
    $wp_customize->add_setting('yellow_box_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'yellow_box_title',
        array(
          'label' => 'Yellow Box',
          'section' => 'box_titles',
          'settings' => 'yellow_box_title',
        )
      ));

    /* URLs */
    $wp_customize->add_setting('main_box_url');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'main_box_url',
        array(
          'label' => 'Main Box',
          'section' => 'box_urls',
          'settings' => 'main_box_url',
          )
        ));
    $wp_customize->add_setting('red_box_url');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'red_box_url',
        array(
          'label' => 'Red Box',
          'section' => 'box_urls',
          'settings' => 'red_box_url',
        )
      ));
    $wp_customize->add_setting('green_box_url');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'green_box_url',
        array(
          'label' => 'Green Box',
          'section' => 'box_urls',
          'settings' => 'green_box_url',
        )
      ));
    $wp_customize->add_setting('yellow_box_url');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'yellow_box_url',
        array(
          'label' => 'Yellow Box',
          'section' => 'box_urls',
          'settings' => 'yellow_box_url',
        )
      ));

    /* Button Title */
    $wp_customize->add_setting('main_box_button_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'main_box_button_title',
        array(
          'label' => 'Main Box',
          'section' => 'box_button_titles',
          'settings' => 'main_box_button_title',
          )
        ));
    $wp_customize->add_setting('red_box_button_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'red_box_button_title',
        array(
          'label' => 'Red Box',
          'section' => 'box_button_titles',
          'settings' => 'red_box_button_title',
        )
      ));
    $wp_customize->add_setting('green_box_button_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'green_box_button_title',
        array(
          'label' => 'Green Box',
          'section' => 'box_button_titles',
          'settings' => 'green_box_button_title',
        )
      ));
    $wp_customize->add_setting('yellow_box_button_title');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'yellow_box_button_title',
        array(
          'label' => 'Yellow Box',
          'section' => 'box_button_titles',
          'settings' => 'yellow_box_button_title',
        )
      ));

    /* Descriptions */
    $wp_customize->add_setting('main_box_text');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'main_box_text',
        array(
          'label' => 'Main Box',
          'type' => 'textarea',
          'section' => 'box_text',
          'settings' => 'main_box_text',
          )
        ));
    $wp_customize->add_setting('red_box_text');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'red_box_text',
        array(
          'label' => 'Red Box',
          'type' => 'textarea',
          'section' => 'box_text',
          'settings' => 'red_box_text',
        )
      ));
    $wp_customize->add_setting('green_box_text');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'green_box_text',
        array(
          'label' => 'Green Box',
          'type' => 'textarea',
          'section' => 'box_text',
          'settings' => 'green_box_text',
        )
      ));
    $wp_customize->add_setting('yellow_box_text');
    $wp_customize->add_control(new WP_Customize_Control(
         $wp_customize,
        'yellow_box_text',
        array(
          'label' => 'Yellow Box',
          'type' => 'textarea',
          'section' => 'box_text',
          'settings' => 'yellow_box_text',
        )
      ));
}

add_action('customize_register', 'my_customize_register');
