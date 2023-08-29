<?php
    $vmax = (int)readline("Digite a velocidade máxima da avenida: ");
    $vdriver = (int)readline("Digite a velocidade do motorista: ");

    $ultrapassou =  $vdriver - $vmax ;

    if ($ultrapassou <= 0) {
        echo "O motorista não ultrapassou o limite de velocidade da avenida";
    } elseif ($ultrapassou <= 10) {
        echo "O motorista ultrapassou o limite máximo de velocidade da avenida em $ultrapassou'KM/H' e deve pagar 50 R$";
    } elseif ($ultrapassou <= 30) {
        echo "O motorista ultrapassou o limite máximo de velocidade da avenida em $ultrapassou'KM/H' e deve pagar 100 R$";
    } elseif ($ultrapassou > 30) {
        echo "O motorista ultrapassou o limite máximo de velocidade da avenida em $ultrapassou'KM/H' e deve pagar 200 R$";
    }

?>