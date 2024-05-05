## Recursão
A recursão é um conceito em programação onde uma função chama a si mesma para resolver um problema. Funciona como um loop, mas ao invés de repetir uma série de instruções, a função se chama repetidamente até que uma condição de parada seja alcançada. Isso permite resolver problemas de forma elegante e eficiente, especialmente aqueles que possuem uma estrutura repetitiva ou hierárquica. Um exemplo comum de recursão é o cálculo do fatorial de um número, onde a função fatorial se chama com um argumento menor até alcançar o caso base.

##### “Os loops podem melhorar o desempenho do seu *programa*. A recursão melhora o desempenho do seu ***programador***. Escolha o que for mais importante para a sua situação.”

### Caso-base e caso recursivo
Na recursão, é essencial ter um caso-base e um caso-recursivo.

- **Caso-base**: É a condição que determina *quando a recursão deve parar*. Quando essa condição é atendida, a função recursiva não se chama mais a si mesma e começa a retornar valores para as chamadas anteriores na pilha de execução. Evita que o programa não se torna um loop infinito

- **Caso-recursivo**: É a parte da *função que invoca a própria função*, geralmente com argumentos modificados, para continuar resolvendo o problema de forma iterativa até atingir o caso-base.

**Exemplo do fatorial:**

- **Caso-base**: Quando o número é 0 ou 1, o fatorial é 1.

- **Caso-recursivo**: Para calcular o fatorial de um número maior que 1, multiplicamos esse número pelo fatorial do número anterior.

```python
def fatorial(n):
    # Caso-base
    if n == 0 or n == 1:
        return 1
    # Caso-recursivo
    else:
        return n * fatorial(n - 1)

print(fatorial(5))  # Saída: 120
```

Neste exemplo, o caso-base é quando `n` é igual a 0 ou 1, onde a função retorna 1. O caso-recursivo é quando `n` é maior que 1, onde a função se chama a si mesma com `n - 1`, multiplicando `n` pelo resultado da chamada recursiva. Assim, a função continuará se chamando até atingir o caso-base, quando `n` for 0 ou 1.

### A pilha

A **pilha de chamada** é uma *estrutura de dados* usada em programação para controlar a ordem das chamadas de função em um programa. Funciona como uma pilha de pratos: o último prato que é colocado é o primeiro a ser retirado. *[Last In, First Out (LIFO)]*

Quando uma função é chamada, suas informações são empilhadas no topo da pilha. Isso inclui variáveis locais, parâmetros e o endereço de retorno, que é o local no código onde a execução deve continuar após a função terminar.

Quando a função termina de executar, suas informações são retiradas da pilha, e a execução continua do ponto onde a função foi chamada, usando o endereço de retorno.

Um exemplo simples seria o seguinte:

```python
def funcaoA():
    print("Início da função A")
    funcaoB()
    print("Fim da função A")

def funcaoB():
    print("Início da função B")
    print("Fim da função B")

funcaoA()
```

Neste exemplo, quando `funcaoA()` é chamada, sua execução é empilhada no topo da pilha. Ela então chama `funcaoB()`, que é adicionada à pilha acima de `funcaoA()`. Quando `funcaoB()` termina, suas informações são retiradas da pilha, e a execução continua na linha seguinte de `funcaoA()`. Depois que `funcaoA()` termina, suas informações são retiradas da pilha, e a execução termina.

### A pilha de chamada com recursão

Na recursão, a pilha de chamadas é essencial para entender como as chamadas de função são empilhadas e desempilhadas.

**Exemplo do fatorial:**

Vamos usar o mesmo exemplo de cálculo do fatorial, mas agora vamos explicar como a pilha de chamadas é utilizada durante a recursão.

```python
def fatorial(n):
    # Caso-base
    if n == 0 or n == 1:
        return 1
    # Caso-recursivo
    else:
        print(f"Chamando fatorial({n})")
        resultado = n * fatorial(n - 1)
        print(f"Retornando {n} * fatorial({n - 1}) = {resultado}")
        return resultado

print(fatorial(5))
```

Neste exemplo, ao chamar `fatorial(5)`, a pilha de chamadas será construída da seguinte forma:

1. `fatorial(5)` é chamado:
   - `fatorial(5)` chama `fatorial(4)`
     - `fatorial(4)` chama `fatorial(3)`
       - `fatorial(3)` chama `fatorial(2)`
         - `fatorial(2)` chama `fatorial(1)`
           - `fatorial(1)` retorna 1 (caso-base)
         - `fatorial(2)` retorna 2 * 1 = 2
       - `fatorial(3)` retorna 3 * 2 = 6
     - `fatorial(4)` retorna 4 * 6 = 24
   - `fatorial(5)` retorna 5 * 24 = 120

Assim, podemos ver como as chamadas de função são empilhadas na pilha de chamadas e, em seguida, desempilhadas à medida que o caso-base é alcançado e os resultados são retornados.

### Recapitulando
- Recursão é quando uma função chama a si mesma.
- Toda função recursiva tem dois casos: o caso-base e o caso recursivo. 
- Uma pilha tem duas operações: push e pop.
- Todas as chamadas de função vão para a pilha de chamada. 
- A pilha de chamada pode ficar muito grande e ocupar muita memória.