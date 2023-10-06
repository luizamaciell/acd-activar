<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Registro</title>
  <style>
  body {
  font-family: Arial, sans-serif;
  margin: 10;
  padding: 100;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color:whitesmoke;
}

.container {
  background-color: white;
  padding: 100px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
}

.login-form {
  max-width: 300px;
  margin: 0 auto;
}

.login-form h3 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.form-group {
  margin-bottom: 10px;
  color: white;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: darkorange;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 25px;
}

button {
  width: 105%;
  padding: 10px;
  background-color:orangered;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: orange;
}

</style>
</head>
<body>

<div class="container">
<h3>Cadastrar</h3>
    <form>
        <div>
            Nome: <input name="name" type="text">
        </div>
        <div>
            E-mail: <input name="email" type="text">
        </div>
        <div>
            Senha: <input name="password" type="text">
        </div>
        <div>
            <button>Enviar</button>
        </div>
        <p id="success"></p>

        <a>Já tem uma conta?<a href="<?= url("login"); ?>">Faça login</a>
    </form>
</div>



<script type="text/javascript">
    var success = document.querySelector("#success");
    const form = document.querySelector("form");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Validar se todos os campos estão preenchidos
        const inputs = form.querySelectorAll('input');
        let allFieldsFilled = true;
        inputs.forEach((input) => {
            if (input.value.trim() === '') {
                allFieldsFilled = false;
                return;
            }
        });

        if (allFieldsFilled) {
            const data = await fetch(`<?= url("api/user"); ?>`, {
                method: "POST",
                body: new FormData(form)
            });
            const user = await data.json();
            console.log(user);
            success.innerHTML = 'Usuário cadastrado com sucesso';
        } else {
            success.innerHTML = 'Por favor, preencha todos os campos do formulário';
        }
    });
  
</script>
   
