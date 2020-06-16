<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso de CSS</title>
        <style>
            html, body {
                margin:0;
                padding:0;
            }

            body {
                background:rgb(229,229,229);
            }

            article, aside, section, header, footer, nav {
                display:block;
            }

            main {
                width:600px;
                background-color:rgb(255,255,255);
                margin:0 auto;
            }

            div {
                width:50px;
                height:50px;
                padding:50px;
                float: left;
            }

            section {
                background-color:rgb(204,204,204);
                border:1px solid rgb(0,0,0);
                padding:10px;
                overflow: hidden;
            }

            .janela1 {
                background-color:rgb(0,153,204);
            }

            .janela2 {
                background-color:rgba(255,204,51,0.8);
            }

            .janela3 {
                background-color:rgb(153,204,51);
            }
        </style>
    </head>
    <body>
        <main>
            <section>
                <div class="janela1">AZUL</div>
                <div class="janela2">AMARELO</div>
                <div class="janela3">VERDE</div>
            </section>    
        </main>
    </body>
</html>
