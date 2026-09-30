<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <header><h1>Conversor de Celsius em fahrenheit</h1></header>
    <main>
         <form action="logicaController.php" method="POST">
            <label for="temp">Temperatura em celsius: </label>
            <input type="number" step="0.01" id="temp" name="temp" placeholder="Digite o valor da temperatura..." required>
            <br><br>

        <button type="submit">Enviar</button>
    </main>
</body>
</html>