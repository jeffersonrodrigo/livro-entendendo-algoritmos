<?php
    function saudacao2($nome){ //Apesar de vir no inicio do código essa função só é chamada apos a execução da funcção saudacao()
        echo 'Como vai você ' . $nome . "?\n";
    }

    function tchau(){
        echo 'Até mais!!';
    }

    function saudacao($nome){ //Posição na pilha: 1
        echo 'Olá ' .$nome . "!!\n";
        /**O echo 'Olá ' .$nome . "!!\n"; faz parte da execução da função saudacao('Jeff'), portanto está na mesma pilha de chamadas que saudacao('Jeff'). 
         * Não é uma nova chamada de função, mas sim uma instrução dentro da função saudacao('Jeff').  */
        saudacao2($nome);//Posição na pilha: 2
        echo "Preparando para dizer tchau..\n";
        tchau();//Posição na pilha: 3
    }
    
    saudacao('Jeff');