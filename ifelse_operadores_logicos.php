<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Praticando Operdores Lógicos</title>
    </head>

    <body>
        <?php
        //Operadores Lógicos e Comparação
        
        //1.
        //AND ou ou && - Verifica se todas as condições são verdadeiras.
        /*
            Então o operador && retorna verdadeiro se todas expressões forem verdadeiras. 
                Isso significa que ele verifica se todas as condições são verdadeiras.
            
            Verdadeiro && Verdadeiro = Verdadeiro
            Verdadeiro && Falso = Falso
            Falso && Verdadeiro = Falso
            Falso && Falso = Falso
        */
        if (5 == 3 && 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //2.
        //OR ou || - Verifica se pelo menos uma das condições é verdadeira.
        /*
            Então o operador || retorna verdadeiro se pelo menos uma expressão for verdadeira.
            Isso significa que ele verifica se pelo menos uma das condições é verdadeira.
        
            Verdadeiro || Verdadeiro = Verdadeiro
            Verdadeiro || Falso = Verdadeiro
            Falso || Verdadeiro = Verdadeiro
            Falso || Falso = Falso
        */
        if (3 == 4 || 10 > 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //3.
        //XOR - Verifica se apenas uma das condições é verdadeira.
        /*
            Então o operador XOR retorna verdadeiro se uma das expressões for 
            verdadeira e a outra for falsa ou vice-versa.
            Isso significa que ele verifica se apenas uma das condições é verdadeira.

            Verdadeiro XOR Verdadeiro = Falso
            Verdadeiro XOR Falso = Verdadeiro
            Falso XOR Verdadeiro = Verdadeiro
            Falso XOR Falso = Falso
        */
        if (7 >= 4 XOR 10 < 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/><br/>';

        //4.
        //NOT - Verifica se a condição eh falsa.
        /*
            Então o operador NOT retorna o inverso da expressão. 
            Ou seja, ele retorna verdadeiro se a expressão for falsa.

            NOT Verdadeiro = Falso
            NOT Falso = Verdadeiro
        */
        if (!('A' == 'A')) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        //Exemplos de uso
        //() - Estabelecer precedência
        
        echo '<br/><br/>';

        if ((22 == 21 && 3 == 3) || 5 != 5) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        ?>
    </body>
</html>