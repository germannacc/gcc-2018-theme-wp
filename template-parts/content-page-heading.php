<?php // if the page has a featured image
if  (has_post_thumbnail( ) )  { ?>

<header class="hero-section" role="banner">

  <?php
     get_template_part( 'template-parts/content', 'weather-alert' );
    ?>


<?php the_post_thumbnail();  ?>

  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="row expanded crumbs-container">

        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" aria-label="Breadcrumb">
          <?php the_breadcrumb() ?>
        </nav>

  </div>

</header>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
  <?php
   get_template_part( 'template-parts/content', 'weather-alert' );
  ?>


<div class="row gutter-small expanded">

<header class="hero-section-plain">



  <?php //if the child page doesn't have a featured images
  //gcc_featured_image_on_child(); ?>

  <div class="hero-section-text">

     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="crumbs-container-plain  show-for-medium">

        <nav aria-label="<?php _e('You are here:');?>" aria-label="Breadcrumb">
          <?php the_breadcrumb() ?>
        </nav>

  </div>
</header>


</div>

<?php } ?>
