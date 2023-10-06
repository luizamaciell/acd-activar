<?php
$this->layout("_theme", ["categories" => $categories]);
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .ContsRegister {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .tabs {
        text-align: right;
        margin-bottom: 20px;
    }

    .tabs button {
        padding: 10px 20px;
        font-size: 16px;
        background-color:  #adabff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .conts {
        padding: 20px;
        background-color: #f9f9f9;
    }

    .profile-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .rounded-image {
        border-radius: 50%;
        margin-right: 10px;
    }

    .user-details p {
        margin: 5px 0;
    }

    #editForm {
        display: none;
        margin-top: 20px;
    }

    .edit-form label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    .edit-form input {
        width: 100%;
        padding: 5px;
        margin-top: 5px;
    }

    .edit-form button {
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .edit-form button#cancelButton {
        margin-left: 10px;
        background-color: #ccc;
    }
</style>

<div id="um" class="ContsRegister">
    <div class="conts">
        <div id="divDeVisu">
            <div class="profile-info">
                <div>
                    <img src="<?= url("/assets/web/images/profile.jpg")?>" id="profileImage" height="100px" class="rounded-image">
                    <div class="user-details">
                        <h5><span id="name"></span></h5>
                        <p></p>
                        <a>Email: <span id="email"></span></a>
                        <p></p>
                        <a>Idade: <span id="idade"></span></a>
                        <p></p>
                        <a>Localização: <span id="localizacao"></span></a>
                        <p></p>
                    </div>
                </div>
                
            </div>
            <div>
                    <button id="editButton">Editar</button>
                </div>
            <div id="editForm" class="edit-form">
                <h3>Editar informações</h3>
                <form id="userInfoForm" enctype="multipart/form-data">
                    <label for="nameInput">Nome:</label>
                    <input type="text" id="nameInput" required>
                    <label for="emailInput">Email:</label>
                    <input type="email" id="emailInput" required>
                    <label for="ageInput">Idade:</label>
                    <input type="number" id="ageInput" required>
                    <label for="locationInput">Localização:</label>
                    <input type="text" id="locationInput" required>
                    <label for="profileImageInput">Foto de Perfil:</label>
                    <input type="file" id="profileImageInput" accept="image/*">
                    <button type="submit">Salvar</button>
                    <button id="cancelButton" type="button">Cancelar</button>
                </form>
            </div> 
            <div><button id="logoutButton">Sair</button></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var userLogado = JSON.parse(localStorage.getItem("userLogeded"));
        var emailElement = document.querySelector("#email");
        var nameElement = document.querySelector("#name");
        var idadeElement = document.querySelector("#idade");
        var localizacaoElement = document.querySelector("#localizacao");
        var profileImageElement = document.querySelector("#profileImage");
        var editButton = document.querySelector("#editButton");
        var editForm = document.querySelector("#editForm");
        var cancelButton = document.querySelector("#cancelButton");
        var userInfoForm = document.querySelector("#userInfoForm");
        var logoutButton = document.querySelector("#logoutButton");

        function exibirDadosUsuario() {
            nameElement.textContent = userLogado.name;
            emailElement.textContent = userLogado.email;
            idadeElement.textContent = userLogado.idade;
            localizacaoElement.textContent = userLogado.localizacao;
            var storedProfileImage = localStorage.getItem("profileImage");
            if (storedProfileImage) {
                profileImageElement.src = storedProfileImage;
            }
        }

        function exibirFormularioEdicao() {
            if (userLogado && userLogado.trueorNot) {
                editForm.style.display = "block";
                editButton.style.display = "none";

                document.querySelector("#nameInput").value = userLogado.name;
                document.querySelector("#emailInput").value = userLogado.email;
                document.querySelector("#ageInput").value = userLogado.idade;
                document.querySelector("#locationInput").value = userLogado.localizacao;
            }
        }

        function salvarEdicao(event) {
            event.preventDefault();

            if (userLogado && userLogado.trueorNot) {
                var name = document.querySelector("#nameInput").value;
                var email = document.querySelector("#emailInput").value;
                var idade = document.querySelector("#ageInput").value;
                var localizacao = document.querySelector("#locationInput").value;
                var profileImage = document.querySelector("#profileImageInput").files[0];

                userLogado.name = name;
                userLogado.email = email;
                userLogado.idade = idade;
                userLogado.localizacao = localizacao;

                if (profileImage) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        localStorage.setItem("profileImage", e.target.result);
                        profileImageElement.src = e.target.result;
                    }
                    reader.readAsDataURL(profileImage);
                }

                localStorage.setItem("userLogeded", JSON.stringify(userLogado));

                exibirDadosUsuario();
                cancelarEdicao();
            }
        }

        function cancelarEdicao() {
            editForm.style.display = "none";
            editButton.style.display = "block";
        }

        function realizarLogout() {
            var userLogeded = {
                email: "",
                trueorNot: false,
                nome: "",
                idade: "",
                localizacao: ""
            };
            localStorage.setItem("userLogeded", JSON.stringify(userLogeded));
            localStorage.removeItem("profileImage");
            emailElement.textContent = "";
            idadeElement.textContent = "";
            localizacaoElement.textContent = "";
            profileImageElement.src = "<?= url("/assets/web/images/profile.jpg")?>";
            editButton.style.display = "none";
            logoutButton.style.display = "none";
        }

        if (!userLogado || !userLogado.trueorNot) {
            editButton.style.display = "none";
            logoutButton.style.display = "none";
        }

        exibirDadosUsuario();

        editButton.addEventListener("click", exibirFormularioEdicao);
        cancelButton.addEventListener("click", cancelarEdicao);
        userInfoForm.addEventListener("submit", salvarEdicao);
        logoutButton.addEventListener("click", realizarLogout);
    });
</script>