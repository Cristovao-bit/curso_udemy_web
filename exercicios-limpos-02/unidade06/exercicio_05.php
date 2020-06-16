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
                margin:2em auto;
            }

            div {
                margin-bottom:1em;
                margin-right:2em;
                width:150px;
                height:50px;
                padding:25px;
                font-size:12px;
            }

            .janela1 {
                background-color:rgb(0,153,204);
                float: right;
                width: 50px;
                height: 250px;
            }

            .janela2 {
                background-color:rgb(255,204,51);
                float: left;
                width: 50px;
                height: 250px;
            }

            .janela3 {
                background-color:rgb(153,204,51);
                clear: both;
            }

            .janela4 {
                background-color:rgb(255,102,51);
            }

            .janela5 {
                background-color:rgb(153,51,204);
            }

            .janela6 {
                background-color:rgb(255,102,255);
            }
        </style>
    </head>
    <body>
        <main>
            <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
            <p>Cafe Townsend features a magical combination of excellent cuisine and musical entertainment. The finest pasta, seafood, veal and certified Angus steaks are served to you by the most talented waiters anywhere. Nightly entertainment features favorites from Broadway musical theatre, Grand Opera, and Neapolitan folk songs performed by our talented musical staff. Cafe Townsend offers the largest selection of Italian wines in California, and is the proud recipient of numerous awards from Wine Tasting Magazine. We were selected as one of Southern California Magazine's top 200 restaurants for the last 8 years!  Cafe Townsend restaurant is music to your ears, be it an intimate dinner for 2 or a banquet for up to 200. </p>  

            <div class="janela1">AZUL</div>
            <div class="janela2">AMARELO</div>
            <div class="janela3">VERDE</div>
            <div class="janela4">LARANJA</div>
            <div class="janela5">ROXO</div>
            <div class="janela6">ROSA</div>        
        </main>
    </body>
</html>
