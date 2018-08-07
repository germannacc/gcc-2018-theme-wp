<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gccwp-2018
 */
  $callto_button_1_text = get_field('callto_button_1_text', 'option');
  $callto_button_1_url = get_field('callto_button_1_url', 'option');
  $callto_button_2_text = get_field('callto_button_2_text', 'option');
  $callto_button_2_url = get_field('callto_button_2_url', 'option');
  $career_coach_portal_text = get_field('career_coach_portal_text', 'option');
  $career_coach_portal_url = get_field('career_coach_portal_url', 'option');
  $career_coach_portal_image = get_field('career_coach_portal_image', 'option');
  $tips_url = get_field('tips_url ', 'option');
?>
    <div class="off-canvas position-left reveal-for-large" id="main-menu">

        <button class="close-button" aria-label="<?php _e('Close menu', 'gcc-wp-2018'); ?>" type="button" data-close>
       <span aria-hidden="true">&times;</span>

      </button>

        <div class="row column">

            <div id="menu-container" class="off-canvas position-left reveal-for-large" data-off-canvas >

                <div class="row branding">

                    <div class="button-group expanded calltos">
                        <?php if( !empty($callto_button_1_text) ): ?>
                        <a href="<?php echo $callto_button_1_url; ?>" class="button primary">
                            <?php echo $callto_button_1_text; ?>
                        </a>
                        <?php endif; ?>
                        <?php if( !empty($callto_button_2_text) ): ?>
                        <a href="<?php echo $callto_button_2_url; ?>" class="button secondary">
                            <?php echo $callto_button_2_text; ?>
                        </a>
                        <?php endif; ?>
                    </div>

                    <a href="<?php echo esc_url( home_url() )?>" class="logo">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <p class="tagline lead">
                        <?php bloginfo( 'description' ); ?>
                    </p>

                </div>

          <?php
          //function located in inc/main-navigation.php
          gcc_wp_2018_main_navigation(); ?>

                <div class="menu-extras">

                  <?php

$image = get_field('career_coach_portal_image', 'option');

if( !empty($image) ):

	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

?>

  <a href="<?php echo $career_coach_portal_url; ?>" class="career-coach"><span><?php echo $career_coach_portal_text; ?></span>

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

  </a>


<?php endif; ?>



                  <a href="<?php echo esc_url( home_url( '/alumni/alumni-membership-form/', 'gcc-wp-2018' ) ); ?>" class="menu-banner"><?php esc_html_e('Germanna Alumni', 'gcc-wp-2018'); ?></a>

                  <?php if( !empty($tips_url) ): ?>

                  <a href="<?php echo $tips_url;?>" class="tips-logo" aria-hidden="true">
                      <?php echo _e(
                  'T.I.P.S.', 'gcc-wp-2018' ); ?>
                  </a>

                   <?php //function location in inc/social-icons.php
                   gcc_wp_2018_social_icons(); ?>

                 <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
