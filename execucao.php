<?php 

require_once('modelo/Comercial.php');
require_once('modelo/Industrial.php');
require_once('modelo/Residencial.php');

echo "Qual é o seu tipo de consumo? \n1-Residencial\n2-Comercial\n3-Industrial\n\n";
$op = (int)readline();

$consumo = null;

if ($op == 1) {
    $consumo = new Residencial();
    $consumo->setConsumo(readline("Qual é o seu consumo KWh? "));
} else if ($op == 2) {
    $consumo = new Comercial();
    $consumo->setConsumo(readline("Qual é o seu consumo KWh? "));
} else if ($op == 3) {
    $consumo = new Industrial();
    $consumo->setConsumo(readline("Qual é o seu consumo KWh? "));
}

echo "O total que você deverá pagar será de: R$" . $consumo->getValorFatura() . "\n";
