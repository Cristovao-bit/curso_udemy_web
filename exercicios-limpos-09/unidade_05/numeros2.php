<?php
    $salario = 800;
    $gasolina = 2.01;
    $nome = "Cristovão Lira Braga";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // Testar se é numérica.
            // A resposta vai ser em bool,ou seja, 0 ou 1 que representa 0 = false e 1 = true.
            echo "O R$ $salario reais é um número? " . is_numeric($salario);
            echo "</br>";
            echo "O R$ $gasolina reais é um número? " . is_numeric($gasolina);
            echo "</br>";
            echo "O $nome é um número? " . is_numeric($nome) . "</br>";
            echo "</br>";

            // testar se é inteiro
            echo "O R$ $salario reais é um inteiro? " . is_int($salario);
            echo "</br>";
            echo "O R$ $gasolina reais é um inteiro? " . is_int($gasolina) . "</br>";
            echo "</br>";            

            // testar se é float
            echo "O R$ $salario reais é um float? " . is_float($salario);
            echo "</br>";
            echo "O R$ $gasolina reais é um float? " . is_float($gasolina) . "</br>";
            echo "</br>";
            
            // Arredondando o float
            echo "Arredondando o valor da gasolina R$ " . round($gasolina) . " reais.";
            echo "</br>";
            
            // Arredondando para baixo
            echo "Arredondando o valor da gasolina para baixo R$ " . floor($gasolina) . " reais.";
            echo "</br>";
            
            // Arredondando para cima
            echo "Arredondando o valor da gasolina para cima R$ " . ceil($gasolina) . " reais.";
            
        ?>
        
        
    </body>
</html>