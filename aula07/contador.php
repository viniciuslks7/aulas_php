<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8" />
    <title>Contador</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .container {
            background: rgba(0, 0, 0, 0.65);
            padding: 30px 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            width: 360px;
            max-width: 95vw;
        }
        h2 {
            margin: 0 0 25px 0;
            text-align: center;
            font-weight: 700;
            font-size: 1.9rem;
            letter-spacing: 1.2px;
        }
        form label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            font-size: 1.05rem;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 11px 14px;
            margin-top: 7px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            font-weight: 500;
            outline: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        input[type="number"]:focus,
        select:focus {
            background-color: #e0e0e0;
            color: #222;
        }
        input[type="submit"] {
            margin-top: 30px;
            width: 100%;
            padding: 14px 0;
            border: none;
            border-radius: 12px;
            background: #ff9900;
            font-weight: 700;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            box-shadow: 0 5px 15px #ff9900cc;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #cc7a00;
            box-shadow: 0 7px 21px #cc7a00cc;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <h2>Contador</h2>
            <form method="get" action="contador_mostra.php">
                <label for="numInicial">Número Inicial:</label>
                <input type="number" id="numInicial" name="numInicial" required />

                <label for="numFinal">Número Final:</label>
                <input type="number" id="numFinal" name="numFinal" required />

                <label for="passo">Passo:</label>
                <select id="passo" name="passo" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <input type="submit" value="Contar" />
            </form>
        </fieldset>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
