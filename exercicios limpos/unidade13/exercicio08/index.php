<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso HTML5 Essencial</title>
    </head>
    <body>
        <form action="index.html" method="post">
            
            <input type="text" list="lojas" name="nome_loja" id="nome_loja" placeholder="Digite o nome da loja" size="40"/>
            
            <datalist id="lojas">
                <option value="Centauro">Centauro</option>
                <option value="Centro Automotivo">Centro Automotivo</option>
                <option value="Centro Otico">Centro Otico</option>
                <option value="Centro de Beleza">Centro de Beleza</option>
                <option value="Magazine Luiza">Magazine Luiza</option>
                <option value="McDonalds">McDonlads</option>
            </datalist>
            
        </form>
    </body>
</html>
