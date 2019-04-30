<?php
print "digite uma base :";
$base =(float) fgets (STDIN);

print "digite um expoente :";
$expo= (float) fgets (STDIN);

$potencia = 1;

$numerobase = $base;

for ($i=1; $i<=$expo; $i++){ 
    $potencia=$potencia*$numerobase;
}
print "Resultado: = $potencia \n\n";
