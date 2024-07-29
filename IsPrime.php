<?php
// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number <= 1) return false;
    if ($number <= 3) return true;
    if ($number % 2 == 0 || $number % 3 == 0) return false;
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) return false;
    }
    return true;
}

// Kiểm tra số nguyên tố
$number = 13;
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>
