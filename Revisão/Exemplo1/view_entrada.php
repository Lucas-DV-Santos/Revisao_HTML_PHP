<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo </title>
</head>
<body>
    <header>
        <h1 style="text-align: center">Formulário de cadastro</h1>
        <hr>
    </header>
    <main>
        <form action="logicaController.php" method="post">
            <label for="nome">Nome: </label>
            <br>
            <input type="text" id="nome" name="nome"
             placeholder="Digite seu nome...">
            <br>
            <br>
            <label for="idade">Idade: </label>
            <br>
            <input type="number" id="idade" name="idade"
             placeholder="Digite sua idade...">
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>