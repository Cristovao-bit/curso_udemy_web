<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario, $dias){
                echo "Meu salário divido por dia ao mês</br>";
                return "R$ " . number_format($salario/$dias,2) . " reais por dia.";
            }
            
            $diaria = retornarDiaria(3000,10);
            echo $diaria;
        ?>
    </body>
</html>