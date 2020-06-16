<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso de CSS</title>
        <style>
            html {
                background-image:url(imagens/grid.gif);
            }

            article, aside, section, header, footer, nav {
                display:block;
            }

            article, div, h1, h2, p {
                margin:0;
                padding:0;
            }

            body {
                width:960px;
                margin:0 auto;
                font-family:Arial, Helvetica, sans-serif;
                font-size:10px;
            }

            .em {
                float:left;
                width:520px;
                margin-bottom:50px;
                background-color:rgba(153,102,153,0.5);
            }

            .percentual {
                float:right;
                width:380px;
                background-color:rgba(255,255,204,0.5);
                margin-bottom:50px;
            }

            footer {
                width:960px;
                background-color:rgba(255,204,51,0.8);
                clear:both;
            }

            h1 {
                font-size: 3em;
            }

            h2 {
                font-size: 2em;
            }

            p {
                font-size: 1.5em;
            }

        </style>
    </head>
    <body>
        <article>
            <h1>Como navegadores calcula as unidades</h1>

            <section class="em">
                <h2>Usando ems</h2>
                <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
                <p>Cafe Townsend features a magical combination of excellent cuisine and musical entertainment. The finest pasta, seafood, veal and certified Angus steaks are served to you by the most talented waiters anywhere. Nightly entertainment features favorites from Broadway musical theatre, Grand Opera, and Neapolitan folk songs performed by our talented musical staff. Cafe Townsend offers the largest selection of Italian wines in California, and is the proud recipient of numerous awards from Wine Tasting Magazine. We were selected as one of Southern California Magazine's top 200 restaurants for the last 8 years!  Cafe Townsend restaurant is music to your ears, be it an intimate dinner for 2 or a banquet for up to 200. </p>  
            </section>

            <section class="percentual">
                <h2>Usando Percentual</h2>
                <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
                <p>Cafe Townsend features a magical combination of excellent cuisine and musical entertainment. The finest pasta, seafood, veal and certified Angus steaks are served to you by the most talented waiters anywhere. Nightly entertainment features favorites from Broadway musical theatre, Grand Opera, and Neapolitan folk songs performed by our talented musical staff. Cafe Townsend offers the largest selection of Italian wines in California, and is the proud recipient of numerous awards from Wine Tasting Magazine. We were selected as one of Southern California Magazine's top 200 restaurants for the last 8 years!  Cafe Townsend restaurant is music to your ears, be it an intimate dinner for 2 or a banquet for up to 200. </p>  
            </section>        

            <footer>
                <p>Rodape da pagina de exercicio de CSS</p>
            </footer>    

        </article>
    </body>
</html>