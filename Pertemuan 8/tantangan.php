<html>
    <body>
        <?php
            $a = 10;
            $b = 4;
            $c = 7;
            
            $results = [];
            
            // Menggunakan for loop untuk menghitung dan menyimpan hasil
            for ($i = 1; $i <= 2; $i++) {
                if ($i == 1) {
                    $results[] = $a + $b;
                } elseif ($i == 2) {
                    $results[] = $c - $b ;
                } 
            }
            
            // Menampilkan hasil dengan nomor setiap hasil
            for ($i = 0; $i < count($results); $i++) {
                echo "Hasil ke-" . ($i + 1) . ": " . $results[$i] . "<br>";
                echo "<hr>";
            }
            
        ?>
    </body>
</html>