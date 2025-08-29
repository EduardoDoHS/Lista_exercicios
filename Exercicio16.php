<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16 - Informa se pode votar pelo nome e idade</title>
</head>

<body>
    <h1>Exercicio 16 - Informa se pode votar pelo nome e idade</h1>
    <form method="post" action="">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if ($idade >= 16) {
            echo "<p>$nome, você pode votar.</p>";
        } else {
            echo "<p>$nome, você não pode votar.</p>";
        }
    }
    ?>
</body>