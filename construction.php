<?php
/**
 * Template Name: Construction Page
 *
 * A custom page template.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Theme
 * @since 0.1.0
*/
?>
<html>
	<header>
		<meta charset="UTF-8" >
		<title>Rosa Berardo - Cinema e Fotografia - Novo site em breve!</title>
		<style type="text/css">
			body{
				font-family:  monospace;
				background-color: #333;
			}
			.quadro{
			    position: absolute;
			    text-align: center;
			    width: 100%;
			    max-width: 640px;
			    max-height: 320px;
			    margin: -190px 0 0 -320px;
			    left: 50%;
			    top: 50%;
			 }
			.quadro img{
				width: 100%;
				max-width: 250px;
				max-height: 250px;
				margin-bottom: 15px;
			}
			.quadro p{
				text-transform: uppercase;
				color: #fff;
				font-size: 2rem;
				text-align: center;
				margin:0;
				padding: 0;
			}
			.quadro a{
				color: #fefefe;
			}
			
			@media (min-height:640px) {
				.quadro{
				    max-height: 360px;
				    margin-top: -200px;
				 }
				.quadro img{
					max-width: 360px;
					max-height: 360px;
				}				
			}
		</style>
	</header>
	<body>
		<div class="quadro">
			<img src="<?= rosaberardo__get_image( "marca.svg" ) ?>">
			<p>Novo site em breve!<br />Até lá, entre em contato pelo email:
			<a href="mailto:rosa@rosaberardo.com.br">rosa@rosaberardo.com.br</a>.</p>			
		</div>
	</body>
</html>
