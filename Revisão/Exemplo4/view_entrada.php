<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <header>
        <h1>Entrada de dados</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>
            <br><br>

            <label for="nota1">Nota 1: </label>
            <input type="number" step="0.01" id="nota1" name="nota1" placeholder="Digite a primeira nota..." required>
            <br><br>

            <label for="nota2">Nota 2: </label>
            <input type="number" step="0.01" id="nota2" name="nota2" placeholder="Digite a segunda nota..." required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>