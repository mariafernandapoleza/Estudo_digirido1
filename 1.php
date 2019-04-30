
<?php
print "digite primeiro numero:";
$numero1 =(int)fgets (STDIN);

print "digite segundo numero:";
$numero2 =(int)fgets (STDIN);

if($numero1>$numero2) {
    print "Maior numero é $numero1";
}
else{
    print "Maior numero é $numero2";
}
