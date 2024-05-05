### Entendimento melhor do conceito de pilha de chamada:

| Posição na pilha | Função           |
| ---------------- | ---------------- |
| 3                | tchau()          |
| 2                | saudacao2($nome) |
| 1                | saudacao('Jeff') |

Aqui estaria a posição das chamadas em relação a pilha total (pegando o exemplo do código do livro sauda).

Execução na ordem de chamada:

| saudacao('Jeff') | Chamou a função |
| :--------------: | :-------------: |

| Empilha e executa | saudacao2($nome) |
| :---------------: | :--------------: |
|    Base pilha     | saudacao('Jeff') |

| Após executado retira da pilha | ~~saudacao2($nome)~~ |
| :----------------------------: | :------------------: |
|           Base pilha           |   saudacao('Jeff')   |

| Empilha e executa |     tchau()      |
| :---------------: | :--------------: |
|    Base pilha     | saudacao('Jeff') |

| Após executado retira da pilha |   ~~tchau()~~    |
| :----------------------------: | :--------------: |
|           Base pilha           | saudacao('Jeff') |

| saudacao('Jeff') | Termina a execução |
| :--------------: | :----------------: |