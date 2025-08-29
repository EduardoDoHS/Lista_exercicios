<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificar números amigos</title>
</head>

<body>
    <h1>Exercício 5 - Verificar números amigos</h1>     
    <form method="post" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" value="Verificar">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            function somaDivisores($num) {
                $soma = 0;
                for ($i = 1; $i <= $num / 2; $i++) {
                    if ($num % $i == 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }

            $soma1 = somaDivisores($num1);
            $soma2 = somaDivisores($num2);

            if ($soma1 == $num2 && $soma2 == $num1) {
                echo "<p>$num1 e $num2 são números amigos.</p>";
            } else {
                echo "<p>$num1 e $num2 não são números amigos.</p>";
            }
        }
        ?>
</body>