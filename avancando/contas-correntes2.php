<?php
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];


//Adicionando um novo item 

$contasCorrentes['132.456.789-13'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes['123.456.789-14'] = [
    'titular' => 'Claudia 2',
    'saldo' => 2000
];


// Listando com foreach
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . PHP_EOL;
}



