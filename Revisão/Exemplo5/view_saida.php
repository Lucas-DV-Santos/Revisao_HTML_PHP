<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
</head>
<body>
    <header>
        <h1>Saída de dados</h1>
    </header>
    <main>
        <p>Cliente: <?= $nomeC?></p>
        <p>Produto: <?= $nomeP?></p>
        <p>Preço: <?= number_format($preco, 2)?></p>
        <p>Quantidade: <?= $quant?></p>
        <p>Subtotal: <?= number_format($subtotal, 2)?></p>
        <p>Desconto: <?=number_format($Vdesc, 2)?></p>
        <p>Preço Final: <?= number_format($total, 2)?></p>
    </main>
</body>
</html>