<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calcular fatorial</title>
</head>

<body>
    <h1>Exercício 4 - Calcular fatorial</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];

            $fatorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<p>O fatorial de $numero é $fatorial.</p>";
        }
    }
    ?>
</body>