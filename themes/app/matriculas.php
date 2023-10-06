<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Academia</title>
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

        .form-container {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .form-container button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Ficha de Academia</h1>
    <div class="form-container">
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="${user.user.name}" required>

            <label for="altura">Altura (cm):</label>
            <input type="number" id="altura" name="altura" required>

            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" required>

            <label for="objetivo">Objetivo:</label>
            <select id="objetivo" name="objetivo">
                <option value="perda_peso">Perda de Peso</option>
                <option value="ganho_massa">Ganho de Massa Muscular</option>
                <option value="condicionamento">Condicionamento Físico</option>
                <option value="outro">Outro</option>
            </select>

            <label for="frequencia_semanal">Frequência Semanal:</label>
            <input type="number" id="frequencia_semanal" name="frequencia_semanal" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>


