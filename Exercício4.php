<?php

print("Desconto mercadoria\n");

print("Informe o valor do produto :\n");
$Preco = fgets (STDIN);

print ("Informe quantos porcento % sera o desconto:\n");
$desconto = fgets (STDIN);

$valor_desconto = $Preco /100 *$desconto ;

$Preco = $Preco - $valor_desconto;

print("Seu desconto é de: $valor_desconto \n");
print("Valor total a pagar:$Preco \n");
