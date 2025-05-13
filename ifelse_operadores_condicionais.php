<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Praticando Operdores de Comparação</title>
    </head>

    <body>
        <?php
        //1
        if (3 == 2) {
            echo ' Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //2
        if (3 === '2') {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //3
        if ('x' != 'x') {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        //lembrando que podemos usar != para diferente de e <> para diferente de
        if ('x' <> 'x') {
            echo 'Verdadeiro';
        } else {
            echo ' Falso';
        }

        echo '<br/><br/>';

        //4
        if (5 !== 5) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //5
        if (18 < 18) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //6
        if (18 > 18) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //7
        if (25 <= 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //8
        if (-18 >= 25) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        if ('a' != 'b') {
            echo 'Verdadeiro';
            echo ' - Segunda instrução';
            echo ' - Terceira instrução';
        }
        ?>
    </body>
</html>