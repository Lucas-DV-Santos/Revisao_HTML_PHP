    <?php

    $nome = $_POST['nome'];
    $salarioA = (float)$_POST['salarioA'];
    $cargo = $_POST['cargo'];
    $aumento = 0;
    $salarioF = 0;

    if ($cargo == 'Estagiário'){
        $aumento = $salarioA * 0.10;
    }elseif($cargo == 'Assistente'){
        $aumento = $salarioA * 0.08;
    }elseif($cargo == 'Analista'){
        $aumento = $salarioA * 0.05;
    }

    $salarioF = $salarioA + $aumento;

    require_once 'view_saida.php';

    ?>