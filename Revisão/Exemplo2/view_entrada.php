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
            <label for="num1">Número 1: </label>
            <input type="number" step="0.01" id="num1" name="num1" placeholder="Digite o primeiro..." required>
            <br><br>

            <label for="num2">Número 2: </label>
            <input type="number"  step="0.01" id="num2" name="num2" placeholder="Digite o segundo..." required>
            <br><br>

            <label for="ope">Operação: </label>
            <select name="ope" id="ope">
                <option value="" selected disabled>Selecionar...</option>
                <option value="Somar">Soma</option>
                <option value="Subtrair">Subtração</option>
                <option value="Dividir">Divisão</option>
                <option value="Multiplicar">Multiplicação</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>