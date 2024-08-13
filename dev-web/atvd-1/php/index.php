<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma e Divisão</title>
</head>
<body>
    <h1>Resultado da Soma e Divisão</h1>
    <?php
    // Inicializa a variável
    $soma = 0;

    // Soma de 2 em 2 até que a soma seja menor ou igual a 40
    for ($i = 0; $i <= 40; $i += 2) {
        $soma += $i;
    }

    // Divide a soma por 30
    $resultado = $soma / 30;

    // Mostra o resultado na tela com duas casas decimais
    echo "Resultado: " . number_format($resultado, 2);
    ?>
</body>
</html>
