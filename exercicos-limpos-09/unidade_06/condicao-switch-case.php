<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "quinta-feira";
            
            switch ($dia) {
                case "segunda-feira":
                    echo "Hoje ainda é segunda-feira :(";
                    break;
                case "quarta-feira":
                    echo "Hoje ainda é quarta-feira :(";
                case "sexta-feira":
                    echo "Hoje é sexta-feira, dia de tomar cerveja! \o/\o/\o/";
                    break;
                default :
                    echo "Trabalha que ainda não é o dia!!!";
            }
        ?>
    </body>
</html>