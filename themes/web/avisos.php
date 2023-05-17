<?php

$this->layout("_theme");

?>

   
    <div class="form">
        <div class="envia">
       <h1>Avisos Públicos</h1>
                <span>Imagem:</span>
                <input type="file" accept="image/" id="img">
                <span>Título:</span>
                <input type="text" id="titulo" placeholder="Título">
                <span>Descrição:</span>
                <input type="text" id="descricao" placeholder="Descrição">
                <button id="enviar">Enviar</button>
                <a href="<?= url("/") ?>">Voltar</a>
               
        </div>
    </div>
        
    


