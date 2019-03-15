<?php
print("Porcentagem de aumento de Salario\n");

print("Informe qual o valor de seu salario :\n");
$Salario = fgets (STDIN);

print("Informe quantos porcento  sera o aumento do salario:\n");
$Porcentagem_aumento = fgets (STDIN);

$pctg= $Porcentagem_aumento;
$Valor_porc = $Salario /100 *$Porcentagem_aumento;

$Total_Salario = $Salario + $Valor_porc;

print("com a porcentagem de  % = $pctg ");
print("vai aumentar  : $Valor_porc \n");
print("Total do Salario com a porcentagem de % = $pctg ");
print("ficara = $Total_Salario \n");
