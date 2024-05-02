<?php
    function ContagemRegressiva($i){
        echo $i;

        if($i <=0 ){//Caso-base (assim que atender a essa condição irá parar)
            return;
        }else{
            ContagemRegressiva($i - 1); //Caso-recursivo (Chama novamente a função)
        }
    }

    ContagemRegressiva(10);