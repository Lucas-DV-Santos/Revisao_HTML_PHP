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
            <label for="nome">Nome do funcionário: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome..." required>
            <br><br>

            <label for="salarioA">Salário atual: </label>
            <input type="number" step="0.01" id="salarioA" name="salarioA" placeholder="Digite o salario atual..." required>
            <br><br>

            <label for="cargo">Cargo: </label>
            <select name="cargo" id="cargo">
                <option value="" selected disabled>Selecionar...</option>
                <option value="Estagiário">Estagiário</option>
                <option value="Assistente">Assistente</option>
                <option value="Analista">Analista</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>