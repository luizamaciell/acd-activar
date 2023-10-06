<!DOCTYPE html>
<html>
<head>
  <style>
.matricula {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

h2 {
  font-size: 1.2em;
}

form {
  margin-top: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 8px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
  </style>
</head>
<body>
  <div class="matricula">
    <h2>Matrículados na Academia</h2>
    <form>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <input type="submit" value="Buscar aluno">
    </form>
  </div>
</body>
</html>
