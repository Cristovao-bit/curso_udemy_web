<?php
    //Passo 1 - Abrir conexão
    $server = "localhost";
    $user = "root";
    $password = "";
    $bancoMySQL = "andes";
    $conecta = mysqli_connect($server, $user, $password, $bancoMySQL);
    
    //Passo 2 - Testar conexão
    if( mysqli_connect_errno() ){
        dei("Conexão falhou: " . mysqli_connect_errno());
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