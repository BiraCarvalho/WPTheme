<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >

<nav  id="menu-principal" class="navbar navbar-fixed-top navbar-inverse">
  <h1 class="hidden" >Menu Principal</h1>
  <div class="container-fluid" >

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-primary">
        <span class="sr-only">Clique para navegador</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="brand navbar-brand" >
        <a href="#">
          <span>Rosa</span><span>Berardo</span>
        </a>
        <img src="<?=rosaberardo__get_image( "marca.svg" )?>" />
      </span>
    </div>

    <div class="collapse navbar-collapse" id="navbar-primary">

      <?php if( is_home() || is_front_page() ){ ?>
      <ul class="navigation nav navbar-nav navbar-center">
        <li><a href="/#section-about"><?=__("sobre","rb") ?></a></li>
        <li><a href="/#section-movie"><?=__("filmes","rb") ?></a></li>
        <li><a href="/#section-photos"><?=__("fotografias","rb")?></a></li>
        <li><a href="/#section-contact"><?=__("contato","rb") ?></a></li>
      </ul>
      <?php } else { ?>
      <ul class="navigation nav navbar-nav navbar-center">
        <li><a href="/sobre"><?=__("sobre","rb") ?></a></li>
        <li><a href="/filmes"><?=__("filmes","rb") ?></a></li>
        <li><a href="/fotografias"><?=__("fotografias","rb") ?></a></li>
        <li><a href="/#section-contact"><?=__("contato","rb") ?></a></li>
      </ul>
      <?php } ?>

      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="<?= esc_url("//blog.rosaberardo.com.br",['http','https']) ?>" target="_blank">blog</a></li>-->
        <!--<li><a href="<?= esc_url("//acasadocinema.com.br",['http','https']) ?>" target="_blank">a casa do cinema</a></li>-->
        <li class="social" >
          <a class="icon" href="//www.facebook.com/rosaberardo/" target="_blank" alt="facebook" >
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
          </a>
          <a class="icon" href="//www.instagram.com/rosa_berardo" target="_blank" alt="instagram" >
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </li>
        <li class="language" >
            <a href="/" >pt</a>
            <a href="/en" >en</a>        
        </li>
      </ul>

    </div>

  </div>
</nav>
<div class="layout" >
