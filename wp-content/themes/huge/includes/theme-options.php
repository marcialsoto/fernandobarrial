<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'analytics',
        'title'       => 'Analytics'
      ),
      array(
        'id'          => 'css',
        'title'       => 'Custom CSS'
      ),
      array(
        'id'          => 'admin',
        'title'       => 'Admin'
      ),
      array(
        'id'          => 'updates',
        'title'       => 'Updates'
      ),
      array(
        'id'          => 'log',
        'title'       => '<strong>Changelog</strong>'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'krown_tracking_enable',
        'label'       => 'Enable analytics',
        'desc'        => 'Please select this if you\'ll be using Google Analytics in the theme.',
        'std'         => 'disabled',
        'type'        => 'radio',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'enabled',
            'label'       => 'Enabled',
            'src'         => ''
          ),
          array(
            'value'       => 'disabled',
            'label'       => 'Disabled',
            'src'         => ''
          )
        ),
      ),


      array(
        'id'          => 'krown_changelog',
        'label'       => 'Changelog', 'krown',
        'desc'        => '
<ul>
<li><strong>Version 1.6.3: 12 December 2015</strong>
<br>~ Fixed an issue related to pagination in WP4.4<br><br></li>
<li><strong>Version 1.6.2 : 7 July 2015</strong>
<br>~ Added a fail safe against Envato API issues (fixed admin login problems)<br><br></li>
<li><strong>Version 1.6.1: 20 December 2014</strong>
<br>~ Added WP 4.1 compatibility<br><br></li>
<li><strong>Version 1.6: 12 December 2014</strong>
<br>~ Removed portfolio opacity option, because of bugs caused by last Firefox update<br><br></li>
<li><strong>Version 1.5.9: 25 November 2014</strong>
<br>~ Fixed an iOS responsiveness bug
<br>~ Added changelog view in the backend<br><br></li>
<li><strong>Version 1.5.8: 18 November 2014</strong>
<br>~ Fixed a bug related to mobile responsiveness<br><br></li>
<li><strong>Version 1.5.7: 28 October 2014</strong>
<br>~ Fixed a bug in modular projects caused by the last update<br><br></li>
<li><strong>Version 1.5.6: 17 October 2014</strong>
<br>~ Fixed retina support for modular project
<br>~ Fixed a bug regarding self hosted videos in blog posts<br><br></li>
<li><strong>Version 1.5.5: 6 October 2014</strong><br>~ Fixed a bug related to self hosted videos in blog posts<br><br></li>
<li><strong>Version 1.5.4: 16 September 2014</strong><br>~ Improved retina support
<br>~ Added "back to top" button
<br>~ Fixed a bug related scrolling on Android devices<br><br></li>
<li><strong>Version 1.5.3: 16 August 2014</strong><br>~ Fixed various bugs<br><br></li>
<li><strong>Version 1.5.2: 18 July 2014</strong><br>~ Fixed an issue with the single galleries<br><br></li>
<li><strong>Version 1.5.1: 16 July 2014</strong><br>~ Fixed various bugs related to navigation and display<br>
~ Updated Google Fonts list<br><br></li>
<li><strong>Version 1.5: 8 May 2014</strong><br>~ Added dedicated category pages for portfolio/galleries<br>
~ Updated the Option Tree plugin<br>
~ Updated the Krown Shortcodes plugin to 0.7 (fixed contact form error)<br>
~ Updated the child theme to fix some bugs<br>
~ Fixed various style related bugs<br><br></li>
<li><strong>Version 1.4.6: 24 April 2014</strong><br>~ Updated the Krown Shortcodes plugin to 0.6 (improved WP 3.9 support)<br><br></li>
<li><strong>Version 1.4.5: 18 April 2014</strong><br>~ Added columns support for WordPress galleries<br>
~ Fixed other small style bugs regarding<br>
~ Fixed a bug regarding portfolio filtering with the responsive menu<br>
~ Updated the Krown Shortcodes plugin to 0.5 (added WP 3.9 support)<br>
~ Made the theme ready for WP 3.9<br><br></li>
<li><strong>Version 1.4.4: 20 February 2014</strong><br>~ Fixed javascript shortcodes (such as lightbox) not working in single projects
<br>~ Improved image loading in IE by adding a whole new "imagesLoaded" plugin<br><br></li>
<li><strong>Version 1.4.3: 21 January 2014</strong><br>~ Added a class to gallery navigation when there is only one image (useful for hiding the nav in such cases)
<br>~ Fixed some image loading bugs in IE
<br>~ Updated the Shortcodes plugin to 0.4 (fixed the iPhone 4 crash issue and improved theme support with other names or childs)<br><br></li>
<li><strong>Version 1.4.2: 15 January 2014</strong><br>~ Fixed an issue with the single portfolio projects and sidebar behavior
<br>~ Fixed sidebar behavior on mobile devices (it now closes on each page reload)
<br>~ Updated Option Tree to version 2.2.0<br><br></li>
<li><strong>Version 1.4.1: 11 January 2014</strong><br>~ Fixed some issues on mobile devices<br><br></li>
<li><strong>Version 1.4: 10 January 2014</strong><br>~ Created a fullscreen slider page template
<br>~ Created a fullscreen video page template
<br>~ Added the option to close modal projects by clicking outside their window
<br>~ Disabled swiping for galleries with just one image
<br>~ Fixed an error with the History back button
<br>~ Removed IE8 compatibility (a lot of unsolvable bugs were given by this old wreck)<br><br></li>
<li><strong>Version 1.3.1: 7 January 2014</strong><br>~ Fixed blog categories not showing up in the masonry grid
<br>~ Fixed vertical projects scroll on mobile devices
<br>~ Fixed pinterest sharing by adding the featured image to the pin
<br>~ Fixed map display issues on iPad
<br>~ Updated the Shortcodes plugin to 0.3 (fixed the twitter shortcode bug)<br><br></li>
<li><strong>Version 1.3: 21 December 2013</strong><br>~ Added the option to set the thumbnail\'s maximum width
<br>~ Added the option to disable 3D animations for the sidebar
<br>~ Fixed vertical project navigation bug<br><br></li>
<li><strong>Version 1.2: 17 December 2013</strong><br>~ Created a fullscreen image page template
<br>~ Added the option for a fixed sidebar
<br>~ Added a new thumbnails hover style
<br>~ Added a new blog style
<br>~ Added portfolio/gallery pagination
<br>~ Added the ability to disable parallax effects on the entire site
<br>~ Disabled map dragging on touch devices
<br>~ Disabled the "fit images" option for modal projects, as it was highly unstable
<br>~ Improved styling for WP 3.8
<br>~ Fixed an issue with the self hosted videos in vertical projects
<br>~ Fixed various responsiveness issues
<br>~ Fixed some css style issues<br><br></li>
<li><strong>Version 1.1.1: 10 December 2013</strong><br>~ Fixed social icons
<br>~ Fixed modal projects responsive behavior<br><br></li>
<li><strong>Version 1.1: 5 December 2013</strong><br>~ Changed the sidebar default behavior to "always hide"
<br>~ Fixed sidebar behavior on touch devices
<br>~ Changed blog post types design
<br>~ Added hashtag for categories
<br>~ Added browser back/forward navigation between projects
<br>~ Fixed the filter bug when closing projects
<br>~ Improved 3D degrade for IE (all versions)
<br>~ Updated the Krown Shortcodes plugin to 0.2 (fixed the columns and tabs & added a "team member" shortcode)
<br>~ Updated the Krown Portfolio plugin to 0.2 (fixed the gallery featured image issue)
<br>~ Fixed blog thumbnails size on small screens
<br>~ Fixed some css style issues<br><br></li>
<li><strong>Version 1.0 : 29 November 2013</strong><br>~ First release</li>
</ul>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'log',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'krown_tracking',
        'label'       => 'Analytics code',
        'desc'        => 'Put your Analytics code inside here. Make sure you include the entire script, not just your ID.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'Write any custom css here. Please don\'t change theme files, because you won\'t be able to easily update in the future.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'css',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_custom_login_logo_uri',
        'label'       => 'Admin logo',
        'desc'        => 'Add a custom <strong>273x63</strong> image for the WordPress login page.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'admin',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_disable_admin_bar',
        'label'       => 'Admin bar',
        'desc'        => 'Because of the full screen layout of this theme, the admin bar interfers with it a lot. You can choose to "minimze it" here.',
        'std'         => 'disabled',
        'type'        => 'radio',
        'section'     => 'admin',
        'choices'     => array(
          array(
            'value' => 'enabled',
            'label' => 'Minimize'
          ),
          array(
            'value' => 'disabled',
            'label' => 'Leave it alone'
          )
        ),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_about',
        'label'       => 'About',
        'desc'        => 'These two fields are required for the theme automatic updates. If you want to protect yourself against security attacks and have the latest features available as soon as they appear, you should complete this section, and you\'ll be notified about new theme updates whenever they appear on ThemeForest.',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_user',
        'label'       => 'Username',
        'desc'        => 'Please insert your ThemeForest username.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'krown_updates_api',
        'label'       => 'API Key',
        'desc'        => 'Please insert your <a target="_blank" href="http://themeforest.net/help/api">ThemeForest API key</a>.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}

?>