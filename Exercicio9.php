<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9 - Soma dos numeros entre dois</title>
</head>

<body>
    <h1>Exercicio 9 - Soma dos numeros entre dois</h1>
    <form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $soma = 0;
        for ($i = $numero1; $i <= $numero2; $i++) {
            $soma += $i;
        }

        echo "<p>A soma dos números entre $numero1 e $numero2 é: $soma</p>";
    }
    ?>
</body>