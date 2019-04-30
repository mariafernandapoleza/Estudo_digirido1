<?php
print "Digite a primeira nota:\n\n";
$not1=(float) fgets (STDIN);

print "Digite segunda nota:";
$not2=(float)fgets (STDIN);

$media=($not1+$not2)/2;


if($media>=7){
    print"Aprovado";
    }

    elseif($media==10){
    print "Aprovado com Honra";
    
    }

    else{
    print "Reprovado";
    }
