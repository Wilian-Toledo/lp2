<?php

include 'carro.php';

//instanciação: criação de objetos de uma classe
$c1 = new Carro('BMW', 'X6');
$c2 = new Carro('Lamborghini', 'Aventador');
$c3 = new Carro('Bugatti', 'Veyron');
$c4 = new Carro('Ferrari', 'F5');

// método de atribuição
$c1->setPreco(850000);
$c4->setPreco(1234000);


//execução do método de impressão
$c1->imprime();
$c2->imprime();
$c3->imprime();
$c4->imprime();
