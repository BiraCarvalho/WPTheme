<?php 
$section_page_id = 12; 
$section_page_id = pll_get_post($section_page_id) ?: $section_page_id;

$args = array(
  'post_type' => 'movies',
  'posts_per_page' => 4,
  'orderby'=>'title',
  'order'=>'ASC'
);

$loop = new WP_Query( $args );

?>
<section class="movies" id="section-movie" >
  <header>
    <h1>Filmes</h1>
    <a href="<?=get_page_link($section_page_id)?>" >veja mais</a>
  </header>
  <div class="wrap-section boxes">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article class="box">
        <a href="<?=get_the_permalink();?>">
          <img src="<?=rosaberardo__get_thumb_url( get_the_ID() )?>" />
          <div class="legend">
            <div>
              <h2>
                <?=get_the_title()?><br>                
                
                <?php if( pll_current_language() != "pt" ){ ?>
                <small class="translation"><?=get_field( "movies-titulo-" . pll_current_language(), get_the_ID() )?></small><br>
                <?php } ?>

                <small>
                  <?=get_field( "movies-genero", get_the_ID() )?> - 
                  <?=get_field( "movies-minutagem", get_the_ID() )?>
                </small>
              </h2>
            </div>            
            <span class="icon-play glyphicon glyphicon-play-circle"></span>
          </div>          
        </a>
      </article>
     <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
