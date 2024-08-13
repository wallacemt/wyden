#include <stdio.h>

int main() {
    int soma = 0;

    for (int i = 0; i <= 40; i += 2) {
        soma += i;
    }

    double resultado = soma / 30;
    
    printf("Resultado: %.2f\n", resultado);

    return 0;
}
