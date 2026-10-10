<?php

// Tipos primitivos
$nome = "Tiago";
$idade = 24;
$peso = 65.50;
$estaEmpregado = false;
$null = null;

$numeros = [1, 2, 3];
$numeros = array(1, 2, 3);

$nomes = ['Tiago', 'João'];
$misturado = ['Tiago', 25, true, 65.80];

$pessoa = [
    'nome' => 'Tiago',
    'idade' => 24,
    'peso' => 65.80,
];

$pessoa = new stdClass();
$pessoa->nome = 'Tiago';
$pessoa->idade = 24;
$pessoa->peso = 65.80;
