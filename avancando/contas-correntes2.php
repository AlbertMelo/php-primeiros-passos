<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// Listando com foreach
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . PHP_EOL;
}



