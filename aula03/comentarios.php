<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Comentários</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #6dd5ed;
            margin-bottom: 30px;
        }

        .output {
            background-color: #112;
            color: #90ee90;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #6dd5ed;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #1e1e1e;
            padding: 2px 6px;
            border-radius: 5px;
            color: #fff176;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Comentários</h1>

        <div class="output">
            <?php
            echo "<h3>Comentários</h3>";

            // Comentário em uma linha
            # Outro comentário em uma linha
            /*
             Comentário de várias linhas
            */
            ?>
            <p>Os comentários não são exibidos no navegador, mas ajudam a documentar o código!</p>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>No PHP, existem três formas principais de escrever comentários:</p>
            <ul>
                <li><code>// Comentário em uma linha</code> — usado frequentemente</li>
                <li><code># Comentário em uma linha</code> — também válido, mais comum em scripts do tipo shell</li>
                <li><code>/* Comentário de várias linhas */</code> — ideal para explicações maiores</li>
            </ul>
            <p>Comentários são ignorados pelo interpretador PHP e servem apenas como anotações no código.</p>
        </div>
    </div>
</body>
</html>
