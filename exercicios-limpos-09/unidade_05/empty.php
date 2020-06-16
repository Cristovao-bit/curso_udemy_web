<?php
    $nome = null;
    $endereco = "";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "A variável está vazia? " . empty($nome);
            echo "</br>";
            echo "A variável está vazia? " . empty($endereco);
            echo "</br>";
        ?>
    </body>
</html>