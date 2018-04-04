<?php

  $args = array(
    'post_type' => 'movies',
    'posts_per_page' => -1,
    'orderby'=>'title',
    'order'=>'ASC'
  );
  $loop = new WP_Query( $args );

?>
<section class="pages movies" id="section-movies">

    <header>
      <h1><?=wpm_translate_string(get_the_title())?></h1>
    </header>

    <div class="wrap-section boxes">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <article class="box">
          <a href="<?=get_the_permalink();?>">
            <img src="<?=wpbasetheme__get_thumb_url( get_the_ID() )?>" />
            <div class="legend">
              <div>
                <h2>
                  <?=get_the_title()?><br>

                  <?php if( wpm_get_language() != "pt" ){ ?>
                  <small class="translation"><?=get_field( "movies-titulo-" . wpm_get_language(), get_the_ID() )?></small><br>
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
     </div>

</section>
