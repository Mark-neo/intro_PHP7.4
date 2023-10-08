<?php 
    //Pra não fazer muitos if/else a gente utiliza o Switch

    //EXEMPLO
    $name = 'Mark_neo';
    switch($name){
        case 'Mark_neo':
            echo 'Mark_neo'.PHP_EOL;
            break;
        default:
            echo 'Salve para você que não ta na lista'.PHP_EOL;
    }


    //OUTRO EXEMPLO 2
    $name = 'Mark_neo.deb';
    switch($name){
        case 'Mark_neo':
            echo 'Mark_neo'.PHP_EOL;
            break;
        default:
            echo 'Salve para você que não ta na lista'.PHP_EOL;
    }


    //OUTRO EXEMPLO 3
    $name = 'Alderson';
    switch($name){
        case 'Bruno Praga':
            echo 'Hasker ,haskeia'.PHP_EOL;
            break;
        case 'Alderson':
            echo 'Tudo bom ? Prazer em te conhecer,sou Neo :)'.PHP_EOL;
            break;
        default:
            echo 'Salve para você que não ta na lista'.PHP_EOL;
    }
    








    
?>