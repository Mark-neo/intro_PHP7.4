<?php 

    //Podemos colocar tipos de retorno na função

    function sendMessage($nickName,$message){
        return '['. date('Y-m-d H:i:s') ."] $nickName: " . strtoupper($message).PHP_EOL;
    }

    $result = sendMessage('Mark_neo','Vamos flamengo');
    echo $result;















?>