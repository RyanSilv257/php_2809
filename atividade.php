<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="idade">Informe sua idade</label><br>
        <input type="number" name="idade">
        <input type="submit">
    </form>


<?php
    $idade = $_POST["idade"];
    if ($idade < 16 && $idade > 0) {
        echo "Não pode votar";
    } else if ($idade >= 16 && $idade <= 18) {
        echo "Voto Facultativo";
    } else if ($idade >= 19 && $idade <= 65) {
        echo "O voto é obrigatório";
    } else if ($idade >= 66) {
        echo "O voto é facultativo";
    } else {
        echo "Coloque uma idade válida";
    }
?>


</body>
</html>