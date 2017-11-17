<?php 
	
	$category_name = single_cat_title( '', false );
	$category      = get_term_by('name', $category_name, 'category');
	
?>
<section class="pages single" id="section-category-<?=$category->slug?>">
    
	<header>
		<h1><?=$category->name?></h1>
	</header>  

	<div class="wrap-section boxes">
	<?php if ( have_posts() ) while ( have_posts() ) {  the_post(); ?>

		<h2><a href="<?php get_permalink( 0, true ); ?>" ><?php the_title(); ?></a></h2>

	<?php } ?>               
	</div>

</section>