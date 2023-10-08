<?php
/*
    Utilizar operadores aritméticos e fazer contas simples.
    Operadores: + - / * % 
*/
    /* SOMA  */
    $somaA = 10;
    $somaB = 20;
    $somaC = $somaA + $somaB; 
    echo  'SOMA:'. $somaC . PHP_EOL;

    //Outro exemplo
    $itemY = 10;
    $itemX = 20;
    $itemZ = ($itemY + $itemX) + 10;
    echo 'SOMA2: '. $itemZ . PHP_EOL;

    // SUBTRAÇÃO
    $subJ = 25;
    $subK = 5;
    $subC = $subJ - $subK;
    echo 'SUBTRAÇÃO: ' . $subC . PHP_EOL;

    //DIVISÃO
    $divA = 50;
    $divB = 4;
    $divC = $divA / $divB;
    echo 'DIVISÃO: ' . $divC . PHP_EOL;
    
    //MULTIPLICAÇÃO
    $multA = 40;
    $multB = 3;
    $multC = $multA * $multB;
    echo 'MULTIPLICAÇÃO: '. $multC . PHP_EOL;

    //RESTO
    $restA = 84;
    $restB = 10;
    $restC = ($restA % $restB);
    echo 'RESTO: '. $restC . PHP_EOL;


?>