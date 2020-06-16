<?php
//Passo 1 - Abrir conexão
$server = "localhost";
$user = "root";
$password = "";
$bancoMySQL = "andes";
$conecta = mysqli_connect($server, $user, $password, $bancoMySQL);

//Passo 2 - Testar conexão
if (mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
}
?>

<?php
//Passo 3 - Abrir uma consulta ao banco de dados
$consulta_categorias = "SELECT nomeproduto FROM produtos";
$categorias = mysqli_query($conecta, $consulta_categorias);

if (!$categorias) {
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
        <ul>
            <?php
            // Passo 4 - Listagem dos dados
            while ($registro = mysqli_fetch_array($categorias)) {
                ?>

                <li><?php echo $registro["nomeproduto"]; ?></li>

                <?php
            }
            ?>
        </ul>
        <?php
            // Passo 5 - Liberar dados da memória
            mysqli_free_result($categorias);
        ?>
    </body>
</html>
<?php
// Psso6 - Fechar conexão
mysqli_close($conecta);
