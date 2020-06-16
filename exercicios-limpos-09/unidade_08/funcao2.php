<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario){
                echo "Meu salário divido por dia ao mês</br>";
                return "R$ " . number_format($salario/30,2) . " reais por dia.";
            }
            
            $diaria = retornarDiaria(8000);
            echo $diaria;
        ?>
    </body>
</html>