    <?php

    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $ope = $_POST['ope'];
    $res = 0;

    if ($ope == 'Somar'){
        $res = $num1 + $num2;
    }elseif($ope == 'Subtrair'){
        $res = $num1 - $num2;
    }elseif($ope == 'Dividir'){
        $res = $num1 / $num2;
    }elseif($ope == 'Multiplicar'){
        $res = $num1 * $num2;
    }

    require_once 'view_saida.php';

    ?>