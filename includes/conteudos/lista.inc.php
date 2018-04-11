<section class="lista container mb-5" >
	<header class="pt-4" >
		<h1><?php post_type_archive_title(); ?></h1>		
	</header>
    <hr>
	<div class="lista-wrap">     
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post() ?>
        <article>
            <h2>
            <a href="<?= get_the_permalink() ?>">
                <?php the_title(); ?>
            </a>
            </h2>
            <a href="<?= get_the_permalink() ?>">
                <img class="w-25 float-left mr-3 mb-2" src="<?=WPBaseTheme__get_thumb_url( get_the_ID() )?>" >
            </a>
            <?php the_excerpt() ?>            
        </article>
        <hr>
        <div class="clearfix"></div>
		<?php } ?>    						
	</div>

    <div class="lista-paginacao d-none">
    <?= paginate_links(['type' => 'list']) ?>
    </div>
    <hr>
</section>