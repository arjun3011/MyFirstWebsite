<?php
# indiual program page   
  get_header();

  while(have_posts()) {
    the_post(); 
    pageHeaderImage();
    ?>
  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link("program"); ?>"><i class="fa fa-home" aria-hidden="true">
      </i> All Programs  </a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
  <div class="generic-content"><?php the_content(); ?></div>
  <?php 
$RelatedProfessor =new WP_Query(array(
  'posts_per_page' => -1 ,
  'post_type'  => 'professor',
  'orderby'   => 'title',
  
  'order' => 'ASC',
  'meta_query'=>array(array(
      'key'=>'related_programs',
      'compare'=>'LIKE',
      'value'=>'"' .get_the_ID() . '"',

))
) );
if ($RelatedProfessor->have_posts()){
echo'<hr class = "section-break">';
echo "<h2  class ='headline headline--medium'>Related " . get_the_title() . " Professors </h2>";
echo '<ul class="link-list min-list">';

 while($RelatedProfessor-> have_posts()){
    $RelatedProfessor-> the_post(); 
    ?>
    <div class="generic-content" >
              <h4 class="headline headline--small"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
   </div>

    <li class="professor-card__list-item">
    <a class= "professor-card"href="<?php the_permalink(); ?>">
    <img class = "professor-card__image" src="<?php the_post_thumbnail_url('image_landscape');?>">
    <span class="professor-card__name"><?php the_title(); ?></span>
    </a></li>
  
    <?php }
    echo "</ul>";
} wp_reset_postdata();




         $today =date('Ymd');
          $homepageEvents =new WP_Query(array(
            'posts_per_page' => 2 ,
            'post_type'  => 'event',
            'orderby'   => 'meta_value_num', //probably you will need this because the value is date
            'meta_key'  => 'event_date',
            'order' => 'ASC',
            'meta_query'=>array(array(
              'key'=>'event_date',
              'compare'=> '>=',
              'value'=>$today,
              'type'=>'numeric',
            ),
            array(
                'key'=>'related_programs',
                'compare'=>'LIKE',
                'value'=>'"' .get_the_ID() . '"',

            )
          )
      ) );
      if ($homepageEvents->have_posts()){
        echo'<hr class = "section-break">';
        echo "<h2  class ='headline headline--medium'>Upcoming " . get_the_title() . " Events</h2>";
            while($homepageEvents-> have_posts()){
              $homepageEvents-> the_post(); 
              get_template_part('template-parts/event','front_page');     
               }
      }
       wp_reset_postdata();
        
     
  }
  get_footer();

?>