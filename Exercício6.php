<?php

print("Celcius para fahrenheit   \n");

print("informe a Temperatura em Celsius (°C):\n\n");
$Celsius= fgets (STDIN);
$Fahrenheit = ($Celcius * 9/5) + 32 ;

print("A temperatura em Fahrenheit (°F) fica: $Fahrenheit °F\n");

