<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        echo"Halo Dunia\n";
        $suhu = 22;
        if ($suhu <= 20) {
            echo "suhu dingin";
        }
        elseif ($suhu >= 30) {
            echo"Suhu panas"; 
        }
        else {
            echo"Suhu sedang baik-baik saja";
        }
    ?>
</body>
</html>