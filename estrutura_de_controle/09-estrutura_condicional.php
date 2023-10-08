<?php
    /* 
       *Faz checagem para caso algo for 'VERDADEIRO' ou 'FALSO',
        dando um fim diferente para cada uma das condições
    */

    //EXEMPLO CONDIÇÃO VERDADEIRO

    $name = 'Mark_neo';
    $employed = true;
    $age = 21;

    if($name == 'Mark_neo'){
        echo 'Acesse meu twitter'.PHP_EOL;
    }


   //EXEMPLO CONDIÇÃO FALSO

    $name = 'Mark_neo.deb';
    $employed = true;
    $age = 21;

    if($name == 'Mark_neo'){
        echo 'Acesse meu twitter'.PHP_EOL;
    }


    //EXEMPLO CONDIÇÃO FALSA COM ELSE

    $name = 'Mark_neo';
    $employed = true;
    $age = 21;

    if($name == 'Mark_neo.deb'){
        echo 'Acesse meu twitter'.PHP_EOL;
    }
    else{
        echo 'Você ainda não segui o Mark'.PHP_EOL;
    }



    //EXEMPLO CONDIÇÃO COM 'ELSE IF'

    $name = 'Mark_neo';
    $employed = true;
    $age = 21;

    if($name == 'Mark_neo.rpm'){
        echo 'Acesse meu twitter'.PHP_EOL;
    }
    else if($name == 'Mark_neo'){
        echo 'O Alderson é quem está me ajudando no PHP' .PHP_EOL;
    }
    else{
        echo 'Você ainda não segui o Mark'.PHP_EOL;
    }


    //EXEMPLO MAIOR IDADE

    $name = 'neo';
    $employed = true;
    $age = 25;

    if($age >= 18 && $employed){
        echo 'Cara você é maior de idade !!'.PHP_EOL;
    }
    else{
        echo 'Mano você não é maior de idade'.PHP_EOL;
    }



   //OUTRO EXEMPLO 

   $name = 'neo';
   $employed = false;
   $age = 25;

   if($age >= 18 && $employed){
       echo 'Cara você é maior de idade !!'.PHP_EOL;
   }
   else{
       echo 'Mano você não é maior de idade'.PHP_EOL;
   }




   //EXEMPLO COM || 

   $name = 'neo';
   $employed = false;
   $age = 25;

   if($age >= 18 || $employed){
       echo 'Cara você é maior de idade,faz o pix !!'.PHP_EOL;
   }
   else{
       echo 'Mano você não é maior de idade,vai ver DBZ'.PHP_EOL;
   }

   


?>