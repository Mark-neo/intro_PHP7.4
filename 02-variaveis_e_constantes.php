<?php
    //declarar variáveis e regras
    $name = "Mark_neo";
    echo $name .PHP_EOL;

    //alterando a variável
    $name = "Mark27";
    echo $name .PHP_EOL;

    $data = ['Mark',27,'hell de janeiro'];
    echo $data[1].PHP_EOL;

    //Transformar Array em chave valor
    $dataNovo = ['name' => 'Mark',
                 'age' => 27,
                 'city' => 'hell de janeiro'
    ];
    echo $dataNovo['city'].PHP_EOL;

    
    //Constantes
    define('peppers','https://google.com');
    echo peppers.PHP_EOL;

    /* Ao atribuir valor essa constante,o valor não pode ser reatribuido */





?>