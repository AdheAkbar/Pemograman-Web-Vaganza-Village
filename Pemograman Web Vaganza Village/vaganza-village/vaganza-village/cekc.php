<?php
// Fungsi untuk Bubble Sort
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                // Tukar elemen jika perlu
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
}

$prices = [100, 20, 50, 30, 15, 75, 10];

// Waktu mulai eksekusi
$start_time = microtime(true);

bubbleSort($prices); // Memanggil fungsi Bubble Sort

// Waktu berakhir eksekusi
$end_time = microtime(true);

echo "Harga terurut: ";
foreach ($prices as $price) {
    echo $price . " ";
}
echo "<br>";

// Menghitung waktu eksekusi dalam mikrodetik
$execution_time = ($end_time - $start_time) * 1000000;

echo "Waktu eksekusi: " . $execution_time . " mikrodetik";
?>