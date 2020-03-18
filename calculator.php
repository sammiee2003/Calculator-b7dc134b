<?php
echo("Welke operatie wil je uitvoeren? (+, -)");
$oparator = readline();

if ($oparator == "+") {
    
    echo("getal nummer 1?");
    $getal1 = readline();
    echo("en getal nummer 2?");
    $getal2 = readline();
    echo (int) ($getal1+$getal2);
}
elseif ($oparator = "-") {

    echo ("getal nummer 1?");
    $getal3 = readline();
    echo("en getal nummer 2?");
    $getal4 = readline();
    echo (int) ($getal3-$getal4);
}

