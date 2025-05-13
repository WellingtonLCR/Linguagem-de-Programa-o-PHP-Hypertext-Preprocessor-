<html>
    <head>
        <meta charset="UTF-8">
        <title>Concatenação</title>
    </head>

    <body>
        <?php
            //variaveis
            $nome = "Maria";
            $cor = "Amarelo";
            $idade = 25;
            $atividade_preferida = "jogar videogame";

            //operador . (concatenação)
            echo 'Olá '.$nome.','; 
            echo ' vi que sua cor preferida é '.$cor.',';
            echo ' possui '.$idade.' anos ';
            echo ' e que gosta de '.$atividade_preferida.'.'; 

            //Aspas duplas
            echo "<br/>";
            echo "Olá, $nome, vi que sua cor preferida é $cor, possui 
            $idade anos e que gosta de $atividade_preferida.";
        ?>
    </body>
</html>