<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salario = 800;
            $premio = "800";
            
            if($salario == $premio){
                echo "Salário é igual a Prêmio!!!";
            }else{
                echo "Salário não é igaul a Prêmio!!!";
            }
            
            echo "</br>";
            
            if($salario === $premio){
                echo "Salário é identico a Prêmio!!!";
            }else{
                echo "Salário não é identico a Prêmio!!!";
            }
        ?>
    </body>
</html>