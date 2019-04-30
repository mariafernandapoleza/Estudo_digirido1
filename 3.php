<?php
print "Digite a letra inicial do seu sexo:";
$letra= string (fgets(STDIN));

    if($letra == 'm' or $letra == 'M' ){
    print"Sexo Masculino";
    }

    elseif($letra == 'f' or $letra == 'F'){
    print "Sexo Feminino";
    
    }
    else{
    print "Sexo inválido";
}