<?php
print "digite o primeiro numero :";
$numero1 =(float) fgets (STDIN);

print "digite o segundo numero :";
$numero2 = (float)fgets (STDIN);

print "digite o terceiro numero :";
$numero3 = (float)fgets (STDIN);

print "digite o quarto numero :";
$numero4 =(float) fgets (STDIN);

print "digite o quinto numero :";
$numero5 =(float )fgets (STDIN);

$soma= $numero1+$numero2+$numero3+$numero4+$numero5;
$media= $soma/5;

print "A soma de todos os números é igual a: $soma e a media igual a : $media \n\n";