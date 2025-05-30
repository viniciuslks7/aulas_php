<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário Matriz - Aula 11</title>
        <style>
            /* Fundo em gradiente azul escuro */
            body {
                background: linear-gradient(135deg, #4b6cb7, #182848);
                font-family: Arial, sans-serif;
                color: #fff;
                margin: 0;
                padding: 20px;
            }
            /* Caixa transparente para o formulário */
            form {
                background-color: rgba(255, 255, 255, 0.15);
                border-radius: 10px;
                max-width: 450px;
                margin: auto;
                padding: 20px;
                box-shadow: 0 0 15px rgba(0,0,0,0.3);
            }
            /* Inputs com boa largura e padding */
            input[type=number] {
                width: 100%;
                padding: 8px;
                margin: 6px 0 12px 0;
                border-radius: 5px;
                border: none;
                font-size: 16px;
            }
            /* Botão com efeito hover */
            input[type=submit] {
                background-color: #3a4e8c;
                border: none;
                color: white;
                padding: 10px 15px;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            input[type=submit]:hover {
                background-color: #2c3e6a;
            }
        </style>
    </head>
    <body>
        <form method="get" action="exe02_mostra.php">
            <?php
            // Criando campos para matriz 2 linhas x 4 colunas
            for($linha = 0; $linha <= 1; $linha++){
                for($coluna = 0; $coluna <= 3; $coluna++){
                    echo "<label for='m{$linha}{$coluna}'>Matriz [$linha,$coluna]:</label> ";
                    echo "<input type='number' name='m{$linha}{$coluna}' id='m{$linha}{$coluna}' /> <br/><br/>";
                }
            }
            ?>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
