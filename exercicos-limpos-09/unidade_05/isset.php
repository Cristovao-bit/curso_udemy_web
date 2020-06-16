<?php
    $nome = null;
    $endereco = "Brasil";
    $telefone = "";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Se a variável está configurada? " . isset($nome);
            echo "</br>";
            echo "Se a variável está configurada? " . isset($endereco);
            echo "</br>";
            echo "Se a variável está configurada? "  . isset($telefone);
            echo "</br>";
            echo "Se a variável está configurada? " . isset($cep);
        ?>
    </body>
</html>