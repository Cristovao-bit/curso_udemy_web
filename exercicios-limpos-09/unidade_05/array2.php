<?php
    $agenda = Array(
        "nome" => "Cristovão",
        "sobrenome" => "Lira Braga",
        "salario" => 800.99
    );
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
            print_r($agenda);
                
            ?>
        </pre>
        
        <p>
            <?php 
            // vai apresentar um erro pelo fato de não ter o array 0 é sim um nome ou sobrenome ou salario
            // como no array criado acima
            //echo $agenda[0];
            ?>
        </p>
    </body>
</html>