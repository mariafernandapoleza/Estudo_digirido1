<?php 
print "Digite um número entre 0-1000: ";
$numero = (float) fgets (STDIN);

if($numero>1000){
    print"Numero inválido, digite outro novamente:";
    $numero =(float) fgets(STDIN);
}

$quantidadedenum= $numero;

if ($quantidadedenum=3){

    $centenas=(int)($numero/100)%100;
    $dezenas= (int)($numero/10)%10;
    $unidades=(int)($numero%100)%10;

    print "No número $numero, existem: \n
    $centenas centenas
    $dezenas dezenas
    $unidades unidades ";
}
