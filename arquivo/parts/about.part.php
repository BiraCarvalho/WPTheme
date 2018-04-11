<?php $section_page_id = 12; ?>
<section class="about" id="section-about" >
  <div class="wrap-section">
    <div class="photo">
      <img src="<?=get_field( "about-home-imagem", $section_page_id )?>" />
    </div>
    <div class="text">
      <header>
        <h1><?=get_the_title( $section_page_id )?></h1>
      </header>
        <?=get_field( "about-home-resumo", $section_page_id )?>
        <br />
        <a href="<?=get_page_link( $section_page_id )?>" class="btn btn-primary">Continue lendo</a>
    </div>
  </div>
</section>
