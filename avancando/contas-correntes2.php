<?php
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 500
];

$conta3 = [
    'titular' => 'Claudio',
    'saldo' => 1500
];

$contasCorrentes = [
    12345679810 => $conta1,
    12346579811 => $conta2,
    12345678912 => $conta3
];

// Listando com foreach
foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . " - " . $conta['saldo'] . PHP_EOL;
}



