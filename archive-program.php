<?php 
# main program page 
 get_header(); 
 pageHeaderImage(array(
  'title' => 'All Programs',
  'photo' => 'https://static3.bigstockphoto.com/1/5/3/large2/351480812.jpg'

));
 ?>
 
  <div class="container container--narrow page-section">
  <ul class ="link-list min-list">
  <?php 
   while( have_posts()){
      the_post(); ?>
     <li><a href ="<?php the_permalink();?>"><?php the_title();?></a></li>

      <?php }  wp_reset_postdata();
  ?>
  </ul>

    <?php
   echo paginate_links(); 
get_footer();
?>

