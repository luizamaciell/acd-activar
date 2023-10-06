<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.profile {
    max-width: 400px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    padding: 20px;
    text-align: center;
}

.profile-image img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin: 0 auto 15px;
    display: block;
}

.profile h1 {
    font-size: 24px;
    margin: 0;
}

.profile p {
    font-size: 16px;
    margin: 5px 0;
}

.edit-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

.edit-button:hover {
    background-color: #0056b3;
}

    </style>
    <title>Perfil</title>
</head>
<body>
    <div class="profile">
        <div class="profile-image">
            <img src="avatar.jpg" alt="Imagem de Perfil">
        </div>
        <div class="profile-info">
            <h1>Nome do Usuário</h1>
            <p>Email: usuario@example.com</p>
            <p>Localização: Cidade, Estado</p>
        </div>
        <button class="edit-button">Editar Perfil</button>
    </div>
</body>
</html>
