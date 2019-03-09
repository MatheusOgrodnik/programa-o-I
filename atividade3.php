<?php
    print " \n\nQual seu salário ?\n\n";
    $salario = (float) fgets(STDIN);

    print " \n\nQual a porcentagem do aumento ?\n\n";
    $aumento = (float) fgets(STDIN);

    $novosalario = ($salario*$aumento/100) + $salario;
    $qntaumento = $salario*$aumento/100;


    echo "\n\nSeu salário foi reajustado para : R$ $novosalario";

    echo "\n\nVocê recebeu um aumento de  : R$ $qntaumento";

    
