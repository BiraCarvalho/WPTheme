</div>
<footer class="footer">
  <div class="container-fluid">
    
    <!--
    <div class="row row-1" >

      <section class="map" >
        <header>
          <h1>Mapa do Site</h1>
        </header>
        <nav>
          <ul class="navigation" >
            <li><a href="#section-about">sobre</a></li>
            <li><a href="#section-movie">filmes</a></li>
            <li><a href="#section-exhibitions">fotografias</a></li>
            <li><a href="<? //= esc_url("//blog.rosaberardo.com.br",['http','https']) ?>" target="_blank">blog</a></li>
            <li><a href="#section-contact">contato</a></li>
          </ul>
          <ul>
            <li><a href="#">política de privacidade</a></li>
            <li><a href="#">termos de uso</a></li>
            <li><a href="#">sviso legal</a></li>
            <li><a href="#">imprensa</a></li>
          </ul>
        </nav>
      </section>

      <section class="latest-posts" >
        <header>
          <h1>Últimos Posts</h1>
        </header>
        <article>
          <a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor</a>
        </article>
        <article>
          <a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
        </article>
        <article>
          <a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor</a>
        </article>
        <article>
          <a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a>
        </article>
      </section>
      -->

      <!--
      <section class="form-lead" >
        <header>
          <h1>Faça Parte da minha<br />Lista Exclusiva</h1>
        </header>
        <form>
          <input type="text" class="form-control" value="" />
          <button type="submit" class="btn btn-primary" >Enviar</button>
        </form>
      </section>
      -->
      <!--
      <section class="info-contact">
        <header class="hidden" >
          <h1>Informações sobre a empresa e contas em redes sociais</h1>
        </header>
        <div class="social" >
          <a class="icon" href="//www.facebook.com/rosaberardo/" target="_blank" alt="facebook" >
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
          </a>
          <a class="icon" href="//www.instagram.com/rosa_berardo" target="_blank" >
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
        <address class="address">
          <strong>Rosa Maria Berardo</strong><br />
          Goiânia - GO<br />
        </address>
      </section>

    </div>
    -->

    <div class="row row-2" >
      
      <div class="col-md-3">
        <a class="brand" href="/">
          <span>Rosa</span><span>Berardo</span>
          <img src="<?=rosaberardo__get_image( "marca.png" )?>" />
        </a>
      </div>
      
      <div class="col-md-8" >
        <div class="copyright" >
        Todos os direitos reservados - Copyright © <?=date("Y")?>
        </div>
      </div>

      <div class="col-md-1 text-right">
        <div class="social" >
          <a class="icon" href="//www.facebook.com/rosaberardo/" target="_blank" alt="facebook" >
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
          </a>
          <a class="icon" href="//www.instagram.com/rosa_berardo" target="_blank" >
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>

    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
