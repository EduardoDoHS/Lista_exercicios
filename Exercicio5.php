<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificar números amigos</title>
</head>

<body>
    <h1>Exercício 5 - Verificar números amigos</h1>
    <form method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit">Verificar</button>        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {            
        
</body>