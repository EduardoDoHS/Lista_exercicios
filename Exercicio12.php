<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12 - Receber string e mostrar vogais</title>
</head>

<body>
    <h1>Exercicio 12 - Receber string e mostrar vogais</h1>
    <form method="post" action="">
        <label for="texto">Digite uma string:</label>
        <input type="text" id="texto" name="texto" required>
        <br><br>
        <input type="submit" value="Mostrar Vogais">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $vogais = '';

        for ($i = 0; $i < strlen($texto); $i++) {
            $char = strtolower($texto[$i]);
            if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
                $vogais .= $texto[$i] . ' ';
            }
        }

        if ($vogais) {
            echo "<p>Vogais na string: $vogais</p>";
        } else {
            echo "<p>Não há vogais na string fornecida.</p>";
        }
    }
    ?>
</body>