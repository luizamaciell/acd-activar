<?php

$this->layout("_theme");

?>

    <section class="area-box">

        <div class="problems">

            <div>
               
            <img src=" <?=url("/assets/web/imagens/boxproblemas.jpg")?>">
            
            </div>
           

            <form method="post">

                <span>Nome Completo:</span>
                <input type="text" name="nome" placeholder="Usuário" autofocus>
                <span>Informe um e-mail válido:</span>
                <input type="text" name="email" placeholder="E-mail">
                <span>Informe seu CPF:</span>
                <input type="text" name="cpf" placeholder="CPF">
                <span>Informe seu endereço:</span>
                <input type="text" name="end" placeholder="Endereço">
                <span>Relate o seu problema:</span>
                <input type="text" name="texto" placeholder="Problema" class="texto">
                <button type="submit" id="enviar">Enviar</button>
                
            </form>

            <a href="<?= url("/") ?>">Voltar</a>

        </div>

    </section>

  
    
