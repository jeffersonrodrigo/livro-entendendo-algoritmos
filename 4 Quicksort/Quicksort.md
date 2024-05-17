# Dividir para conquistar

Para recapitular, estes são os passos para aplicação da estratégia DC: 

1. Descubra o caso-base, que deve ser o caso mais simples possível. 
2. Descubra como reduzir o seu problema para que ele se torne o caso-base.

O algoritmo DC não é um simples algoritmo que você aplica em um problema, **mas sim uma maneira de *pensar* sobre o problema**.

### Exercícios

4.1 Escreva o código para a função soma, vista anteriormente. -> soma[2, 4, 6]

4.2 Escreva uma função recursiva que conte o número de itens em uma lista. 

4.3 Encontre o valor mais alto em uma lista.

4.4 Você se lembra da pesquisa binária do Capítulo 1? Ela também é um algoritmo do tipo dividir para conquistar. Você consegue determinar o caso-base e o caso recursivo para a pesquisa binária?

------

Resposta: O caso-base para a pesquisa binária é um array com um item. Se oitem que você está procurando combina com o item presente no array, você o encontrou! Caso contrário, ele não está no array. No caso recursivo para a pesquisa binária, você divide o array pela metade, joga fora uma metade e executa uma pesquisa binária na outra metade.

