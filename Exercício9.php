<?php


print("Informe a area (metros quadrados) a ser pintada \n");
$mdois = fgets(STDIN);


// 1L *6metros xl 
// 18L  =80  *108M
// 3,6L =25  *21,6M

// $porc_metro = $mdois/100;                   //45 Diferenca
                                //5x 21,6 =108 =125 R$
                                //1x 80   =108 =80  R$
$galao_grande = $mdois/108;   //86,4 e melhor com 2 latas grandes  ou com pequenas 100
$preco_grande = 80*$galao_grande;

print("$galao_grande \n");
print("$preco_grande \n");

$galao_pequeno = $mdois/21.6;
$preco_pequeno = 25*$galao_pequeno;

print("$galao_pequeno \n");
print("$preco_pequeno \n");

$litros_mdois = $mdois /6;//quantos litros vou ter 
// $sobra = $mdois % $litros_mdois; //SOBRA
// $pedaco =$litro_mdois /$mdois -$sobra;//QUANTOS M PARA LITR


print("$sobra \n");
print("$litro_mdois \n");
print("$pedaco");
// quantas tintas devem ser compradas 
// qual o preço
// ceil aredonda para cima 
// apenas 18L 
// apenas 3,6L


