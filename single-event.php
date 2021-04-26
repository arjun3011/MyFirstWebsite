<?php
# indiual event page   
  get_header();

  while(have_posts()) {
    the_post();
    pageHeaderImage();
    ?>

  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url("/events"); ?>"><i class="fa fa-home" aria-hidden="true">
      </i> Event Home  </a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
  <div class="generic-content"><?php the_content(); ?></div>
  <?php 
  $relatedPrograms =get_field('related_programs');
  if ($relatedPrograms){
  echo'<hr class = "section-break">';
  echo '<h2 class ="headline headline--medium">Related Programs</h2>';
  echo '<ul class="link-list min-list" >';

foreach($relatedPrograms as $programs){ ?>
  <li><a href = "<?php echo  get_the_permalink($programs);?>"><?php echo get_the_title($programs);?></a></li>
  
<?php }
echo '</ul>';
  }
?>
  </div> 

  <?php }
  get_footer();

?>