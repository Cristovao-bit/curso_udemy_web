<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            echo $_nome;
            echo "</br>";
            
            // strlen - Retorna primeira ocorrencia
            echo "Quantas letras? " . strlen($_nome);
            echo "</br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo "Qual a posição da letra p? " . stripos($_nome, "p");
            echo "</br>";

            // strripos - Retorna última ocorrência
            echo "Qual a próxima posição da letra p? " . strripos($_nome, "p");
            echo "</br>";
            
            // strtolower - converte para letras min.
            echo "Me retorne todos os caracteres em minusculos: " . strtolower($_nome);
            echo "</br>";

            // strtoupper - converte para letras min.
            echo "Me retorne todos os caracteres em maiusculos: " . strtoupper($_nome);
            echo "</br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo "Quantos P maiusculo tem na frase? " . substr_count($_nome, "P");
        ?>
        
        
    </body>
</html>