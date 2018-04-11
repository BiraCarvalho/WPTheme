<?php 

  $args = array( 
    'post_type' => 'photos', 
    'posts_per_page' => -1, 
    'orderby'=>'title', 
    'order'=>'ASC'  
  );
  $loop = new WP_Query( $args );

?>
<section class="pages photos" id="section-photos">
    
    <header>
      <h1><?=get_the_title()?></h1>
    </header>  
    
    <div class="wrap-section boxes">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article class="box">
        <a href="<?=get_the_permalink();?>">
          <img src="<?=WPBaseTheme__get_thumb_url( get_the_ID() )?>" />
          <div class="legend">
            <span>
              <h2><?=get_the_title();?></h2>
            </span>
          </div>        
        </a>
      </article>
     <?php endwhile; ?>         
     </div>
     
</section>