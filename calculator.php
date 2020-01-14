<?php
echo("Welke operatie wil je uitvoeren? (+, -, %)".PHP_EOL);
$opp = readline();
if($opp != "+" && $opp != "-" && $opp != "%") {
    echo("'".$opp."' is geen geldige operatie");
    exit();
}
echo("Eerste getal?".PHP_EOL);
$num1 = readline();
if(!is_numeric($num1)) {
    echo("'".$num1."' is geen getal");
    exit();
}
echo("Tweede getal?".PHP_EOL);
$num2 = readline();
if(!is_numeric($num2)) {
    echo("'".$num2."' is geen getal");
    exit();
}

if($opp == "+"){
    echo("Uw resultaat: ".($num1+$num2));
}else if($opp == "-"){
    echo("Uw resultaat: ".($num1-$num2));
}else if($opp == "%"){
    echo("Uw resultaat: ".($num1%$num2));
}