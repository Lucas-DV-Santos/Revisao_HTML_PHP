<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <header><h1>Entrada de dados</h1></header>
    <main>
         <form action="logicaController.php" method="POST">
            <label for="nomeC">Nome do cliente: </label>
            <input type="text" id="nomeC" name="nomeC" placeholder="Digite o nome do cliente..." required>
            <br><br>

            <label for="nomeP">Nome do produto: </label>
            <input type="text" id="nomeP" name="nomeP" placeholder="Digite o nome do produto..." required>
            <br><br>

            <label for="preco">Preço: </label>
            <input type="number" step="0.01" id="preco" name="preco" placeholder="Digite o preço..." required>
            <br><br>

            <label for="quant">Quantidade: </label>
            <input type="number" id="quant" name="quant" placeholder="Digite a quantidade..." required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>