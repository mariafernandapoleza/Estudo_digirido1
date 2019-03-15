<?php

print("Tempo de viagem \n");

print("informe a distancia que sera percorrida km:\n");
$km = fgets (STDIN);

print("Informe a velocidade media que sera percorrido:\n");
$Velocidade = fgets (STDIN);

$tempo = $km/ $Velocidade;

if($tempo < 0.99)
    print("seu percurso sera feito em Minutos/segundos \n");
    print("Tempo $tempo");

elseif($tempo > 0.99)
    print("seu percurso sera feito em:\n");
    print("Hora/Minutos $tempo");    
