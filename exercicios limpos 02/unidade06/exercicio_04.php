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

            html {
                background:rgb(229,229,229);
            }

            article, aside, section, header, footer, nav {
                display:block;
            }

            main {
                width:600px;
                background-color:rgb(255,255,255);
                margin:2em auto 2em;
            }

            div {
                margin-bottom:1em;
                width:200px;
                height:100px;
            }

            .janela1 {
                background-color:rgb(0,153,204);
                float: left;
            }

            .janela2 {
                background-color:rgb(255,204,51);
                float: left;
            }

            .janela3 {
                background-color:rgb(153,204,51);
                float: left;
            }
        </style>
    </head>
    <body>
        <main>
            <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
            <p>Cafe Townsend features a magical combination of excellent cuisine and musical entertainment. The finest pasta, seafood, veal and certified Angus steaks are served to you by the most talented waiters anywhere. Nightly entertainment features favorites from Broadway musical theatre, Grand Opera, and Neapolitan folk songs performed by our talented musical staff. Cafe Townsend offers the largest selection of Italian wines in California, and is the proud recipient of numerous awards from Wine Tasting Magazine. We were selected as one of Southern California Magazine's top 200 restaurants for the last 8 years!  Cafe Townsend restaurant is music to your ears, be it an intimate dinner for 2 or a banquet for up to 200. </p>  

            <div class="janela1"></div>
            <div class="janela2"></div>
            <div class="janela3"></div>
        </main>
    </body>
</html>