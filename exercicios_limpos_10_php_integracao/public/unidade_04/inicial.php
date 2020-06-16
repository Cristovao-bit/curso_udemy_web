<?php require_once("../../conexao/conexao.php"); ?>

<?php
// Determinar localidade BR
setlocale(LC_ALL, 'pt_br');

//Consulta ao banco de dados
$produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
$produtos .= "FROM produtos ";
$resultado = mysqli_query($conecta, $produtos);

if (!$resultado) {
    die("Falha na consulta ao banco de dados: ");
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet"/>
        <link rel="stylesheet" href="_css/produtos.css"/>
    </head>

    <body>
        <?php include_once("_incluir/header.php"); ?>

        <main>
            <div class="listagem_produtos">
                <?php
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <ul>
                        <li class="imagem"><img src="<?php echo $linha["imagempequena"]; ?>"/></li>
                        <li><h3> <?php echo $linha["nomeproduto"]; ?> </h3></li>
                        <li>Tempo entrega: <?php echo $linha["tempoentrega"]; ?></li>
                        <li>Pre&ccedil;o unit&aacute;rio: <?php echo $linha["precounitario"] . " reais"; ?></li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </main>

        <?php include_once("_incluir/footer.php"); ?>
    </body>
</html>

<?php
// Fechar conexao
mysqli_close($conecta);
?>