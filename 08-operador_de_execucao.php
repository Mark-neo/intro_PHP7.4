<?php
    /* 
      * Esse operador executa um comando a nível SHELL na sua máquina.
      * Equiparando as funções shell_exec() , exec() ,system()
    */
    
    //OPERADOR ``

    $output = `ls`;
    echo $output;


?>