<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Curso HTML5 Essencial</title>
        
        <link href="css/estilo.css" rel="stylesheet" media="screen">
    </head>

    <body>
        
        <h2>Formulário</h2>
        <form action="destino.html" method="post">
            
            <input type="text" name="nome" id="nome" size="30" maxlength="100" required autofocus placeholder="Insira seu nome">
            
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" size="30" maxlength="30"> 
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" size="30" maxlength="60" required>             
            
            <label for="website">Web Site</label>
            <input type="url" name="website" id="website" size="30" maxlength="60">             

            <input type="number" name="filhos" id="filhos" min="1" max="5" value="1"/>
            
            <input type="submit" value="Enviar" id="enviar" name="enviar">
        </form>
    
    </body>
</html>