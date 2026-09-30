    <?php

    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];
    $nome = $_POST['nome'];
    $media = (float)($nota1 + $nota2) / 2;

    if ($media >= 7){
        $situacao = 'Aprovado';
    }elseif($media >= 5){
        $situacao = 'Recuperação';
    }elseif($media < 5){
        $situacao = 'Recuperação';
    }

    require_once 'view_saida.php';

    ?>