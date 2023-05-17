<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@juda Prefeitura</title>
    <script src="<?= url("/assets/web/js/menu.js") ?>" async></script>
    <script src="<?= url("/assets/web/js/register.js") ?>" async></script>
    <script src="<?= url("/assets/web/js/login.js") ?>" async></script>
    <script src="<?= url("/assets/web/js/avisos.js") ?>" async></script>
    <script src="<?= url("/assets/web/js/problema.js") ?>" async></script>
    <script src="<?= url("/assets/web/js/demanda.js") ?>" async></script>

    <?php
       if($this->section("css")){
        echo $this->section("css");
       }
    ?>

  
  </head>

  <body>
   
    <main></main>
    
    
  <?php
  echo $this->section("content");
  ?>

  </body>
</html>
