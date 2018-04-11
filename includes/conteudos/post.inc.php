<section class="post container mb-5" >
	<header class="pt-4" >
		<h1><?= WPBaseTheme__post_type_title() ?></h1>
	</header>
	<hr>
	<div class="post-wrap">
		<article>
		<?php if ( have_posts() ) while ( have_posts() ) {  the_post(); ?>
			<header class="pb-2" >
				<h2><?php the_title() ?></h2>
			</header>		
			<?php the_content(); ?>		
		<?php } ?>    				
		</article>
	</div>
	<?= WPBaseTheme__sharebuttons()	?>
	<hr>
</section>
<section class="lista container" >
	<div class="lista-wrap">
		<?php $more_posts = WPBaseTheme__get_posts( get_post_type(), get_the_ID(), 3 ) ?>
		<?php if ($more_posts) foreach( $more_posts as $more_post_ID => $more_post){ ?>
        <article class="mb-1 pb-1">
            <h2>
            	<a href="<?= $more_post["permalink"] ?>">
				<?= $more_post["title"] ?>
            </a>
            </h2>
            <a href="<?= $more_post["permalink"] ?>">
                <img class="w-25 float-left mr-3 mb-2" src="<?=WPBaseTheme__get_thumb_url( $more_post_ID )?>" >
            </a>
			<?= $more_post["excerpt"] ?>
        </article>
        <div class="clearfix"></div>
		<?php } ?>
	</div>
    <hr>
</section>
<div class="btn-back-wrap container d-flex mb-3">
    <a class="btn btn-default py-2 px-3 m-auto" href="#!" onclick="window.history.back()" >Voltar</a>
</div>