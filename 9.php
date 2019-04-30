<?php
print "digite o primeiro número:";
$numero1 =(float) fgets (STDIN);

print "digite o segundo número:";
$numero2 =(float) fgets (STDIN);

print "digite o terceiro número:";
$numero3 =(float) fgets (STDIN);


if (($numero1 > $numero2) and ($numero1>$numero3)){
    print "$numero1 \n";
 }

 elseif (($numero1<$numero2) and ($numero2>$numero3)){
    print "$numero2 \n";
}

else{
    print "$numero3 \n";
}


if ((($numero1<$numero2) and ($numero1>$numero3)) or (($numero1>$numero2) and ($numero1<$numero3))){ 
    print "$numero1 \n";
}

elseif ((($numero2 > $numero1) and ($numero2<$numero3))or(($numero2 < $numero1) and ($numero2>$numero3))){
    print "$numero2 \n";
 }


else{
    print "$numero3 \n";
}

if (($numero1<$numero2) and ($numero1<$numero3)){
    print "$numero1 \n";
}

elseif (($numero2 < $numero1) and ($numero2<$numero3)){
    print "$numero2 \n";
}

else{
    print "$numero3 \n";
}