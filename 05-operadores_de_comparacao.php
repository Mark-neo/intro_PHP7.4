<?php 
/*
    Operadores de comparação onde se consegue retornar
    expressões booleanas para o seu código.

    //Operadores: == === != !==
    //Operadores: > >= < <=
*/

    //exemplo COMPARAÇÃO

    var_dump(value: 1 == 1);
    var_dump(value: 1 == 2);
    var_dump(value: '1' == 2); //número dentro da string vira inteiro

    $nome = 'mark_neo';
    var_dump($nome == 'mark_neo');



    //exemplo DIFERENTE

    var_dump(value: 1 != 2);
    var_dump(value: 1 != 1);
    
    $password = 'lalala';
    var_dump(value:$password != 'secret123');


    
    //exemplo IDÊNTICO:

    var_dump(value: '1' === 1);
    var_dump(value: 1 === 1);


    //exemplo IDÊNTICO:

    var_dump(value: '1' !== 1); //Não idêntico
    var_dump(value: 1 !== 1); //idêntico
    

    //exemplo >

    $number = 6;
    var_dump(value:$number > 7);
    var_dump(value:$number > 6);
    var_dump(value:$number > 5);

    //exemplo >=

    $numb = 6;
    var_dump(value:$numb >= 7);
    var_dump(value:$numb >= 6);
    var_dump(value:$numb >= 5);


    //exemplo <

    $num = 8;
    var_dump(value:$num < 4);
    var_dump(value:$num < 16);
    var_dump(value:$num < 5);

    //exemplo <=

    $n = 8;
    var_dump(value:$n <= 6);
    var_dump(value:$n <= 10);
    var_dump(value:$n <= 3);











?>