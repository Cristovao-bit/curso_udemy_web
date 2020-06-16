<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array("Maçã", "Abacate", "Laranja", "Banana", "Uva", "Abacaxi");
            
            foreach ($salada as $frutas) {
                echo $frutas . "</br>";
            }
        ?>
    </body>
</html>