<?php
print "Digite o valor de A: ";
$A = (int) fgets (STDIN);

    while ($A == '0'){
    print "\n Essa equação não é de segundo grau \n";
    print "\n Tente Novamente!\n\n";
     print "Digite o valor de A: ";
    $A = (int) fgets (STDIN);
    }

    print "Digite o valor de B: ";
     $B = (int) fgets (STDIN);

    print "Digite o valor de C: ";
    $C = (int) fgets (STDIN);


    $delta = $expo($B,2)-4*$A*$C;

     if ($delta < '0'){
     print "\n\n A equação não possui raizes reais \n";
     print "Delta = $delta \n";
     print "\n Fim! \n\n";
     }

    if ($delta == '0'){

    $x1 = (int)(-$B+float($delta))/2*$A;
    print "\n\n Delta = $delta \n";
    print "X = $x1 \n";
    print "\n Fim!\n\n";
    }

    if ($delta > 0){

    $x1 = (int)(-$b+float($delta))/2*$A;
    $x2 = (int)(-$b-float($delta))/2*$A;
    print "Delta = $delta \n";
    print "X1 = $x1 \n";
    print "X2 = $x2 \n";
    print "\n Fim! \n\n";
    }