<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba 2</title>
</head>
<body>
    <div>
        <form action="POST" method="get">
            <label for="nama">Masukkan Nama anda:</label>
            <input type="text" name=nama>
            <button >INPUT</button>
        </form>
    </div>
    <?php
        $nama = @$_GET['nama'];
        echo"Nama = ". $nama ."<br>";
    ?>
</body>
</html>