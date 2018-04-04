<section class="pages single" id="section-photos">
  
  <header>
    <h1>Fotografias</h1>
  </header>

	<div class="wrap-section">  
    <?php $sidebar_menu = wpbasetheme__page_menu( "photos", get_the_ID() ); ?>
    <aside class="sidebar">
      <ul class="nav nav-pills nav-stacked" >
        <?php foreach( $sidebar_menu as $menu_item ){ ?>
        <li <?=$menu_item["active"] ? "class=\"active\"" : ""; ?> >
          <a href="<?=$menu_item["permalink"]?>"><?=$menu_item["title"]?></a>
        </li>
        <?php } ?>
      </ul>
    </aside>
    
    <article class="content">
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post(); ?>
		  <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
		<?php } ?>
		</article>

	</div>

</section>