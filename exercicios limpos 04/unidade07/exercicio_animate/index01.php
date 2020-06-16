<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Exercico 01 - jQuery .animate()</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="jquery-3.3.1.min.js"></script>
        <script>
            function moverObjeto(e){
                $("#janela01").animate({opacity: "0.25", left: "50", height: "toggle"}, 1000, function(){
                    alert("Animação executado com sucesso!");
                });
            };
            
            $(function(e){
                $("#animate").click(moverObjeto);
            });
        </script>
    </head>
    <body>
        
        <button class="btn" id="animate">Animação</button>
        
        <div class="janela" id="janela01"></div>
        
    </body>
</html>
