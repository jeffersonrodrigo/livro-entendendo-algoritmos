# Algoritmo de Euclides

O Algoritmo de Euclides é um método eficiente para encontrar o **máximo divisor comum (MDC)** de dois números inteiros. O MDC é o maior número que divide ambos os números sem deixar resto.

#### Como funciona?

O algoritmo se baseia no princípio de que o MDC de dois números também divide o resto de sua divisão. O procedimento é o seguinte:

1. Dados dois números `a` e `b`, onde `a > b`, calcula-se o resto da divisão de `a` por `b`.
2. Substitui-se `a` por `b` e `b` pelo resto da divisão.
3. Repete-se o processo até que o resto seja 0. Quando o resto for 0, o MDC é o último valor de `b`.

#### Exemplo simples

Vamos encontrar o MDC de 48 e 18.

1. `a = 48`, `b = 18`
   - `48 % 18 = 12` (resto)
   - Substitui `a` por `18` e `b` por `12`
2. `a = 18`, `b = 12`
   - `18 % 12 = 6` (resto)
   - Substitui `a` por `12` e `b` por `6`
3. `a = 12`, `b = 6`
   - `12 % 6 = 0` (resto)

Quando o resto é 0, o último `b` (que é 6) é o MDC.

```php
function mdc($a, $b) {
    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    return $a;
}

echo mdc(48, 18); // Saída: 6
```

Neste exemplo, a função `mdc` implementa o Algoritmo de Euclides para calcular o MDC de 48 e 18, resultando em 6.