<?php
    print "\n\nQuantos Dias\n\n";
    $dias = (int) fgets(STDIN);

    print "\n\nQuantas Horas\n\n";
    $horas = (int) fgets(STDIN);

    print "\n\nQuantos Minutos\n\n";
    $minutos = (int) fgets(STDIN);

    print "\n\nQuantos Segundos\n\n";
    $segundos = (int) fgets(STDIN);

    /* Dias para segundos */

    $dias_seg = $dias*24*60*60;

    /* Horas para segundos */
    
    $hrs_seg = $horas*60*60;

    /* Minutos para segundos */

    $min_seg = $minutos*60;

    $seg = $dias_seg + $hrs_seg + $min_seg + $segundos;
    print"\n\nO tempo (em segundos) gasto foi de $seg segundos .";
