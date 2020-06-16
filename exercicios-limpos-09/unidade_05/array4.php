<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = Array("Maçã", "Abacate", "Laranja");
            
            // Se é falso ou verdadeiro
            echo "Existe o elemento Pêra no array? " . in_array("Pêra", $salada);
            echo "</br>";
            echo "Existe o elemento Abacate no array? " . in_array("Abacate", $salada);
            echo "</br>";
            
            // Qual a posição do elemento
            echo "Qual a posição do elemento Laranja? " . array_search("Laranja", $salada);
            echo "</br>";
        ?>
    </body>
</html>