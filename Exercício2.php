<?php

print ("Digite uma quantidade de dias: \n\n");
$dias = (float) fgets (STDIN);
print ("Digite uma quantidade de horas: \n\n");
$horas = (float) fgets (STDIN);
print("Digite uma quantidade de minutos: \n\n");
$minutos = (float) fgets (STDIN);
print("Digite uma quantidade de segundos:\n\n");
$segundos = (float) fgets (STDIN);

$dias&$segundos = $dias*24*60*60;
$horas&$segundos = $horas*60*60;
$minutos&$segundos = $minutos*60;
$totalsegundos + $dias&$segundos + $horas&$segundos + $minutos&$segundo;

print "O total de segundos foi de: $totalsegundos \n\n";




