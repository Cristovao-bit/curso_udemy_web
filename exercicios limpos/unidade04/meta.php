<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Cristovão Lira Braga"/>
        <meta name="general" content="NetBeans"/>
        <meta name="keywords" content="html5,Curso html, curso frond end, css, javascript"/>
        <meta name="description" content="Página do curso de HTML5"/>
        <meta name="application-name" content="iMedia Brasil"/>
        
        <!--Meta para a página na web ficar atualizando-->
        <meta http-equiv="refresh" content="4"/>
        
        <title>Unidade 2 - Elemento Head</title>
        
        <script>
            function sorteioNumero(){
                resultado.innerHTML = Math.random() * 50;
            }
            
            window.onload = sorteioNumero;
        </script>
    </head>
    <body>
        
        <p id="resultado"></p>
        
    </body>
</html>