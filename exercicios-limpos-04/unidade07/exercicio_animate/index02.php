<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Exercicio 02 -jQuery .animate()</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="jquery-3.3.1.min.js"></script>
        <script>
            function moverObjetoLeft(e) {
                $("#janela02").animate({left: "+=50"}, "slow");
            };
            
            function moverObjetoRight(e){
                $("#janela02").animate({left: "-=50"}, "slow");
            };

            $(function (e) {
                $("#right").click(moverObjetoLeft);
            });
            
            $(function(e){
                $("#left").click(moverObjetoRight);
            });
            
        </script>
    </head>
    <body>
        <button class="btn" id="left">&laquo;</button>
        <button class="btn" id="right">&raquo;</button>

        <div class="janela" id="janela02"></div>
    </body>
</html>
