<?php
    print "\n\n Qual a quantidade em Km percorrida.\n\n";
    $q_km = (int) fgets(STDIN);

    print "\n\n O carro está alugado por quantos dias.\n\n";
    $q_dias = (int) fgets(STDIN);

    $preço_Dias = $q_dias* 60 ;
    $preço_Km = $q_km* 0.15 ;
    $valor_total = $preço_Dias + $preço_Km ;

    
    echo"\n\nVocê irá pagar R$ $valor_total pelo aluguel do carro.";

