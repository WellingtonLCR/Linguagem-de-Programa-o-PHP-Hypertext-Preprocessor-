<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Lógicos e Comparação</title>
    </head>

    <body>
        <?php
            echo "<!DOCTYPE html>";
            echo "<html lang='pt-BR'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Operadores Lógicos e de Comparação</title>";
            echo "<style>";
            echo "body { font-family: sans-serif; line-height: 1.6; padding: 20px; background-color: #f4f4f4; color: #333; }";
            echo "h3 { color: #0056b3; border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-top: 30px; }";
            echo "code { background-color: #eee; padding: 2px 4px; border-radius: 4px; }";
            echo "hr { border: 0; height: 1px; background: #ddd; margin: 20px 0; }";
            echo ".code-block { background-color: #f9f9f9; border: 1px solid #ddd; padding: 10px; border-radius: 4px; margin-bottom: 10px; }";
            echo ".code-block p { margin: 5px 0; }";
            echo "</style>";
            echo "</head>";
            echo "<body>";
            echo "<h1>Exemplos de Operadores Lógicos e de Comparação em PHP</h1>";
            echo "<p>Este script demonstra o uso de diversos operadores em PHP, com explicações detalhadas sobre cada um e os resultados das comparações. Altere os valores das variáveis comentadas como 'Valor para teste' para observar diferentes comportamentos.</p>";

            // Operadores de Comparação servem para comparar valores, retornando verdadeiro ou falso.
            
            // 1. Operador de Igualdade (==): Compara se os valores são iguais, realizando conversão de tipo se necessário.
            echo "<h3>1. Demonstração do Operador de Igualdade (<code>==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a variável <code>\$nome_1</code> é igual a 'João' <strong>E</strong> se a variável <code>\$idade_1</code> é igual a 20.</p>";
            
            $nome_original_1 = 'João';
            $idade_original_1 = 20; // Valor para teste. Experimente alterar para ver diferentes resultados.
            $nome_1 = $nome_original_1;
            $idade_1 = $idade_original_1;

            echo "<p>Valores atuais: <code>\$nome_1 = '$nome_1'</code>, <code>\$idade_1 = $idade_1</code>.</p>";
            echo "<p>Condição testada: <code>(\$nome_1 == 'João' && \$idade_1 == 20)</code></p>";
            
            if ($nome_1 == 'João' && $idade_1 == 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_1 realmente é 'João' e tem $idade_1 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. A condição não foi satisfeita. Verifique os valores de <code>\$nome_1</code> (<code>'$nome_1'</code>) e <code>\$idade_1</code> (<code>$idade_1</code>).</p>";
            }

            echo "</div><hr/>";

            // 2. Operador de Identidade (===): Compara se os valores E os tipos são idênticos, sem conversão de tipo.
            echo "<h3>2. Demonstração do Operador de Identidade (<code>===</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se <code>\$nome_2</code> é idêntico a 'João' (mesmo valor e tipo) <strong>E</strong> se <code>\$idade_2</code> é idêntica a 20 (inteiro).</p>";
            
            $nome_original_2 = 'João';
            $idade_original_2 = 21; // Valor para teste. Experimente alterar para 20 (int) ou '20' (string) para ver os resultados.
            
            // $idade_original_2 = '20'; // Exemplo com string para ver a diferença com ===
            
            $nome_2 = $nome_original_2;
            $idade_2 = $idade_original_2;
            
            echo "<p>Valores atuais: <code>\$nome_2 = '$nome_2'</code> (tipo: " . gettype($nome_2) . "), <code>\$idade_2 = " . var_export($idade_2, true) . "</code> (tipo: " . gettype($idade_2) . ").</p>";
            echo "<p>Condição testada: <code>(\$nome_2 === 'João' && \$idade_2 === 20)</code>. Note que 20 aqui é um inteiro.</p>";
            
            if ($nome_2 === 'João' && $idade_2 === 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_2 é idêntico a 'João' e $idade_2 é idêntico a 20 (valor e tipo).</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. A condição de identidade não foi satisfeita. <br/>";
                echo "<code>\$nome_2 === 'João'</code> é " . var_export($nome_2 === 'João', true) . ".<br/>";
                echo "<code>\$idade_2 === 20</code> (20 como inteiro) é " . var_export($idade_2 === 20, true) . ". ";
                echo "Lembre-se que <code>===</code> compara valor E tipo.</p>";
            }

            echo "</div><hr/>";

            // 3. Operador de Diferença (!= ou <>): Compara se os valores são diferentes, realizando conversão de tipo.
            echo "<h3>3. Demonstração do Operador de Diferença (<code>!=</code> ou <code>&lt;&gt;</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se <code>\$nome_3</code> é diferente de 'João' <strong>E</strong> se <code>\$idade_3</code> é diferente de 20.</p>";
            
            $nome_original_3 = 'João';
            $idade_original_3 = 21; // Valor para teste.
            $nome_3 = $nome_original_3;
            $idade_3 = $idade_original_3;
            
            echo "<p>Valores atuais: <code>\$nome_3 = '$nome_3'</code>, <code>\$idade_3 = $idade_3</code>.</p>";
            echo "<p>Condição testada: <code>(\$nome_3 != 'João' && \$idade_3 != 20)</code></p>";
            
            if ($nome_3 != 'João' && $idade_3 != 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_3 é diferente de 'João' (<code>\$nome_3 != 'João'</code> é " . var_export($nome_3 != 'João', true) . ") <strong>E</strong> $idade_3 é diferente de 20 (<code>\$idade_3 != 20</code> é " . var_export($idade_3 != 20, true) . ").</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. A condição completa (ambas as partes serem verdadeiras) não foi satisfeita. <br/>";
                echo "Isso significa que: OU <code>\$nome_3</code> é igual a 'João' (<code>\$nome_3 == 'João'</code> é " . var_export($nome_3 == 'João', true) . ") <br/>";
                echo "OU <code>\$idade_3</code> é igual a 20 (<code>\$idade_3 == 20</code> é " . var_export($idade_3 == 20, true) . ").</p>";
            }
            echo "</div><hr/>";

            // 4. Operador de Não Identidade (!==): Compara se os valores OU os tipos são diferentes.
            echo "<h3>4. Demonstração do Operador de Não Identidade (<code>!==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se <code>\$nome_4</code> não é idêntico a 'João' <strong>E</strong> se <code>\$idade_4</code> não é idêntica a 20 (inteiro).</p>";
            
            $nome_original_4 = 'João';
            $idade_original_4 = 20; // Valor para teste. Experimente com '20' (string) para $idade_4.
            
            // $idade_original_4 = '20';
            
            $nome_4 = $nome_original_4;
            $idade_4 = $idade_original_4;
            
            echo "<p>Valores atuais: <code>\$nome_4 = '$nome_4'</code> (tipo: " . gettype($nome_4) . "), <code>\$idade_4 = " . var_export($idade_4, true) . "</code> (tipo: " . gettype($idade_4) . ").</p>";
            echo "<p>Condição testada: <code>(\$nome_4 !== 'João' && \$idade_4 !== 20)</code>. Note que 20 aqui é um inteiro.</p>";
            
            if ($nome_4 !== 'João' && $idade_4 !== 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. <br/>";
                echo "<code>\$nome_4 !== 'João'</code> é " . var_export($nome_4 !== 'João', true) . ".<br/>";
                echo "<strong>E</strong> <code>\$idade_4 !== 20</code> (20 como inteiro) é " . var_export($idade_4 !== 20, true) . ".</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. A condição completa (ambas as partes serem verdadeiras) não foi satisfeita. <br/>";
                echo "Isso significa que: OU <code>\$nome_4</code> é idêntico a 'João' (<code>\$nome_4 === 'João'</code> é " . var_export($nome_4 === 'João', true) . ") <br/>";
                echo "OU <code>\$idade_4</code> é idêntica a 20 (<code>\$idade_4 === 20</code> é " . var_export($idade_4 === 20, true) . ").</p>";
            }
            echo "    </div><hr/>";

            // 5. Operador Maior Que (>): Verifica se o valor da esquerda é estritamente maior que o da direita.
            echo "<h3>5. Demonstração do Operador Maior Que (<code>&gt;</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a <code>\$idade_5</code> é maior que 20.</p>";

            $nome_contexto_5 = 'A pessoa'; // Nome usado para contextualizar a mensagem.
            $idade_original_5 = 20; // Valor para teste. Experimente 21 ou 19.
            $idade_5 = $idade_original_5;

            echo "<p>Valor atual: <code>\$idade_5 = $idade_5</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_5 > 20)</code></p>";

            if ($idade_5 > 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_5, com $idade_5 anos, é maior que 20 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_5, com $idade_5 anos, não é maior que 20 anos (é menor ou igual).</p>";
            }
            echo "</div><hr/>";

            // 6. Operador Menor Que (<): Verifica se o valor da esquerda é estritamente menor que o da direita.
            echo "<h3>6. Demonstração do Operador Menor Que (<code>&lt;</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a <code>\$idade_6</code> é menor que 20.</p>";
            
            $nome_contexto_6 = 'A pessoa';
            $idade_original_6 = 18; // Valor para teste. Experimente 19 ou 20.
            $idade_6 = $idade_original_6;
            
            echo "<p>Valor atual: <code>\$idade_6 = $idade_6</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_6 < 20)</code></p>";
            
            if ($idade_6 < 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_6, com $idade_6 anos, é menor que 20 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_6, com $idade_6 anos, não é menor que 20 anos (é maior ou igual).</p>";
            }

            echo "</div><hr/>";

            // 7. Operador Maior Ou Igual Que (>=): Verifica se o valor da esquerda é maior ou igual ao da direita.
            echo "<h3>7. Demonstração do Operador Maior Ou Igual Que (<code>&gt;=</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a <code>\$idade_7</code> é maior ou igual a 20.</p>";
            
            $nome_contexto_7 = 'A pessoa';
            $idade_original_7 = 21; // Valor para teste. Experimente 20 ou 19.
            $idade_7 = $idade_original_7;
            
            echo "<p>Valor atual: <code>\$idade_7 = $idade_7</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_7 >= 20)</code></p>";
            
            if ($idade_7 >= 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_7, com $idade_7 anos, tem 20 anos ou mais.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_7, com $idade_7 anos, é menor que 20 anos.</p>";
            }

            echo "</div><hr/>";

            // 8. Operador Menor Ou Igual Que (<=): Verifica se o valor da esquerda é menor ou igual ao da direita.
            echo "<h3>8. Demonstração do Operador Menor Ou Igual Que (<code>&lt;=</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a <code>\$idade_8</code> é menor ou igual a 20.</p>";
            
            $nome_contexto_8 = 'A pessoa';
            $idade_original_8 = 18; // Valor para teste. Experimente 20 ou 21.
            $idade_8 = $idade_original_8;
            
            echo "<p>Valor atual: <code>\$idade_8 = $idade_8</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_8 <= 20)</code></p>";
            
            if ($idade_8 <= 20) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_8, com $idade_8 anos, é menor ou igual a 20 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_8, com $idade_8 anos, é maior que 20 anos.</p>";
            }
            echo "</div><hr/>";

            // 9. Operador de Diferença (<> ou !=): Verifica se os valores são diferentes. O operador <> é um sinônimo de !=.
            echo "<h3>9. Demonstração do Operador de Diferença (<code>!=</code> ou <code>&lt;&gt;</code>) - Exemplo específico</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a <code>\$idade_9</code> é diferente de 18, usando o operador <code>!=</code>.</p>";
            
            $nome_contexto_9 = 'A pessoa';
            $idade_original_9 = 18; // Valor para teste. Experimente 19.
            $idade_9 = $idade_original_9;
            
            echo "<p>Valor atual: <code>\$idade_9 = $idade_9</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_9 != 18)</code></p>";
            
            if ($idade_9 != 18) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_9, com $idade_9 anos, não tem 18 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_9, com $idade_9 anos, tem 18 anos.</p>";
            }
            
            echo "</div><hr/>";

            // 10. Estrutura Condicional if/else: Demonstração de verificação de maioridade.
            echo "<h3>10. Demonstração da Estrutura Condicional <code>if/else</code> (Maioridade)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se uma pessoa é maior de idade (idade >= 18).</p>";
            $idade_maioridade_10 = 20; // Valor para teste. Experimente 17.
            echo "<p>Valor atual para verificação de maioridade: <code>\$idade_maioridade_10 = $idade_maioridade_10</code>.</p>";
            echo "<p>Condição testada: <code>(\$idade_maioridade_10 >= 18)</code></p>";
            if ($idade_maioridade_10 >= 18) {
                echo "<p><strong>Resultado:</strong> Você é MAIOR de idade, pois tem $idade_maioridade_10 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Você é MENOR de idade, pois tem $idade_maioridade_10 anos.</p>";
            }

            echo "</div><hr/>";

            // Operadores lógicos servem para conectar operações de comparação criando uma condição mais complexas
            // Exemplos: AND ou ou &&, OR ou ||, XOR, NOT
            
            //AND ou ou && - Verifica se todas as condições são verdadeiras.
            echo "</div><hr/>";
            echo "<h3>1. Demonstração do Operador AND ou <code>&&</code> (<code>==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se todas as condições abaixo são verdadeiras.</p>";
            
            $idade_11 = 25; // Valor para teste. Experimente 20 ou 21.
            $nome_contexto_11 = 'A pessoa';
            
            echo "<p>Valor atual: <code>\$idade_11 = $idade_11</code>.</p>";
            echo "Condição 1: <code>(\$idade_11 >= 18)</code> Condição 2: <code>(\$idade_11 >= 21)</code> Condição 3: <code>(\$idade_11 >= 25)</code>";
            
            if ($idade_11 >= 18 && $idade_11 >= 21 && $idade_11 >= 25) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_11, com $idade_11 anos, tem 18 anos, 21 anos e 25 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_11, com $idade_11 anos, tem 18 anos, 21 anos ou 25 anos.</p>";
            }

            echo "</div><hr/>";

            //OR ou || - Verifica se pelo menos uma das condições é verdadeira.
            echo "</div><hr/>";
            echo "<h3>2. Demonstração do Operador OR ou <code>||</code> (<code>==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se pelo menos uma das condições abaixo é verdadeira.</p>";
            
            $idade_12 = 25; // Valor para teste. Experimente 20 ou 21.
            $nome_contexto_12 = 'A pessoa';
            
            echo "<p>Valor atual: <code>\$idade_12 = $idade_12</code>.</p>";
            echo "Condição 1: <code>(\$idade_12 >= 18)</code> Condição 2: <code>(\$idade_12 >= 21)</code> Condição 3: <code>(\$idade_12 >= 25)</code>";
            if ($idade_12 >= 18 || $idade_12 >= 21 || $idade_12 >= 25) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_12, com $idade_12 anos, tem 18 anos, 21 anos ou 25 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_12, com $idade_12 anos, tem 18 anos, 21 anos ou 25 anos.</p>";
            }

            echo "</div><hr/>";

            //XOR - Verifica se apenas uma das condições é verdadeira.
            echo "</div><hr/>";
            echo " <h3>3. Demonstração do Operador XOR (<code>==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se apenas uma das condições abaixo é verdadeira.</p>";
            
            $idade_13 = 25; // Valor para teste. Experimente 20 ou 21.
            $nome_contexto_13 = 'A pessoa';
            
            echo "<p>Valor atual: <code>\$idade_13 = $idade_13</code>.</p>";
            echo "Condição 1: <code>(\$idade_13 >= 18)</code> Condição 2: <code>(\$idade_13 >= 21)</code> Condição 3: <code>(\$idade_13 >= 25)</code>";
            
            if ($idade_13 >= 18 ^ $idade_13 >= 21 ^ $idade_13 >= 25) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_13, com $idade_13 anos, tem 18 anos, 21 anos ou 25 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_13, com $idade_13 anos, tem 18 anos, 21 anos ou 25 anos.</p>";
            }

            echo "</div><hr/>";

            //NOT - Verifica se a condição eh falsa.
            echo "</div><hr/>";
            echo "    <h3>4. Demonstração do Operador NOT (<code>==</code>)</h3>";
            echo "<div class='code-block'>";
            echo "<p>Este bloco verifica se a condição abaixo é falsa.</p>";
            $idade_14 = 25; // Valor para teste. Experimente 20 ou 21.
            $nome_contexto_14 = 'A pessoa';
            echo "<p>Valor atual: <code>\$idade_14 = $idade_14</code>.</p>";
            echo "Condição: <code>(\$idade_14 >= 18)</code>";
            if (!$idade_14 >= 18) {
                echo "<p><strong>Resultado:</strong> Verdadeiro. $nome_contexto_14, com $idade_14 anos, tem 18 anos.</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Falso. $nome_contexto_14, com $idade_14 anos, tem 18 anos.</p>";
            }

            // Operadores lógicos servem para conectar operações de comparação criando uma condição mais complexas
            // Exemplos: AND ou ou &&, OR ou ||, XOR, NOT

            //AND ou ou && - Verifica se todas as condições são verdadeiras.

            //OR ou || - Verifica se pelo menos uma das condições é verdadeira.

            //XOR - Verifica se apenas uma das condições é verdadeira.

            //NOT - Verifica se a condição eh falsa.

            echo "    </div><hr/>"; 

            echo "</body>";
            echo "</html>";
            ?>
    </body>
</html>