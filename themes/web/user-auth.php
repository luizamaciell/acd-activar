<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Login</title>
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
<h3>Login</h3>
      <div data-conteudo="entrar" id="entrar">           
      <form class="form32">
       <div>
        Email: <input type="text" name="email">
        </div>
        <div>
        Senha: <input type="password" name="password">
        </div>  
        <button>Entrar</button>
        <p id="errorDeLoged"></p>
      </form>
      <a>Quer criar uma conta?<a href="<?= url("registro"); ?>">Registrar</a>
</div>
</div>
<script type="text/javascript" async>
    var trueOrFalse = false;
    
    const url = `<?= url("api/user/login");?>`;

    async function request (url, options) {
        try {
            const response = await fetch (url, options);
            const data = await response.json();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }
    var pError = document.querySelector("#errorDeLoged");
    var userLogeded = {
        email: "",
        trueorNot: false
    }
    document.querySelector("form").addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(document.querySelector("form"));
    const options = {
        method: 'POST',
        body: formData
    };
    const resp = await request(url, options);
    console.log(resp.code);
    if (formData.get("email") === "" || formData.get("password") === "") {
        pError.innerHTML = "Por favor, preencha o email e a senha";
    } else if (resp.code === 200) {
        userLogeded.email = resp.email;
        userLogeded.trueorNot = true;
        localStorage.setItem("userLogeded", JSON.stringify(userLogeded));
        pError.innerHTML = "Usuario cadastrado";
        window.location.href = "<?= url("/app/matriculas"); ?>";
    } else {
        pError.innerHTML = "Senha ou email incorretos";
    }
});


</script>

</body>
</html>