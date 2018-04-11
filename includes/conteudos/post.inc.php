<section class="pages single" id="section-single" >

	<div class="wrap-section">     
		<article>
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		
		<?php } ?>    	
			
		</article>
	</div>

</section>