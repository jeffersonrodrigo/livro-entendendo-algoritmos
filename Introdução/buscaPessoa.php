<?php
class Pessoa {
    public $nome;
    public $idade;
  
    public function __construct($nome, $idade) {
      $this->nome = $nome;
      $this->idade = $idade;
    }
  }
  
  function buscaBinariaObjeto($alvo, $array) {
    $baixo = 0;
    $alto = count($array) - 1;
  
    while ($baixo <= $alto) {
      $meio = floor(($baixo + $alto) / 2);
  
      if ($array[$meio]->nome === $alvo) {
        return $meio;
      }
  
      if ($array[$meio]->nome > $alvo) {
        $alto = $meio - 1;
      } else {
        $baixo = $meio + 1;
      }
    }
  
    return null;
  }
  
  $array = [
    new Pessoa("Alice", 25),
    new Pessoa("Bob", 30),
    new Pessoa("Carlos", 35),
    new Pessoa("Daniel", 40)
  ];
  echo buscaBinariaObjeto("Carlos", $array) . "\n";
  