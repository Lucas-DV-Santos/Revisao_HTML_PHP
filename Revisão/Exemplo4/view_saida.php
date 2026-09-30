<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
</head>
<body>
    <header>
        <h1>Boletim de notas</h1>
    </header>
    <main>
        <p>Nome: <?= $nome?></p>
        <p>Nota 1: <?= number_format($nota1, 2)?></p>
        <p>Nota 2: <?= number_format($nota2, 2)?></p>
        <p>Média: <?= number_format($media, 2)?></p>
        <p>Situação: <?=$situacao?></p>
    </main>
</body>
</html>