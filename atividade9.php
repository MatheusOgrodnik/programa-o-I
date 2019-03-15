<?php

print "\n\n Digite a área em m² que sera pintada? :";
$area_pintada = (float) fgets (STDIN);
 


$litros_de_tinta = $area_pintada / 6;
 
$litros_a_cer_pintados = $area_a_cer_pintada / 6;

$area_a_cer_pintada = $area_pintada + $area_pintada * 0.10;


print "\n\n Qais das opçoes você deseja ?\n\n";

print "\n\n 1 - 18 litros de tinta, em latas.\n\n";

print "\n\n 2 - 3,6 litros de tinta, em galões.\n\n";
    
print "\n\n 3 - Misturar latas e galões.\n\n";




#parte á decidir 1

$decisao_a_tomar = (int) fgets (STDIN);



#se--#
if ($decisao_a_tomar == 1) {
    
if ($litros_de_tinta  <= 18) {
    echo "\n\n Para pintar $area_pintada litros de uma lata de 18L que custará 80 reais \n\n";
}


#se não--#
else{
    $latas = ceil  ($litros_de_tinta/18);
    $preco = $latas * 80;
    echo "\n\n Para pintar $area_pintada m² é preciso $latas latas de 18L, o valor da compra é de : R$ $preco. \n\n";  
     }

}






#parte á decidir 2
 $preco = $galoes * 25;
    echo "\n\n Para pintar $area_pintada m² é preciso $galoes galoes de 3,6L. O valor da compra é de : R$ $preco. \n\n";


#se--#

if  ($decisao_a_tomar == 2) {

if  ($litros_de_tinta <= 3.6)  {
     echo "\n\n Para a área de $area m² séra necessário um galão de 3,6L que custará 25 reais \n \n";
}
    

#se não--#

else {
    $galoes = ceil ($litros_a_cer_pintados/3.6);
    $preco = $galoes * 25;
    echo "\n\n Para pintar $area_pintada m² é preciso $galoes galoes de 3,6L. O valor da compra é de : R$ $preco. \n\n";
 }


}






#parte á decidir 3

if  ($decisao_a_tomar == 3) {



$latas = ceil($litros_a_cer_pintados/18);

$preco_a_gastar = (($latas * 80 ) + ($galoes * 25 ));

$galoes = ceil($resto_latas/3.6);

$resto_latas = $latas%18;


echo "\n\n Misturando $latas latas de 18L e $galoes galões de 3,6L .O valor da compra é de   : R$ $preco_a_gastar ";
}