<?php
print "digite uma letra :";
$letra=string(fgets(STDIN));

if($letra =='a' or $letra =='e' or $letra =='i' or $letra =='o' or $letra =='u'){
    print"A letra é uma vogal\n";
}
else
{
    print "A letra é uma consoante\n\n";
}