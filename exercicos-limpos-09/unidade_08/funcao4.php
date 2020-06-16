<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario, $dias, $cotacao){
                echo "Meu salário divido por dia ao mês</br>";
                $real = number_format($salario/$dias,2);
                $dolar= number_format(($salario/$dias)/$cotacao,2);
                return array($real,$dolar);
            }
            
            list($diaria_real, $diaria_dolar) = retornarDiaria(3000,10,2.5);
            echo "Diaria em R$ " . $diaria_real . " reais.</br>";
            echo "Diaria em US$ " . $diaria_dolar . " dólares</br>";
        ?>
    </body>
</html>