<?php
    function fatorial($x){
        if($x == 1){ //caso-base
            return 1;
        }else{//caso-recorrente
            return $x * fatorial($x-1);
        }
    }

   echo fatorial(8);

//    function fatorial(3){
//     if(3 == 1){ //caso-base
//         return 1;
//     }else{//caso-recorrente
//         return $3 * fatorial(3-1);
//     }
//     function fatorial(2){
//         if(2 == 1){ //caso-base
//             return 1;
//         }else{//caso-recorrente
//             return $2 * fatorial(2-1);
//         }
//         function fatorial(1){
//             if(1 == 1){ //caso-base
//                 return 1;
//             }else{//aqui nao executa
//                 return 1* fatorial(1-1);
//             }
// }

/**Ao chamar fatorial(3), a função entra em execução:
Como 3 != 1, ela chama fatorial(2).
Dentro de fatorial(2):
Como 2 != 1, ela chama fatorial(1).
Dentro de fatorial(1):
Como 1 == 1, esse é o caso-base, então retorna 1.
Agora, voltando para fatorial(2):
Ele recebe o valor retornado de fatorial(1) (que é 1) e retorna 2 * 1, que é 2.
Finalmente, de volta para fatorial(3):
Ele recebe o valor retornado de fatorial(2) (que é 2) e retorna 3 * 2, que é 6.
Portanto, fatorial(3) retorna 6, que é o fatorial de 3. */