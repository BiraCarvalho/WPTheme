<section class="pagina container mb-5" >
	<header class="pt-4" >
		<h1><?php the_title() ?></h1>		
	</header>
	<hr>
	<div class="pagina-wrap">
		<article>
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post(); ?>
			<?php the_content(); ?>		
		<?php } ?>    				
		</article>		
	</div>
	<hr>
</section>