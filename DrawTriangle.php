<?php
// Hàm vẽ tam giác vuông cân
function drawTriangle($n) {
    echo "<h2>Tam Giác Vuông Cân (Ký Tự *)</h2>";
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("* ", $i) . "<br>";
    }
}

// Hàm vẽ tam giác cân
function drawTriangle1($n) {
    echo "<h2>Tam Giác Cân (Ký Tự #)</h2>";
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("# ", $i) . "<br>";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        echo str_repeat("# ", $i) . "<br>";
    }
}

// Gọi hàm để vẽ tam giác
drawTriangle(5);
drawTriangle1(10);
?>
