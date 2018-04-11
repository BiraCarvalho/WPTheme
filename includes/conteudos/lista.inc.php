<section class="lista container mb-5" >
	<header class="pt-4" >
		<h1><?php post_type_archive_title(); ?></h1>		
	</header>
    <hr>
	<div class="lista-wrap">     
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post() ?>
        <article>
            <header>
                <a href="<?= get_the_permalink() ?>">
                    <h2><?php the_title(); ?></h2>
                </a>            
                <a href="<?= get_the_permalink() ?>" >
                    <figure style="background-image: url(<?= WPBaseTheme__get_thumb_url( get_the_ID(), 'lista-thumb' ) ?>)" >
                        <figcaption class="d-none"><?php the_title(); ?></figcaption>
                    </figure>                
                </a>
            </header>
            <div class="d-block my-3" >
                <?php the_excerpt() ?>
            </div>
        </article>
        <div class="clearfix"></div>
		<?php } ?>    						
	</div>
    <div class="lista-paginacao d-none">
        <?= paginate_links(['type' => 'list']) ?>
    </div>
    <hr>
</section>