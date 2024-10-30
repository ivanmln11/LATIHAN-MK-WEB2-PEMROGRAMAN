<?php
// Fungsi untuk memeriksa apakah suatu bilangan prima
function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Ulangi angka dari 1 sampai 19
for ($i = 1; $i <= 19; $i++) {
    if ($i % 2 == 0) {
        echo "• Angka $i adalah bilangan genap";
    } else {
        echo "• Angka $i adalah bilangan ganjil";
    }
    
    // Check if the number is prime
    if (is_prime($i)) {
        echo " dan sekaligus bilangan prima";
    }
    
    echo "<br>";
}
?>