<?php 
# main event page 
 get_header(); ?>
 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Events</h1>
      <div class="page-banner__intro">
      </div>
    </div>  
  </div>
  <div class="container container--narrow page-section">
  <?php 

    while (have_posts()){
        the_post();
        ?>
        <h2 class="headline headline--medium headline--post-title"><?php the_title(); ?></h2> 
        <hr>
        <div class="metabox">
            <p>Posted by <?php  the_author_posts_link(); ?> on <?php the_time('F-Y');?> in <?php echo get_the_category_list(',')?> </p>
        </div>
        <div class ="generic-content">
            <?php the_excerpt(); ?>
            <p><a class ="btn btn--small btn--blue" href='<?php the_permalink();?>'>Continue reading &raquo;</a></p>
        </div>
    <?php
    }
    echo paginate_links();
get_footer();
?>
