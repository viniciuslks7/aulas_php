<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
        <link rel="stylesheet" href="../nbproject/style.css" />
        <meta charset="UTF-8">
        <title>Formulário Vetor - Aula 11</title>
        <style>
            /* Estilo do fundo com gradiente */
            body {
                background: linear-gradient(135deg, #4b6cb7, #182848);
                font-family: Arial, sans-serif;
                color: #fff;
                margin: 0;
                padding: 20px;
            }
            /* Caixa transparente com borda arredondada */
            form {
                background-color: rgba(255, 255, 255, 0.15);
                padding: 20px;
                border-radius: 10px;
                max-width: 400px;
                margin: auto;
                box-shadow: 0 0 15px rgba(0,0,0,0.3);
            }
            input[type=number] {
                width: 100%;
                padding: 8px;
                margin: 6px 0 12px 0;
                border-radius: 5px;
                border: none;
                font-size: 16px;
            }
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
        <form method="get" action="exe01_mostra.php">
            <?php
            // Cria campos de input para os 5 valores do vetor (índices 0 a 4)
            for ($c = 0; $c <= 4; $c++){
                echo "<label for='v$c'>Vetor [$c]:</label> ";
                echo "<input type='number' name='v$c' id='v$c' /> <br/><br/>";
            }
            ?>
            <input type="submit" value="Enviar"/>
        </form>
            <script src="../accessibility.js"></script>
<?php include __DIR__ . '/../vlibra_include.php'; ?>
</body>
</html>
