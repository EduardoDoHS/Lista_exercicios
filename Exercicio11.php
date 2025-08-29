<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exericio 11 - Verificar palindromos</title>
</head>

<body>
    <h1>Exericio 11 - Verificar palindromos</h1>
    <form method="post" action="">
        <label for="texto">Digite um texto:</label>
        <input type="text" id="texto" name="texto" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $textoLimpo = preg_replace("/[^A-Za-z0-9]/", "", strtolower($texto));
        $textoInvertido = strrev($textoLimpo);

        if ($textoLimpo === $textoInvertido) {
            echo "<p>'$texto' é um palíndromo.</p>";
        } else {
            echo "<p>'$texto' não é um palíndromo.</p>";
        }
    }
    ?>
</body>