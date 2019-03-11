<?php
    print "\n\nDigite a temperatura em °C que você deseja converter para Fahrenheit.\n\n";
    $tempC = (int) fgets(STDIN);
    
    $temp_convertida = 9*$tempC/5 + 32;

    echo"\n\n$tempC °C em Fahrenheit é : $temp_convertida °F";
