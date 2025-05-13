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
            if (5 != 5) {
                echo 'Verdadeiro';
            } else {
                echo 'Falso';
            }
            // lembrando que podemos usar != para diferente de e <> para diferente de
            if (5 <> 5) {
                echo ' - Verdadeiro';
            } else {
                echo ' - Falso';
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

            if (5 != 4) {
                echo 'Verdadeiro';
                echo ' - Segunda instrução';
                echo ' - Terceira instrução';
            }

            //AND ou ou && - Verifica se todas as condições são verdadeiras.

            //OR ou || - Verifica se pelo menos uma das condições é verdadeira.

            //XOR - Verifica se apenas uma das condições é verdadeira.

            //NOT - Verifica se a condição eh falsa.
        ?>
    </body>
</html>