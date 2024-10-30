<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1c</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            line-height: 30px;
            margin: 2px;
        }
        .container {
            margin-left: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php

            for ($i = 1; $i <= 3; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    $huruf = chr(64 + $j); 
                    echo "<div class='box'>$huruf</div>";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>