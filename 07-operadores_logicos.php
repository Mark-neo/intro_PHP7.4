<?php
    /* Operadores lógicos  onde tudo é convertido
       para booleano antes de checar a expressão.

       Operadores: && || ^ !
    */

    //OPERADOR 'E' AND &&

    $empregado = true;
    $homeOffice = true;
    var_dump($empregado && $homeOffice);

    //exemplo com FALSE

    $empregado = true;
    $homeOffice = false;
    var_dump($empregado && $homeOffice);



    //OPERADOR 'OU' OR ||

    $empregado = true;
    $homeOffice = true;
    var_dump($empregado || $homeOffice);




    //OPERADOR XOR ^
    /*
        Para que retorne verdadeiro,precisamos que apenas uma delas sela.
        O resultado  vem em 1 ou 0 . int(0)= false , int(1) = true
    */

    $empregado = false;
    $homeOffice = true;
    var_dump($empregado ^ $homeOffice);



    //OPERADOR 'NÃO' NOT !
    /* 
        Que seja ao contrario do valor.
        É muito usado em função ou algum valor que seja ao 
        contrario,caso esteja esperando que retorne 'true' ,
        se retorna 'false' .
    */

    $empregado = true;
    
    var_dump(value: !$empregado);
    



?>