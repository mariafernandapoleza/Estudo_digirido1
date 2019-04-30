<?php
print "digite o preço do primeiro produto:";
$produto1 =(float)fgets (STDIN);

print "digite o preço do segundo produto:";
$produto2 =(float)fgets (STDIN);

print "digite o preço do terceiro produto:";
$produto3 =(float)fgets (STDIN);

if($produto1<$produto2 and $produto3>$produto1) {
    print "Compre o primeiro produto por R$:$produto1";
}

if($produto2<$produto1 and $produto2<$produto3) {
    print "Compre o segundo produto por R$:$produto2";
}

else{
    print "Compre o terceiro produto por R$:$produto3";
}