<?php 
    
    $empregado = true;
    $commitsZoados = 0;

    while($empregado){
        echo 'Eu fiz ' . $commitsZoados . ' commits Zoados :/'.PHP_EOL;
        $commitsZoados++;

        if($commitsZoados == 8){
            $empregado = false;
        }
    }

    echo "\n";

    //OUTRO EXEMPLO
    $healthPoints = 100;
    $maxHealthPoints = 100;

    $monsterAttackDamage = 5;
    while($healthPoints > 0){
        echo "HP $healthPoints/$maxHealthPoints" .PHP_EOL;
        echo "Person atacado!  -$monsterAttackDamage de HP!" .PHP_EOL;
        $healthPoints = $healthPoints - $monsterAttackDamage;

        if($healthPoints == 0){
            echo 'O personagem foi de Americanas/entrou pro Vasco'.PHP_EOL;
        }
    }


?>