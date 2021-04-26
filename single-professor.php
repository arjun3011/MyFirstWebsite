<?php
# indiual professor page   
  get_header();

  while(have_posts()) {
    the_post(); 
    pageHeaderImage(array(
      'photo'=>'https://i.pinimg.com/originals/2a/cd/b1/2acdb1dc422f9707aedd084f7bfbb3db.jpg'
    ));
    ?>
    
  <div class="container container--narrow page-section">
  
  <div class="generic-content">   
  <div class ="row group ">
  <div class= "one-third">
  <?php the_post_thumbnail('image_portrait');?></div>
  <div class="two-thirds">
  <?php the_content();?></div>
  </div>
  </div>
  
  
  <?php 
  $relatedPrograms =get_field('related_programs');
  if ($relatedPrograms){
  echo'<hr class = "section-break">';
  echo '<h2 class ="headline headline--medium">Subjects Taught</h2>';
  echo '<ul class="link-list min-list" >';

foreach($relatedPrograms as $programs){ ?>
  <li> <a href = "<?php echo  get_the_permalink($programs);?>"><?php echo get_the_title($programs);?></a></li>
  
<?php }
echo '</ul>';
  }
?>
  </div> 
  </div> 

  <?php }
  get_footer();

?>