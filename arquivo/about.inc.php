<section class="pages about" id="section-about" >

  <header>
    <h1><?=get_the_title()?></h1>
  </header>  
  
  <?php $page_id = get_the_ID(); ?>
  
  <div class="wrap-section">     
    <article>
      <div class="top">
        <div class="wrap wrap-image">
          <img src="<?=get_field( "page-about-quote-image", $page_id )?>" />
        </div>
        <div class="wrap wrap-text">
          <?=get_field( "page-about-quote-text", $page_id )?>
        </div>
      </div>
      <div class="introduction">
        <div class="wrap wrap-text">
          <?=get_field( "page-about-introduction-text", $page_id )?>
        </div>
      </div>
      <div class="curriculum">
        <div class="wrap-content">
		      <div class="wrap wrap-image">
		        <img src="<?=get_field( "page-about-curriculum-image", $page_id )?>" />
		      </div>
		      <div class="wrap wrap-text">
		        <?=get_field( "page-about-curriculum-text", $page_id )?>
		      </div>
        </div>
      </div>
    </article>
  </div>

</section>
