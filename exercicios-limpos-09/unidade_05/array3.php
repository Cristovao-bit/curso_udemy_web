<?php
$lost = Array(23, 15, 16, 2, 48, 4);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Exercício de Array";
            echo "</br>";
            echo "</br>";
            echo "Número máximo: " . max($lost);
            echo "</br>";
            echo "Número mínimo: " . min($lost);
            echo "</br>";
            echo "A soma dos arrays: " . array_sum($lost);
            echo "</br>";
            
            //ordem crescente
            //sort($lost);
            
            //ordem decrescente
            //rsort($lost);
            
            //ordem embaralhada
            shuffle($lost);
        ?>
        
        <pre>
            <?php
                print_r($lost);
            ?>
        </pre>
    </body>
</html>