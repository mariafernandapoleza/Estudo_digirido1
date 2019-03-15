<?php   
print("Aluguel carro \n\n");

print("informe quantos Km foi percorrido pelo carro alugado:\n\n");
$KM = (float) fgets (STDIN);

print("Informe por quantos dias o carro foi alugado:\n\n");
$Dias = fgets (STDIN);

$Valorkm = $KM * 0.15;
$Valordia = $Dias * 60;
print("$Valorkm\n");
print("$Valordia\n");

$Totaldiaria = $Valor_dia + $Valor_km;

print("A diaria custou: $Valor_dia\n");
print("Km custou: $Valor_km\n");
print("Total: $Total_diaria\n");