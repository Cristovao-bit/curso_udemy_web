<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $data1 = new DateTime('1992-05-27');
            $data2 = new DateTime('2018-10-25');
            $intervalo = $data1->diff($data2);
        ?>
        
        <pre>
            <?php
                print_r($intervalo);
            ?>
        </pre>
        
        <pre>
            <?php
                print_r($intervalo->format('%y') . " anos");
            ?>
        </pre>
    </body>
</html>