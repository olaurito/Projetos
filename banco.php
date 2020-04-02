<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Conta/Titular.php';

$primeiraConta = new Conta(new Titular( '123.456.789-10', 'Olaurito Neto'));


echo $primeiraConta->recuperaNumeroDeContas(). PHP_EOL;

