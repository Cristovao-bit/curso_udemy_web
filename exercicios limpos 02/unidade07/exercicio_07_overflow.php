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

            article, aside, section, header, footer, nav {
                display:block;
            }

            body {
                background:rgb(254,255,216);
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
            }

            #principal {
                background-color:rgb(255,255,255);
                width:660px;
                box-shadow: 0 0 10px #666;
                margin:10px auto;
                padding:10px;
            }

            #conteudo {
                background-color:rgb(240,240,240);
                border:1px dotted #666666;
                margin-top:20px;
                position:relative;
                height:450px;
            }

            section {
                width:200px;
            }

            .janela1 {
                background-color:rgb(153,204,51);
                padding:10px;
                position:absolute;
                top:50px;
                left:50px;
                height: 300px;
                overflow: auto;
            }
        </style>
    </head>
    <body>
        <div id="principal">
            <h1>Aula de Overflow</h1>

            <div id="conteudo">
                <section class="janela1">
                    <p>A propriedade overflow especifica quando o conteúdo de um elemento de nível de bloco deve ser cortado, mostrado com barras de rolagem ou mostrados vazando fora do elemento.</p>
                    <p>O uso da propriedade overflow com valor diferente de visible, que é seu valor padrão, criará um novo <a href="https://developer.mozilla.org/en-US/docs/CSS/block_formatting_context" title="CSS/block_formatting_context">contexto de formatação de bloco</a>. Isto é tecnicamente necessário para evitar que um conteúdo flutuante que entre em contato com o objeto dentro da area de rolamento quebre as linhas do conteúdo para ajustar a disposição do texto. A quebra das linhas teria que ocorrer toda vez que a barra de rolagem fosse utilizada, tornando este procedimento muito lento. Note que ao definir a propredade scrollTop para o elemento HTML relevante, ainda que o valor de overflow fosse hidden o conteúdo poderia precisar ser movido.</p>
                </section>
            </div>
        </div>
    </body>
</html>
