<?php

$this->layout("_theme");

?>

<?php
  $this->start("css");
?>
<link rel="stylesheet" href="<?= url("/assets/web/css/demanda.css"); ?>" />
<?php
  $this->end();
?>

    <section class="area-box">

        <div class="box">

            <div>
               
            <img src="<?= url("/assets/web/imagens/demanda.png")?>">
            
            </div>
           

            <form method="post">

                <span>Nome Completo:</span>
                <p>Laura</p>
                <span>Informe um e-mail válido:</span>
                <p>lau.@gmail.com</p>
                <span>Informe seu CPF:</span>
                <p>213.245.124-54</p>
                <span>Informe seu endereço:</span>
                <p>Rua rio rosa, 123 - Bela Cruz</p>
                <span>Relate seu problema:</span>
                <p>[...]</p>
                
            </form>

        </div>

        <div class="box2">

            <div>
               
            <img src="<?= url("/assets/web/imagens/demanda2.png")?>">
            
            </div>
           

            <form method="post">

                <span>Retorno:</span>
                <input type="text" name="nome" placeholder="Feedback" autofocus>
                <button>Enviar</button>
                <a href="<?= url("/") ?>">Voltar</a>
                
            </form>

        </div>


    </section>

  
