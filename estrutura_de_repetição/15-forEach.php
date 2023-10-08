<?php 
    //Funciona somente em Array e Objetos.
    

    $user = [
        'name' => 'Mark_neo',
        'age' => '22',
        'employed' => 'true'
    ];
    foreach($user as $value){
        echo $value .PHP_EOL;
    }
    
    
    echo "\n";



    //PEGANDO CHAVE-VALOR DOS CAMPOS

    $user = [
        'name' => 'Mark_neo',
        'age' => '22',
        'employed' => 'true'
    ];
    foreach($user as $key => $value){
        echo $key . ' ' .$value.PHP_EOL;
    }

    echo "\n";

    //ITERANDO ARRAY QUE TENHA ARRAY
    $users = [
        [
            'name' => 'Mark_neo',
            'age' => '22',
            'employed' => 'true'
        ],
        [
            'name' => 'neo',
            'age' => '18',
            'employed' => 'true'
        ],
        [
            'name' => 'Alderson',
            'age' => '28',
            'employed' => 'true'
        ],
        [
            'name' => 'Dark Army',
            'age' => '30',
            'employed' => 'true'
        ]

    ];
    //A key fica sendo as array a cada iteração. 0,1,2,3,4
    foreach($users as $key => $value){
        echo $key . ' ' . $value['name'] .PHP_EOL;
    }

    echo "\n";

    //stdClass

    $user = new stdClass;

    $user -> name = 'Mark_neo';
    $user -> age = 26;

    foreach($user as $key => $value){
        echo $key . ' ' . $value.PHP_EOL;
    }


    echo "\n";


    //EXEMPLO SÓ COM VALORES
    $names = ['Paulo','Pedro','Arrasca','Gabigol'];
    foreach($names as $key => $name){
        echo $key . ' ' . $name .PHP_EOL;
    }



?>