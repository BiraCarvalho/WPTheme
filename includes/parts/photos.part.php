<?php
  $section_page_id = 200;

  $args = array(
    'post_type' => 'photos',
    'posts_per_page' => 4,
    'orderby'=>'title',
    'order'=>'ASC',
  );
  $loop = new WP_Query( $args );

?>
<section class="photos" id="section-photos" >
  <header>
    <h1><?=wpm_translate_string(get_the_title($section_page_id))?></h1>
    <a href="<?=wpm_translate_url(get_page_link($section_page_id))?>" >veja mais</a>
  </header>
  <div class="wrap-section boxes">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article class="box">
        <a href="<?=get_the_permalink();?>">
          <img src="<?=rosaberardo__get_thumb_url( get_the_ID() )?>" />
          <div class="legend">
            <span>
              <h2><?=get_the_title();?></h2>
            </span>
          </div>
        </a>
      </article>
     <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
