<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    text-align: center;
}

h1 {
    color: #333;
    margin-top: 20px;
}

#userInfo {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
}

/* Estilos para a foto de perfil */
.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 15px;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Estilos para o botão de upload de foto */
.upload-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

.upload-button:hover {
    background-color: #0056b3;
}

/* Estilos para as informações do usuário */
#userInfo h2 {
    font-size: 24px;
    margin: 0;
}

#userInfo p {
    font-size: 16px;
    margin: 5px 0;
}
  </style>
</head>
<body>
    <h1>Bem-vindo ao Dashboard</h1>
    <div id="userInfo">
        <div class="profile-image">
            <img src="default-avatar.jpg" alt="Imagem de Perfil">
            <input type="file" id="avatarInput" accept="image/*">
            <button class="upload-button" id="uploadButton">Upload de Foto</button>
        </div>
        <!-- As informações do usuário serão exibidas aqui -->
    </div>
   
    <script src="/assets/_shared/functions.js"></script>
    <script>
        // Seu código JavaScript existente para exibir informações do usuário
    </script>
</body>
</html>
