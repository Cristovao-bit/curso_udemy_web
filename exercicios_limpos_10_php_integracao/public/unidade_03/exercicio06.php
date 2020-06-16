<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //Primeiro exemplo
            /*include("pagina.php");
            echo "</br>";
            include("pagina2.php");
            echo "</br>";
            include("pagina2.php");*/
        
            //Segundo exemplo
            /*require ("pagina2.php");
            echo "</br>";
            require ("pagina2.php");
            echo "</br>";
            include ("./pagina.php");*/
        
            //Terceiro exemplo
            /*include_once ("pagina2.php");
            echo "</br>";
            include_once ("pagina2.php");*/
        
            //Quarto exemplo
            require ("pagina2.php");
            echo "</br>";
            require_once ("pagina2.php");
        ?>
    </body>
</html>