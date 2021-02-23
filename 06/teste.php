<?php
// echo não funciona com arrays


// array de numeros
$lista = [10, 20, 30];
var_dump($lista);
echo '<br>';

// array de strings
$estados = ['RS', 'SC', 'PR'];
var_dump($estados);
echo '<br>';

// array com posições nomeadas
$listaNomeada = [
    'nome'      => 'Tony', 
    'Sobrenome' => 'Stark'
];
var_dump($listaNomeada);
echo '<br>';

// array misto
$listaMista = [
    'nome'      => 'Peter Parker',
    'estreia'   => 1962,
    'voa'       => false
];
var_dump($listaMista);
echo '<br>';

// array vazio
$listaVazia = [];
var_dump($listaVazia);

echo '<hr>';
// acessando dados por indice
echo $estados[0];

echo '<br>';
// acessando dados por indice nomeado
echo $listaMista['nome'];

?>
