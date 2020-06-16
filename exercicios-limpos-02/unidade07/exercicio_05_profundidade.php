<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso de CSS</title>
        <style>
            html, body , h1 {
                margin:0;
                padding:0;
            }

            html {
                background:rgb(254,255,216);
            }

            article, aside, section, header, footer, nav {
                display:block;
            }

            main {
                width:660px;
                background-color:rgb(255,255,255);
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
                box-shadow: 0 0 10px #666;
                margin:10px auto;
                padding:10px;
                position: relative;
                height: 500px;
            }

            #principal {
                background-color:rgb(240,240,240);
                border:1px dotted #666666;
                margin-top:20px;
                position: relative;
            }

            section {
                height:100px;width:100px;padding:10px;
            }

            .janela1 {
                background-color:rgb(153,204,51);
                position:absolute;
                top:10px;left:10px;
                z-index: 1;
            }

            .janela2 {
                background-color:rgb(255,204,51);
                position:absolute;
                top:40px;left:40px;
                z-index: 2;
            }

            .janela3 {
                background-color:rgb(51,153,204);
                position:absolute;
                top:70px;left:70px;
                z-index: 5;
            }
            
            .janela4 {
                background-color: rgb(255,0,0);
                position: absolute;
                top: 100px;left: 100px;
                z-index: 3;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Exercícios de Posicionamento</h1>

            <p>The CSS specification offers us five positionproperties: <strong>static, relative, absolute, fixed, and inherit</strong>.</p>
            <p>Each property serves a specific purpose. Understanding that purpose is the key to mastering CSS-based layouts.</p>

            <div id="principal">
              <section class="janela1">Verde</section>
              <section class="janela2">Amarelo</section>
              <section class="janela3">Azul</section>
              <section class="janela4">Vermelho</section>
            </div>
        </main>
    </body>
</html>