<?php  
    print " \n\nQual é o preço da mercadoria?\n\n";
    $pmercadoria = (FLOAT) fgets(STDIN);

    print " \n\nDigite a porcentagem do desconto\n\n";
    $pdesconto = (FLOAT) fgets(STDIN);

    $novopreço = ($pmercadoria - ($pmercadoria * $pdesconto)/100);
    $pdesconto = ($pmercadoria - $novopreço);

    echo "\n\nVocê pagara : R$ $novopreço";
    echo "\n\nVocê tera o desconto de : R$ $pdesconto";


