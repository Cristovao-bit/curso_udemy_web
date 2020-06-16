<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso de CSS</title>
        <style>
            html, body, h1, h2, h3, h4, p {
                margin:0;
                padding:0;
            }

            html {
                background:rgb(229,229,229);
            }

            article, aside, section, header, footer, nav {
                display:block;
            }

            body {
                width:960px;
                background-color:rgb(255,255,255);
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
                box-shadow: 0 0 10px #666;
                margin:10px auto;
                padding:10px;
            }

            header {
                padding:25px;
                background-color:rgb(255,102,51);
                text-align:center;
                margin-bottom:20px;
            }

            header h1 {
                font-size:1.3em;
                color:rgb(255,255,255);
            }

            .janela1 {
                background-color:rgb(153,204,51);
                height:500px;
                width: 600px;
                padding: 20px;
                float: left;
                margin-bottom: 20px;
            }

            .janela2 {
                background-color:rgb(255,204,51);
                height:500px;
                width: 260px;
                float: right;
                padding: 20px;
                margin-bottom: 20px;
            }

            footer {
                padding:5px;
                background-color:rgb(204,153,51);
                text-align:center;
                color:rgb(255,255,255);
                clear: both;
            }
        </style>
    </head>
    <body>
        <main>
            <header>
                <h1>Curso CSS3 - Unidade 06 - Exercicio 08 - Versao 3</h1>
            </header>

            <section class="janela1">Coluna um</section>
            <section class="janela2">Coluna dois</section>

            <footer>Endereco, telefone e outras informacoes</footer>
        </main>
    </body>
</html>