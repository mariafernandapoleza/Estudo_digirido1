<?php
print "digite o primeiro numero:";
$numero1 =(float) fgets (STDIN);

print "digite o segundo numero :";
$numero2 = (float) fgets (STDIN);

print "digite o terceiro numero :";
$numero3 = (float)fgets (STDIN);

print "digite o quarto numero :";
$numero4 =(float) fgets (STDIN);

print "digite o quinto numero :";
$numero5 =(float )fgets (STDIN);

if(($numero1>$numero2) and ($numero1>$numero3) and ($numero1>$numero4) and ($numero1>$numero5)){
    print "Maior numero é $numero1";
}

elseif(($numero2>$numero1) and ($numero2>$numero3) and ($numero2>$numero4) and ($numero2>$numero5)){
    print "Maior numero é $numero2";
}

elseif(($numero3>$numero2) and ($numero3>$numero1) and ($numero3>$numero4) and ($numero3>$numero5)){
    print "Maior numero é $numero3";
}
elseif(($numero4>$numero2) and ($numero4>$numero3) and ($numero4>$numero1) and ($numero4>$numero5)){
    print "Maior numero é $numero4";
}
else{
    print "Maior numero é $numero5";
}