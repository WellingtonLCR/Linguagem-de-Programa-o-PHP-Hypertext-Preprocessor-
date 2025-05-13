<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterando valores de variáveis</title>
    </head>

    <body>
        <?php
            //String
            $nome = 'Jorge  Sant Ana'; //string
           //Saída: Jorge Sant Ana

            //Inteiro
            $idade = 29;//int
            //Saída: 29

            //Float
            $peso = 82.5;//float
           //Saída: 82.5

            //Boolean
            $fumante_sn = true;//boolean (0 ou 1) ou (false ou true)
           //Saída: false ou true - (true = 1, false = vazio)

            $nome = 'Jorge  Santiago';//string
            $idade = '30';//int
            $peso = 83.5;//float
            $fumante_sn = false;//true ou false
        ?>
        <!--Ficha de cadastro-->
        <h1>Ficha de cadastro</h1>
        <br/>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Idade: <?php echo $idade; ?></p>
        <p>Peso: <?php echo $peso; ?></p>
        <p>Fumante: <?php echo $fumante_sn; ?></p>
    </body>
</html>