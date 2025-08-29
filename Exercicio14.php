<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14 - Verificar ano bissexto</title>
</head>

<body>
    <h1>Exercicio 14 - Verificar ano bissexto</h1>
    <form method="post" action="">
        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = $_POST['ano'];

        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "<p>$ano é um ano bissexto.</p>";
        } else {
            echo "<p>$ano não é um ano bissexto.</p>";
        }
    }
    ?>
</body>