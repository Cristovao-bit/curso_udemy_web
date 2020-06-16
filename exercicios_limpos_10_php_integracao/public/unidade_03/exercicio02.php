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
    $consulta_categorias = "SELECT * FROM categorias WHERE categoriaID > 2";
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
        
    </body>
</html>
<?php
    mysqli_close($conecta);    