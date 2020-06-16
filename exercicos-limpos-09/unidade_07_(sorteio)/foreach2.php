<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = [
                "Nome" => "Cristovão",
                "Sobrenome" => "Lira Braga",
                "Salario" => 1000,
                "Aniversário" => "27/05/1992"
            ];
            
            foreach ($agenda as $atributo => $valor ) {
                echo $atributo . ": " . $valor . "</br>";
            }        
        ?>
    </body>
</html>