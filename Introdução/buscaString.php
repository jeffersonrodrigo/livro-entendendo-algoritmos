<?php

function buscaBinariaString($alvo, $array) {
    $baixo = 0;
    $alto = count($array) - 1;
  
    while ($baixo <= $alto) {
      $meio = floor(($baixo + $alto) / 2);
      $comparacao = strcmp($array[$meio], $alvo);
  
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
  
  $array = ["maçã", "banana", "laranja", "morango", "melancia"];
  echo buscaBinariaString("laranja", $array) . "\n";
  