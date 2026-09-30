<?php
    $nome = 'Mateus';

    $arrayinformacoes = 
    [
        [
            'nome' => 'Mateus',
            'cpf' => '000.000.000-00',
            'idade' => 16
        ],
        [
            'nome' => 'Lucas',
            'cpf' => '111.111.111-11',
            'idade' => 17
        ],
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 PHP + HTML</title>
</head>
<body>
    <h1>Exemplo de cadastro</h1>
    <p><?= $nome?></p>
    <hr>
    <h1>Informações do array</h1>
    <?php
        foreach($arrayinformacoes as $informacoes){
    ?>
        <p>Exebindo informações</p>
        <p>Nome: <?= $informacoes['nome']?></p>
        <p>Idade: <?= $informacoes['idade']?></p>
        <p>CPF: <?= $informacoes['cpf']?></p>
        <hr>
        <?php } ?>
</body>
</html>