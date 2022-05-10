<?php

$numero = [1,2,3,4,5,6,7,8,9,10,11,12,13] ;
$cartes = ["♥","♠","♣","♦"]; 
$paquet = []; $sousPaquet1 = []; $sousPaquet2 = [];
$paquetBrasse = [];

for ($i=0; $i <count($cartes) ; $i++) { 
    for ($j=0; $j <count($nombres) ; $j++) { 
        $paquet[] =$nombres[$j].$cartes[$i];
    }
}

for ($i=0; $i <26 ; $i++) { 
    $sousPaquet1[$i] = $paquet[$i];
    $sousPaquet2[$i] = $paquet[$i+26];
}
for ($i=0; $i <26 ; $i++) { 
    $paquetBrasse[] = $sousPaquet1[$i];
    $paquetBrasse[] = $sousPaquet2[$i];
}

for ($i=0; $i <52 ; $i++) { 
    echo $paquetBrasse[$i]."";
    if ( ($i+1) % 13==0) {
        echo"</br>";
    }
}
?>