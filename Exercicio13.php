<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13 - Celsius para Fahrenheit</title>
</head>

<body>
    <h1>Exercicio 13 - Celsius para Fahrenheit</h1>
    <form method="post" action="">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.1" required>
        <br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<h2>$celsius °C é igual a $fahrenheit °F</h2>";
    }
    ?>
</body>