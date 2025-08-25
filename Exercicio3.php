<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Informar positivo, negativo ou zero</title>
</head>

<body>
    <h1>Exercício 3 - Informar positivo, negativo ou zero</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];

            if ($numero > 0) {
                echo "<p>O número $numero é Positivo.</p>";
            } elseif ($numero < 0) {
                echo "<p>O número $numero é Negativo.</p>";
            } else {
                echo "<p>O número é Zero.</p>";
            }
        }
    }
    ?>
</body>