<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array &$conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Voc� n�o pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
}

function depositar(array &$conta, float $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Dep�sitos precisam ser positivos");
    }
}

