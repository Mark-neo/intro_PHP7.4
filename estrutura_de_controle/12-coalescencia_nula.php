<?php 

    // 'PHP_EOL' foi usado de uma modo simples para pular linha
    //Existem melhoras formas de organizar o código
    $user = [
        'name' => 'Mark_amore' .PHP_EOL,
        'age' => '26',
        'instagram' => '@mark_neo'
    ];
    echo  $user['name'] ?? 'Marcos Paulo'.PHP_EOL;


    //EXEMPLO SEM 'name'
    $user = [
        'age' => '26',
        'instagram' => '@mark_neo'
    ];
    echo  $user['name'] ?? 'Marcos Paulo'.PHP_EOL;



    //ENCADIAÇÃO
    $user = [
        'age' => '26',
        'instagram' => '@mark_neo' .PHP_EOL
    ];
    echo $user['name'] ?? $user['instagram'] ?? 'Marcos Paulo'.PHP_EOL;
    //ele tentou o 'name' e não tinha valor
    //ele tentou o 'instagram' e tinha valor


    $user = [
        'name' => 'Mark_amore'.PHP_EOL,
        'age' => '26'.PHP_EOL,
        'instagram' => '@mark_neo' .PHP_EOL
    ];
    echo $user['corno'] ?? 'Marcos Paulo' .PHP_EOL;

?>