 
<?php

$this->layout("_theme");

?>

<header>
      <nav>
        <img src="<?= url("/assets/web/imagens/logo.PNG") ?>" class="logo" >
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="https://www.saojeronimo.rs.gov.br/" target="_blank" class="pre">Prefeitura Municipal</a></li>
          <li><button id="relatar">Relatar</button></li>
          <li><button class="hidden" id="demandas">Demandas</button></li>
          <li><button id="login">Entrar</button></li>
        </ul>
      </nav>
    </header>


<section class="flexbox">

      <div class="av">

          <img src="<?= url("/assets/web/imagens/praca.jpg") ?>" >
          <div class="boxtexto">
            <h4>Praça da Cidade</h4>
            <p>
              Show de Bandas de Rock. 
              End: Praça Júlio de Castilhos. 
              Data: 30/02/2024  
            </p>
          </div>

      </div>

      <div class="av">

          <img src=" <?= url("/assets/web/imagens/saude.jpg") ?>" >
          <div class="boxtexto">
            <h4>Unidade de Saúde</h4>
            <p> Dia D de vacinação da gripe, NÃO PERCA.
                End: Unidade de Saúde Central (Postinho do Centro)  
                Data: 05/11/2023  
          </p>
          </div>

      </div>

      <div class="av">

          <img src=" <?= url("/assets/web/imagens/igreja.jpg") ?> " >
        <div class="boxtexto">
          <h4>Igreja Matriz</h4>
          <p> Nos dias 15/06 e 16/06, 
            a rua em frente a Igreja Matriz,
            estará interditada para reparos no asfalto </p>
        </div>

      </div>

  </section>
 

  <button class="hidden" id="avisos">Publicar</button>