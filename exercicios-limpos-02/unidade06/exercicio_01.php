<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>Curso de CSS</title>
        <style type="text/css">
            html {
                background-color:#EFEFEF;
            }
            
            body{
                margin: 0;
            }

            #principal {
                width:730px;
                margin:0 auto;
                background-color:#9C3;
                padding: 10px;
            }
            
            #principal:after{
                content: "";
                display: table;
                clear: both;
            }

            .janela {
                float: left;
                width:350px;
                background: #FC3;
                padding: 5px;
                margin-right: 5px;
            }

            p {
                margin:0;
            }
            
            /*.clear{clear: both;}*/
        </style>
    </head>
    <body>
        <div id="principal">
            <div class="janela">
                <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
            </div>
            <div class="janela">
                <p>Cafe Townsend's visionary chef leads the way in a culinary revolution. Proclaimed by many to be the best chef in the world today, Chef Bienni blends earthy seasonal flavors and bold ingredients to create exquisite contemporary cuisine. </p>    
            </div>
            <!--<div class="clear"></div>-->
        </div>
    </body>
</html>
