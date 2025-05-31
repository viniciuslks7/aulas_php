<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../style.css" />
    <meta charset="UTF-8">
    <title>Aula 02 - Hello World</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1c1c1c, #2c3e50);
            color: #f4f4f4;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(8px);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #00d8ff;
        }

        .output {
            background-color: #111;
            color: #0f0;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-left: 5px solid #00d8ff;
            border-radius: 10px;
            line-height: 1.6;
        }

        .explanation strong {
            color: #00d8ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 02 - Hello World</h1>

        <div class="output">
            <?php echo 'Hello World'; ?>
        </div>

        <div class="explanation">
            <p>
                Esse é o exemplo mais simples de um programa em PHP, utilizado para testar o ambiente e garantir que o servidor está interpretando arquivos PHP corretamente.
            </p>
            <p>
                <strong>Explicação:</strong><br>
                O código <code>echo 'Hello World';</code> utiliza a função <code>echo</code> para imprimir o texto "Hello World" na tela. Essa é uma instrução básica em PHP para exibir conteúdo HTML ou texto dinâmico gerado pelo servidor.
            </p>
        </div>
    </div>
</body>
</html>
