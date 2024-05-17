<?php

function buscaBinariaString($alvo, $lista) {
    $baixo = 0;
    $alto = count($lista) - 1;
  
    while ($baixo <= $alto) {// while seria algo como "enquanto for verdadeiro, continue"
      $meio = floor(($baixo + $alto) / 2);//A função floor em PHP é usada para arredondar um número para baixo, para o inteiro mais próximo.
      $comparacao = strcmp($lista[$meio], $alvo);
   

      if ($comparacao === 0) {
        return $meio;
      }
  
      if ($comparacao > 0) {
        $alto = $meio - 1;
      } else {
        $baixo = $meio + 1;
      }
    }
  
    return null;
  }
  
  $lista = ["banana", "laranja", "maçã", "melancia", "morango"];
  echo buscaBinariaString("maçã", $lista) . "\n";
  echo buscaBinariaString("laranja", $lista) . "\n";
 

// A função strcmp compara duas strings.
// Retorna 0 se as strings forem iguais.
// Retorna um número negativo se a primeira string for menor que a segunda.
// Retorna um número positivo se a primeira string for maior que a segunda.

// Exemplo:
$string1 = "banana";
$string2 = "maçã";
$resultado = strcmp($string1, $string2);
echo $resultado;
// Neste caso, como "banana" vem antes de "maçã" no dicionário,
// strcmp retornará um número negativo.
// Portanto, $resultado será menor que 0.
