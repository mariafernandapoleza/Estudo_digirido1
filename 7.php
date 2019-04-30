<?php

print "digite primeiro numero:";
$numero =fgets (STDIN);

print "digite segundo numero:";
$numero2 =fgets (STDIN);

print "digite segundo numero:";
$numero3 =fgets (STDIN);

if(($numero>$numero2) and ($numero3<$numero)) {
    print "Maior numero é $numero";
}

if(($numero2>$numero) and ($numero3<$numero2)) {
    print "Maior numero é $numero2";
}

else{
    print "Maior numero é $numero3";
}

if (($numero<$numero2) and ($numero<$numero3)){
    print "O menor número é: $numero \n\n";
}
elseif (($numero2 < $numero) and ($numero2<$numero3)){
    print "O menor número é: $numero2 \n\n";
}
else{
    print "O menor número é: $numero3 \n\n";
}