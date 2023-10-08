<?php
    /* Operadores servem tanto para junção quanto para
       checagem de array.

       Operadores: + == === != !==
    */

    //exemplo OPERADOR DE UNIÃO
    $user = [
        'name' => 'Mark_neo',
        'age' => 22
    ];

    $workplace = [
        'companyName' => 'Ecorp',
        'role' => 'Back-end Developer'
    ];

    $all = $user + $workplace; // opeardor (+) uniu as 2 arrays
    print_r($all);


    //OPERADOR DE IGUALDADE
    $userOne = [
        'name' => 'Mark_neo',
        'age' => 22
    ];

    $userTwo = [
        'name' => 'Alderson',
        'age' => '22'
    ];
    var_dump($userOne == $userTwo);



    //OPERADOR DE IDÊNTICO
    $userOne = [
        'name' => 'Mark_neo',
        'age' => 22
    ];

    $userTwo = [
        'name' => 'Mark_neo',
        'age' => 22
    ];
    var_dump($userOne === $userTwo);



    //OPERADOR DE DIFERENÇA

    $userOne = [
        'name' => 'Mark_neo',
        'age' => 22
    ];

    $userTwo = [
        'name' => 'Alderson',
        'age' => '22'
    ];
    var_dump($userOne != $userTwo);



    //OPERADOR NÃO IDÊNTICO

    $userOne = [
        'name' => 'Mark_neo',
        'age' => 22
    ];
    
    $userTwo = [
        'name' => 'Mark_neo',
        'age' => '22'
    ];
    var_dump($userOne !== $userTwo);
    








?>





