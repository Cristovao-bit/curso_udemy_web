<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                echo print_r($_POST);
            ?>
        </pre>
        
        <?php
            /*if (isset($_POST["nome"])){
                $nome = $_POST["nome"]; 
            }else {
                $nome = "Sem definição!";
            }*/
            
            // Simplificando com operador ternario
            /*$nome = isset($_POST["nome"]) ? $nome =$_POST["nome"] : $nome = "Sem definição!";*/
        
            /*if (isset($_POST["email"])){
                $email = $_POST["email"];
            }else {
                $email = "Sem definição!";
            }*/
            
            // Simplificando com operador ternario
            /*$email = isset($_POST["email"]) ? $email = $_POST["email"] : $email = "Sem definição!";*/

            /*echo "Meu nome: " . $nome . "</br>";
            echo "Meu email: " . $email . "</br>";*/
        ?>
    </body>
</html>