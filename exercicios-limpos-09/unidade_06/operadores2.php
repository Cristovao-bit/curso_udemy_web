<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $fumante = false;
            
            if(!$fumante){
                echo "Você é fumante!!!";
            }else{
                echo "Você não é fumante!!!";
            }
            
            echo "</br>";
            
            if($fumante != false){
                echo "Você é fumante!!!";
            }else{
                echo "Você não é fumante!!!";
            }
        ?>
    </body>
</html>