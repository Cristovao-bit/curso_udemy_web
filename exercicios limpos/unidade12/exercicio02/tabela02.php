<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Curso HTML5 Essencial</title>
    </head>

    <style>
        body {
            font-family:Arial, Helvetica, sans-serif;
        }

        table { 
            width:700px;
            margin:0 auto;
            border-spacing:0;
            border-right:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }

        caption {
            font-size:130%;
            font-weight:bold;
            padding:5px 0;
            background-color:#ECECEC;
            border:1px solid #ccc;
            border-bottom:none;
        }

        tr, td, th {
            border:thin solid #ccc;
            border-bottom:none;
            border-right:none;
            padding:5px;
        }

        td { 
            text-align:center;
        }

        th {
            text-align:left;
        }

        thead th {
            text-align:center;
            background-color:#E0E0E0;
        }

        thead tr th:first-child {
            text-align:left;
        }

        tfoot td {
            font-size:.9em;
            color:#666;
        }
        
        /*odd: com cores pares e even: com cores impares*/
        tbody tr:nth-child(odd){
            background-color: beige;
        }
        
        tbody tr:nth-child(even){
            background-color: antiquewhite;
        }

    </style>

    <body>

        <table>

            <table>
                <caption>Olimpiadas do Rio de Janeiro 2018</caption>
                <thead>
                    <tr>
                        <td></td>
                        <td>Ouro</td>
                        <td>Prata</td>
                        <td>Bronze</td>
                        <td>Total</td>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <td></td>
                        <td>Ouro</td>
                        <td>Prata</td>
                        <td>Bronze</td>
                        <td>Total</td>
                    </tr>
                </tfoot>

                <tbody>
                    <tr>
                        <td>Brasil</td>
                        <td>100</td>
                        <td>130</td>
                        <td>200</td>
                        <td>430</td>
                    </tr>

                    <tr>
                        <td>USA</td>
                        <td>90</td>
                        <td>110</td>
                        <td>210</td>
                        <td>420</td>
                    </tr>


                    <tr>
                        <td>China</td>
                        <td>89</td>
                        <td>100</td>
                        <td>100</td>
                        <td>289</td>
                    </tr>
                    
                    <tr>
                        <td>Inglaterra</td>
                        <td>89</td>
                        <td>100</td>
                        <td>100</td>
                        <td>289</td>
                    </tr>
                    
                    <tr>
                        <td>França</td>
                        <td>89</td>
                        <td>100</td>
                        <td>100</td>
                        <td>289</td>
                    </tr>
                </tbody>
            </table>

        </table>

    </body>
</html>
