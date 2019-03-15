<?php
print("Quantos cigarros voce fuma por dia: \n\n");
$cigarrosdia = (float) fgets (STDIN);

print("Quantos tempo voce demora para fumar 1 cigarro: \n");
$tempocigarro = (float) fgets (STDIN);

print(" ha quantos anos voce fuma: \n");
$anos_fumados = (float) fgets (STDIN);

$cigarrosdia = $cigarrosdia * $tempocigarro ;
$tempoano = ($cigarrosdia * 365 *$anosfumados) ; 
$horasperdidos = $tempoano/60;
$diasperdidos = $horasperdidos/24;

print("Voce perde por dia: $cigarrosdia min \n\n");
print("Voce perdeu cerca de: $diasperdidos dias por ano \n\n");
