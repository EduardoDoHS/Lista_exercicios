<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17 - Verificar se data e valida</title>
</head>

<body>
    <h1>Exercicio 17 - Verificar se data e valida</h1>
    <form method="post" action="">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" required>
        <br><br>
        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" required>
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if (checkdate($mes, $dia, $ano)) {
            echo "<p>A data $dia/$mes/$ano é válida.</p>";
        } else {
            echo "<p>A data $dia/$mes/$ano não é válida.</p>";
        }
    }
    ?>
</body>