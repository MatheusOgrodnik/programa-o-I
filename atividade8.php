<?php
    print "\n\n Quantos cigarros você fuma por dia : ";
    $cigarros = (int) fgets (STDIN);
    
    
    print "\n\n Por quantos anos você fuma : ";
    $anos_fumados = (float) fgets (STDIN);
    
    
    $total_de_dias_perdidos = ((($cigarros * 10) /60 ) / 24 ) * ($anos_fumados * 365);
     
    
    echo "\n \n  Você perdeu aproxímadamente $total_de_dias_perdidos dia(s) fumando cigarros.";