<?php 
    $salario = 2400;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Meu salário R$ " . $salario . " reais.";
            echo "</br>";
            echo "Quantos meses eu já trabalhei: " . $meses . " meses.";
            echo "</br>";
        
            // Multiplicacao e Divisao
            echo "Trimestre R$ " . $salario * $meses . " reais.";
            echo "</br>";
            echo "Quinzena R$ " . $salario/2 .  " reais.";
            echo "</br>";

            // Exponencial
            echo "Exponenecial: " . pow(6, 3);
            echo "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(36);
            echo "</br>";
            
            // Randômico Generica
            echo "Randômico: " . rand();
            echo "</br>";

            // Randômico entre um intervalo
            echo "Randômico entre intervalo: " . rand(1, 10);
            echo "</br>";

            // Valor absoluto
            echo "Absoluto: " . abs(-210);
            
        ?>
    </body>
</html>