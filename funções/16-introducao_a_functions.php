<?php 

    
    //A ideia da função é cria bloco de código reutilizavel.
    
    //EXEMPLO CÓDIGO
    echo '['. date('Y-m-d H:i:s') .'] Mark_neo: ' . strtoupper('flamengo').PHP_EOL;


    echo "\n";

    //MESMOO EXEMPLO COM FUNÇÃO
    function sendMessage($nickName, $message){
        echo '['. date('Y-m-d H:i:s') ."] $nickName: " . strtoupper($message).PHP_EOL;
    }

    sendMessage('Mark_neo','Vamos Flamengo !');
    sendMessage('Alderson', 'Vou te Hackear !');






?>