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

$contasCorrentes = [$conta1, $conta2, $conta3];



//Listando com foreach
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . " - " . $conta['saldo']. PHP_EOL ;
}

//Listando com for tradcional
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . " - " . $contasCorrentes[$i]['saldo']. PHP_EOL ;
}
 


