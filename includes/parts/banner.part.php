<?php $section_page_id = 12; ?>
<section class="banner" >
    <div class="wrap-section">
      <div class="form-lead" >
        <!--
        <span>
          <h1>Quer receber o melhor conteúdo de cinema por email?</h1>
        </span>
        <span>
          <h2>Faça parte da minha<br />LISTA EXCLUSIVA</h2>
          <form>
            <input type="text" class="form-control" value="" placeholder="Deixe aqui o seu melhor email" />
            <button type="submit" class="btn btn-primary" >CADASTRAR</button>
          </form>
        </span>
        -->

        <!-- Texto do topo da página sobre -->
        <blockquote >
        <?=get_field( "page-about-quote-text", $section_page_id )?>
        </blockquote>

      </div>
    </div>
  </section>
