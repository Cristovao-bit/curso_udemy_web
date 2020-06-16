<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria(){
                echo "Meu salário divido por dia ao mês</br>";
                $salario = 5000;
                return "R$ " . number_format($salario/30,2) . " reais por dia.";
            }
            
            echo retornarDiaria();
        ?>
    </body>
</html>