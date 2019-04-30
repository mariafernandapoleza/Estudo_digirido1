<?php 
print "digite primeiro numero:";
$numero =fgets (STDIN);


print "digite segundo numero:";
$numero2 =fgets (STDIN);

print "digite segundo numero:";
$numero3 =fgets (STDIN);

if($numero>$numero2 and $numero3<$numero) {
    print "Maior numero é $numero";
}

if($numero2>$numero and $numero3<$numero2) {
    print "Maior numero é $numero2";
}

else{
    print "Maior numero é $numero3";
}
