<?php 
# main past event page 
 get_header();
 pageHeaderImage(array(
  'title'=>'Past Events',
  'photo'=> 'https://previews.123rf.com/images/sidmay/sidmay1802/sidmay180200786/96206403-past-event-isometric-icon-isolated-on-color-background-.jpg'
));
 ?>

  <div class="container container--narrow page-section">
  <?php 
   $today =date('Ymd');
   $PastEvents =new WP_Query(array(
     'paged' => get_query_var('paged'),
     'posts_per_page' => -1,
     'post_type'  => 'event',
     'orderby'   => 'meta_value_num', //probably you will need this because the value is date
     'meta_key'  => 'event_date',
     'order' => 'DESC',
     'meta_query'=>array(array(
       'key'=>'event_date',
       'compare'=> '<',
       'value'=>$today,
       'type'=>'numeric',
     )
   )
) );

   while($PastEvents-> have_posts()){
     $PastEvents-> the_post(); 
     get_template_part('template-parts/event','main_event_page');     
   }wp_reset_postdata();
get_footer();
?>

