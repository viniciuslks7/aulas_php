<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Tabuada</title>
    <style>
        body {
            background: linear-gradient(to right, #42275a, #734b6d);
            font-family: Arial, sans-serif;
            color: white;
            padding: 50px;
        }
        .box {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 12px;
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        select, input[type="submit"] {
            padding: 8px;
            margin-top: 10px;
            font-size: 16px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Escolha um número para ver a tabuada</h2>
        <form method="GET" action="tabuada_mostra.php">
            <label>Escolha um número:</label><br>
            <select name="value">
                <?php
                $n1 = 1;
                do {
                    echo "<option value='$n1'>$n1</option>";
                    $n1++;
                } while ($n1 <= 10);
                ?>
            </select>
            <br>
            <input type="submit" value="Ver Tabuada"/>
        </form>
    </div>
</body>
</html>
