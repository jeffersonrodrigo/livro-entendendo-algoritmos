## Algoritmo de busca binária

 O algoritmo de busca binária retorna o índice do elemento encontrado no array, se o elemento estiver presente, ou null se o elemento não for encontrado. **Ele não retorna diretamente o número de operações realizadas para encontrar o elemento.**

## Pontos Importantes

- Para a busca binária funcionar corretamente, **é essencial que a lista esteja ordenada**. A busca binária se baseia na divisão repetida da lista em duas metades, comparando o elemento do meio com o alvo. Este processo pressupõe que a lista está em ordem, para que possa descartar metade da lista a cada iteração.

  Se a **lista não estiver ordenada**, a busca binária **pode produzir resultados incorretos** ou não encontrar o elemento alvo, mesmo que ele esteja presente na lista.
- A pesquisa binária é muito mais rápida do que a pesquisa simples.
- O(log n) é mais rápido do que O(n), e O(log n) fica ainda mais rápido conforme os elementos da lista aumentam.
- **A rapidez de um algoritmo não é medida em segundos.**
- O tempo de execução de um algoritmo é medido por meio de seu **crescimento**.

## Cinco tempos de execução Big O
- O(log n), também conhecido como tempo logarítmico. Exemplo: pesquisa binária.
- O(n), conhecido como tempo linear. Exemplo: pesquisa simples. 
- O(n * log n). Exemplo: um algoritmo rápido de ordenação, como a ordenação quicksort (explicada no Capítulo 4).
- O(n2). Exemplo: um algoritmo lento de ordenação, como a ordenação por seleção (explicada no Capítulo 2).
- O(n!). Exemplo: um algoritmo bastante lento.