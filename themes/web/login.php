<?php

$this->layout("_theme");

?>

<?php
  $this->start("css");
?>
 <link rel="stylesheet" href="<?= url("/assets/web/css/login.css"); ?>" />
<?php
  $this->end();
?>

    <section class="area-login">

        <div class="login">

            <div>
               
              <a href="<?= url("/") ?>"><img src="<?= url("/assets/web/imagens/logo.PNG")?>"></a>
            
            </div>

            <form method="post">

                <span>Usuário:</span>
                <input type="text" name="nome" placeholder="Informe seu Usuário" autofocus>
                <span>Senha:</span>
                <input type="password" name="senha" placeholder="Informe sua Senha">
                <button type="submit" id="entrar">Entrar</button>
                <button type="submit" id="admin">Admin</button>

            </form>

            <p>Ainda não possui uma conta? <a href="<?= url("/cadastro") ?>">Criar conta.</a>  </p>

        </div>

    </section>

    
    
