<h1>Login com API</h1>
<div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    #formLogin {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #formLogin div {
        margin-bottom: 10px;
    }

    #email,
    #password {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button[type="submit"] {
        background-color: orange;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        cursor: pointer;
        display: block;
        margin: 0 auto; /* Centraliza horizontalmente */
    }

    #listAddress {
        background-color: orange;
        color: #fff;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        cursor: pointer;
        display: block;
        margin: 20px auto; /* Centraliza horizontalmente e adiciona espaço vertical */
    }

    #listAddress:hover {
        background-color: wheat;
    }

    #address {
        margin-top: 20px;
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    p {
        margin: 0;
        padding: 5px 0;
        border-bottom: 1px solid #ccc;
    }
</style>

</style>
    <form id="formLogin">
        <div>E-mail: <input type="text" id="email" name="email" value=""></div>
        <div>Password: <input type="text" id="password" name="password" value=""></div>
        <button type="submit">Login</button>
    </form>
</div>
<div>
    <button id="listAddress">Lista De Endereços</button>
</div>
<div id="address">
    <!-- Aqui os endereços serão listados -->
</div>
<script type="module" async>
    const formLogin = document.querySelector("#formLogin");
    formLogin.addEventListener("submit", (event) => {
        event.preventDefault();
        const urlLogin = "<?= url("api/user/login"); ?>";
        const options = {
            method : "get",
            headers : {
                email : document.querySelector("#email").value,
                password : document.querySelector("#password").value
            }
        };
        fetch(urlLogin,options).then(response => {
            response.json().then(user => {
                console.log(user);
                console.log(JSON.stringify(user));
                localStorage.setItem("userLogin",JSON.stringify(user));
                window.location.href = "<?= url("/app/user")?>";
            });
        });
    });

    document.querySelector("#listAddress").addEventListener("click",() => {
        const userLogin = JSON.parse(localStorage.getItem("userLogin"));
        console.log(userLogin);
        
        const optionsAddress = {
            method: "get",
            headers: {
                token : userLogin.user.token
            }
        };
        const urlAddress = "./api/user/adresses";
        fetch(urlAddress,optionsAddress).then(response => {
            response.json().then(addresses => {
                const addressContainer = document.querySelector("#address");
                addressContainer.innerHTML = ""; // Limpa o conteúdo anterior
                addresses.forEach(address => {
                    // Cria um elemento de parágrafo para cada endereço
                    const addressElement = document.createElement("p");
                    addressElement.textContent = address.street + ", " + address.number + ", " + address.complement;
                    addressContainer.appendChild(addressElement);
                });
            })
        });
        
    });

</script>
