<?php
    $salada = Array("Maçã", "Abacate", "Laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $salada[0];
            echo "</br>";
            echo $salada[1];
            echo "</br>";
            echo $salada[2];
            echo "</br>";
            echo "Quantos elementos tem no array? " . count($salada);
            echo "</br>";
            $salada[] = "Kiwi";
            echo count($salada);
        ?>
        
        <pre>
            <?php
                print_r($salada);
            ?>
        </pre>
    </body>
</html>