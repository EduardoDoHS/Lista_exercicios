<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8 - Verificar pares entes 1 e x</title>
</head>

<body>
    <h1>Exercicio 8 - Verificar pares entes 1 e x</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        echo "<h2>Pares entre 1 e $numero:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>