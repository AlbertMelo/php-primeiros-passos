<?php
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

sacar($contasCorrentes['123.456.789-10'], 500.00);

depositar($contasCorrentes['123.256.789-12'], 1500.00);

foreach ($contasCorrentes as $cpf => $conta) {
    list ('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}



