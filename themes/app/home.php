
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja Online</title>
    <link rel="stylesheet" href="style.css">
    <style>
   /* Reset de estilos padrão */
body, h1, h2, ul, li, p {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.featured-products, .newsletter {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    margin-top: 20px;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Estilos para o formulário de newsletter */
form {
    display: flex;
    margin-top: 10px;
}

input[type="email"] {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section class="featured-products">
        <h2>Produtos em Destaque</h2>
        <!-- Inclua aqui os produtos em destaque -->
    </section>
    <section class="newsletter">
        <h2>Assine nossa Newsletter</h2>
        <p>Receba as últimas ofertas e novidades diretamente na sua caixa de entrada.</p>
        <form>
            <input type="email" placeholder="Seu e-mail">
            <button type="submit">Assinar</button>
        </form>
    </section>
</html>
