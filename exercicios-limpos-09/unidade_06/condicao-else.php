<?php
    $a = 5;
    $b = 5;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            if($a > $b){
                echo "A é maior que B!";
            }elseif($a < $b){
                echo "B é maior que A!";
            }else{
                echo "A é igual a B!";
            }
        ?>
    </body>
</html>