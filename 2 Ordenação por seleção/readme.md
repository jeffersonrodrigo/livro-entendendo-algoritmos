## Ordenação por Seleção

Neste capítulo, estudamos sobre as estruturas básicas de armazenamento na memória: **Arrays** e **Listas Encadeadas**.

- **Arrays**: 
    - São sempre colocados lado a lado, o que os torna mais rápidos para fazer uma busca, pois você sabe o "endereço" de cada item. Permitem **acesso aleatório** e **sequencial**.
    - Podem ser mais lentos cada vez que for feita uma nova inserção. Além disso, caso reserve espaço a mais para o mesmo, além de não os utilizar, estará desperdiçando memória. Em caso de necessidade de mais espaço do que era esperado, será necessário mover todos.

- **Listas Encadeadas**: 
    - Cada item tem o endereço de onde estará o item seguinte na lista.
    - São mais rápidas para fazer uma inserção ou deletar algum item, já que nelas é necessário apenas atualizar o endereço do item anterior para apontar para o novo. 
    - Para buscas, são mais lentas, pois precisam percorrer todos os itens para se encontrar o endereço. Só permitem **acesso sequencial**.

- **Tipos de Acesso**: 
    Existem dois tipos de acesso: o **aleatório** e o **sequencial**. 
    - O sequencial significa ler os elementos, um por um, começando pelo primeiro.
    - O aleatório permite que você pule diretamente para o décimo elemento. Muitos casos requerem o acesso aleatório, o que torna os arrays mais utilizados.

## Algoritmo de Ordenação por Seleção

O algoritmo de ordenação por seleção é um método simples de ordenação que funciona da seguinte forma:

1. **Encontrar o Menor Elemento**: O algoritmo começa encontrando o menor elemento no array não ordenado.
2. **Mover para o Início**: Após encontrar o menor elemento, ele é movido para a primeira posição do array ordenado.
3. **Repetir**: O processo é repetido para o restante do array não ordenado, encontrando o próximo menor elemento e movendo-o para a próxima posição do array ordenado.
4. **Concluir**: O algoritmo continua repetindo esse processo até que todos os elementos do array tenham sido movidos para o array ordenado.

- O tempo de execução do algoritmo de ordenação por seleção é 𝑂(𝑛²), onde 𝑛 representa o número de elementos no array a ser ordenado.
    Exemplo: Se tivermos um array com 5 elementos, o tempo de execução do algoritmo de ordenação por seleção seria 𝑂(5²) = 25. Isso significa que, para ordenar um array com 5 elementos usando o algoritmo de ordenação por seleção, seria necessário realizar aproximadamente 25 operações.

## Recapitulando

- A memória do seu computador é como um conjunto gigante de gavetas.
- Quando se quer armazenar múltiplos elementos, usa-se um array ou uma lista.
- No array, todos os elementos são armazenados um ao lado do outro.
- Na lista, os elementos estão espalhados e um elemento armazena o endereço do próximo elemento.
- Arrays permitem leituras rápidas.
- Listas encadeadas permitem rápidas inserções e eliminações.
- Todos os elementos de um array devem ser do mesmo tipo (todos inteiros, todos números decimais, e assim por diante).
