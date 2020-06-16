<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a = 5;
            $b = 3;
            
            if($a > $b){
                echo "A é maior do que B";
            }
            
            echo "</br>";
            
            $fumante = true;
            
            // quando a variavel é booleana nem precisa colocar == true
            if($fumante){
                echo "É fumante portanto não poderar entrar no recinto.";
            }
        ?>
    </body>
</html>