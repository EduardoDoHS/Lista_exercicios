<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6 - Exibir divisores</title>
</head>

<body>
    <h1>Exercicio 6 - Exibir divisores</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Exibir Divisores">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        echo "<h2>Divisores de $numero:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>