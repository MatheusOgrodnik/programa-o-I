<?php
    print"\n\nQual a distância a percorrer?\n\n";
    $distancia_percorrida = (float) fgets (STDIN);

    print"\n\nQual a velocidade média esperada para a viagem?\n\n";
    $vel_media = (float) fgets (STDIN);

    $tempo = $distancia_percorrida / $vel_media;

    print"\n\nO tempo da viagem aproxímadamente sera de : $tempo Horas ";

