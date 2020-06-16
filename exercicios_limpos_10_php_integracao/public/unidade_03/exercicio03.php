<?php
    //Passo 1 - Abrir conexão
    $server = "localhost";
    $user = "root";
    $password = "";
    $bancoMySQL = "andes";
    $conecta = mysqli_connect($server, $user, $password, $bancoMySQL);
    
    //Passo 2 - Testar conexão
    if( mysqli_connect_errno() ){
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>

<?php
    //Passo 3 - Abrir uma consulta ao banco de dados
    $consulta_categorias = "SELECT * FROM categorias";
    $categorias = mysqli_query($conecta, $consulta_categorias);
    
    if( !$categorias){
        die("Falha na consulta ao banco de dados...");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            /* while ( $registro = mysqli_fetch_row($categorias) ) {
                print_r($registro);
                echo "</br>";
            }*/
        
            /* while ( $registro = mysqli_fetch_assoc($categorias) ) {
                print_r($registro);
                echo "</br>";
            }*/
            
            while ( $registro = mysqli_fetch_array($categorias) ) {
                print_r($registro);
                echo "</br>";
            }
        
        ?>
    </body>
</html>
<?php
    mysqli_close($conecta);    