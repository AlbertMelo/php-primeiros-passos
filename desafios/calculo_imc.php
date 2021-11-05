<?php
$peso = 104.0;
$altura = 1.68;

$imc = $peso / ($altura ** 2);
echo "Seu IMC é $imc" . " . Você está ";

if ($imc < 18.5) {
    echo "abaixo ";
} elseif ($imc < 25) {
    echo "dentro ";
} else {
    echo "acima ";
}
echo "do peso.";