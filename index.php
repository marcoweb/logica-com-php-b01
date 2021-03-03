<?php
// echo "Olá Mundo!!!\n";
$saldo = 1000.00;
$saque = 1000.00;

if($saldo <= $saque) {
    $saldo - $saque;
    echo 'Sacado R$ ' . $saque . "\n";
} else {
    echo "Valor do saque maior que o saldo\n";
}