<?php 
# main event page 
 get_header(); 
 pageHeaderImage(array(
   'title' => 'All Events',
   'subtitle' => 'See it urself',
   'photo' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80'

 ));
 ?>

  <div class="container container--narrow page-section">
  <?php 
   $today =date('Ymd');
   $homepageEvents =new WP_Query(array(
     'posts_per_page' => -1 ,
     'post_type'  => 'event',
     'orderby'   => 'meta_value_num', //probably you will need this because the value is date
     'meta_key'  => 'event_date',
     'order' => 'ASC',
     'meta_query'=>array(array(
       'key'=>'event_date',
       'compare'=> '>=',
       'value'=>$today,
       'type'=>'numeric',
     )
   )
) );
 ?>
 <div class="container container--narrow page-section">
  
  <div class="generic-content"> 
  <h4 class="headline headline--small t-left" >To access past events click on this link <a href = "<?php echo site_url('/past-event');?>"><?php echo "Past Events "?></a></h4>

</div>
 
 <hr>
 <?php
   while($homepageEvents-> have_posts()){
     $homepageEvents-> the_post(); 
     get_template_part('template-parts/event','main_event_page');     

       }  wp_reset_postdata();
 
get_footer();
?>

