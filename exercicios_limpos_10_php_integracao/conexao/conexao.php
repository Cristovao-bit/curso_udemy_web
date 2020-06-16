<?php
    // Passo 1 - Abrir conexao
    $server = "localhost";
    $user = "root";
    $password = "";
    $bancoMySQL = "andes";
    $conecta = mysqli_connect($server, $user, $password, $bancoMySQL);
    
    // Passo 2 - Testar conexão
    if(mysqli_connect_errno()){
        die("Falha na conexão: ");
    }
?>