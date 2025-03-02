<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            width: 90%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            cursor: pointer;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Kalkulator PHP</h2>
    <form method="POST">
        <input type="number" name="num1" placeholder="Pierwsza liczba" required>
        <input type="number" name="num2" placeholder="Druga liczba" required>
        <select name="operation" required>
            <option value="add">Dodaj</option>
            <option value="subtract">Odejmij</option>
            <option value="multiply">Pomnóż</option>
            <option value="divide">Podziel</option>
        </select>
        <input type="submit" value="Oblicz">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Błąd: Dzielenie przez zero!";
                }
                break;
        }
        echo "<div class='result'>Wynik: $result</div>";
    }
    ?>
</body>
</html>
