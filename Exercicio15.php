<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15 - Calcular IMC pelo peso e altura</title>
</head>

<body>
    <h1>Exercicio 15 - Calcular IMC pelo peso e altura</h1>
    <form method="post" action="">
        <label for="peso">Digite seu peso (kg):</label>
        <input type="number" step="0.01" id="peso" name="peso" required>
        <br><br>
        <label for="altura">Digite sua altura (m):</label>
        <input type="number" step="0.01" id="altura" name="altura" required>
        <br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

            if ($imc < 18.5) {
                echo "<p>Classificação: Abaixo do peso</p>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<p>Classificação: Peso normal</p>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<p>Classificação: Sobrepeso</p>";
            } else {
                echo "<p>Classificação: Obesidade</p>";
            }
        } else {
            echo "<p>Altura inválida.</p>";
        }
    }
    ?>
</body>