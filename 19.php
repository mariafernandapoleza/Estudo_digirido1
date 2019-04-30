<?php
$n1 = 0;
$n2 = 1;

print " $n1 ";
print " $n2 ";

for($fibo=0; $fibo<=500; $fibo++){
$fibo = $n1 + $n2;
$n1 = $n2;
$n2 = $fibo;

print"$fibo";
}