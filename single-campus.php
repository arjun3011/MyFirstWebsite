<?php
# indiual campus page  
  get_header();
  while(have_posts()) {
    the_post(); 
    pageHeaderImage();
    ?>
  

  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url("/campus"); ?>"><i class="fa fa-home" aria-hidden="true">
      </i>Back to campus  </a> </p>
    </div>
  <div class="generic-content"><?php the_content();  ?></div>
  </div>    
  <?php 
   
}
  get_footer();

?>