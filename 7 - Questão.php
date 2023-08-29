<?php
    $valorUm = (int)readline("Digite o primeiro valor: ");
    $valorDois = (int)readline("Digite o segundo valor: ");

    echo "1- Soma de 2 números. \n2- Diferença entre 2 números (maior pelo menor).\n3- Produto entre 2 números. \n4- Divisão entre 2 números (o denominador não pode ser zero).\n";
    $opcao = (int)readline("Escolha uma opção: ");

    $result = 0;
    if ($opcao == 1) {
        $result = $valorUm + $valorDois;
        echo"A soma dos números $valorUm e $valorDois é: $result.";
    } elseif ($opcao == 2) {
        $valmin = min($valorUm,$valorDois);
        $valmax = max($valorUm,$valorDois);
        $result = $valmax - $valmin;
        echo"$valmin , $valmax , $result";
    } elseif ($opcao == 3) {
        $result = $valorUm * $valorDois;
        echo"O produto dos números $valorUm e $valorDois é: $result.";
    } elseif ($opcao == 4) {
        if($valorDois == 0){
            echo"O denominador não pode ser 0";
        }else{
            $result = $valorUm / $valorDois;
            echo"A divisão dos números $valorUm e $valorDois é: $result.";
        }
    } else{
        echo"Opção Inválida";
    }

?>