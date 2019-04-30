<?php
$numeropar=0;
$numeroimpar=0;
$vezes=1;
do {print "Digite um número: ";
    $numero = (float) fgets (STDIN);
    
    if ($numero%2==0)
    {$numeropar++;}
    if ($numero%2!=0)
    {$numeroimpar++;} 
    
 $vezes++;}  
    
while ($vezes<=10);
    
print "A quantidade de numeros impares são: $numeroimpar \n A quantidade de números pares são: $numeropar \n";