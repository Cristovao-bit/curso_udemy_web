<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso HTML5 Essencial</title>
        
        <script>
        
            function mostrarResultado(){
                
                document.getElementById("resultados").innerHTML = document.getElementById("filhos").value;
                
            }
        
        </script>
    </head>
    <body>
        <form action="index.html" method="post">

            <input type="range" id="filhos" min="1" max="10" value="1" onchange="mostrarResultado()"/>
            <span id="resultados"></span>
            
            
        </form>
    </body>
</html>
