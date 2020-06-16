<?php
    $_nome = "Maria Betânia";
    $_sobrenome = "Lira Braga";
    $_nomeCompleto = $_nome . " " . $_sobrenome;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $_nome . " " . $_sobrenome;
            echo "<br>";
            echo $_nomeCompleto;
        ?>
    </body>
</html>