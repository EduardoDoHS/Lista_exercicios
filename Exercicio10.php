<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10 - Exibir a sequencia Fibonacci até o número</title>
</head>

<body>
    <h1>Exercicio 10 - Exibir a sequencia Fibonacci até o número</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Exibir Sequência">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        echo "<h2>Sequência Fibonacci até $numero:</h2>";
        $a = 0;
        $b = 1;
        echo "<ul>";
        while ($a <= $numero) {
            echo "<li>$a</li>";
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
        echo "</ul>";
    }
    ?>
</body>