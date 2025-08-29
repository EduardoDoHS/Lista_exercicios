<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7 - Verificar numero perfeito</title>
</head>

<body>
    <h1>Exercicio 7 - Verificar numero perfeito</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        function somaDivisores($num) {
            $soma = 0;
            for ($i = 1; $i <= $num / 2; $i++) {
                if ($num % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        $soma = somaDivisores($numero);

        if ($soma == $numero) {
            echo "<p>$numero é um número perfeito.</p>";
        } else {
            echo "<p>$numero não é um número perfeito.</p>";
        }
    }
    ?>
</body>