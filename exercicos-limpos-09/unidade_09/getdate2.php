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
            $agora = getdate();
            
            // criar elementos
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];
            
            $horas      = $agora["hours"];
            $minutos    = $agora["minutes"];
            $segundos   = $agora["seconds"];
            
            echo "Data: " . $dia . "/" . $mes . "/" . $ano;
            echo "</br>";
            echo $horas . ":" . $minutos . ":" . $segundos . " hrs";
        ?>
    </body>
</html>