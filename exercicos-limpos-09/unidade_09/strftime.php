<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // determinar timezone
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt-BR");
            
            // criar elementos
            $ano = strftime('%Y');
            $mes = strftime('%B');
            $dia = strftime('%d');
            $dia_da_semana = strftime('%A');
            
            $horas      = strftime('%H');
            $minutos    = strftime('%M');
            $segundos   = strftime('%S');
            
            echo $dia_da_semana . " " . $dia . " de " . $mes . " de " . $ano . " - " . $horas . ":" . $minutos . ":" . $segundos . " hrs.";
            
        ?>
    </body>
</html>