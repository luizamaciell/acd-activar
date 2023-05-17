<?php

$this->layout("_theme");

?>

<?php
  $this->start("css");
?>
 <link rel="stylesheet" href="<?= url("/assets/web/css/register.css"); ?>" />
<?php
  $this->end();
?>


    <section class="area-login">

        <div class="login">

            <div>
               
            <a href="<?= url("/") ?>"><img src="<?= url("/assets/web/imagens/logo.PNG")?>"></a>
            
            </div>

            <form method="post">

                <span>Crie um Usuário:</span>
                <input type="text" name="nome" placeholder="Usuário" autofocus>
                <span>Informe um e-mail válido:</span>
                <input type="text" name="email" placeholder="E-mail">
                <span>Informe seu CPF:</span>
                <input type="text" name="cpf" placeholder="CPF">
                <span>Crie uma senha:</span>
                <input type="password" name="senha" placeholder="Senha">
                <span>Confirme sua senha</span>
                <input type="password" name="senhaC" placeholder="Confime sua Senha">
                <button type="submit" value="entrar">Cadastrar</button>
                

            </form>

            <p>Já possui uma conta? <a href="<?=url("/entrar")?>">Fazer Login.</a>  </p>

        </div>

    </section>
