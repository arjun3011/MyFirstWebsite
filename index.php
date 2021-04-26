<?php 
# main blog page 
 get_header(); 
 pageHeaderImage(array(
   'title'=>'Wlecome to the blog',
   'photo'=> 'https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
 ));
 ?>

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

