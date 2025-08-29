<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18 - Verificar qual dos 3 numeros e o maior</title>
</head>

<body>
    <h1>Exercicio 18 - Verificar qual dos 3 numeros e o maior</h1>
    <form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Digite o terceiro número:</label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        if ($numero1 >= $numero2 && $numero1 >= $numero3) {
            $maior = $numero1;
        } elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
            $maior = $numero2;
        } else {
            $maior = $numero3;
        }

        echo "<p>O maior número entre $numero1, $numero2 e $numero3 é: $maior</p>";
    }
    ?>
</body>