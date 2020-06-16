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
            echo "A variável é null? " . is_null($nome);
            echo "</br>";
            // Nesse segundo exemplo a variável vai apresentar 
            // como resposta 0 porque uma variável em branco 
            // não é a mesma coisa que null.
            echo "A variável é null? " . is_null($endereco);
        ?>
    </body>
</html>