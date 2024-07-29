<?php
// Hàm kiểm tra năm nhuận
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

// Kiểm tra năm nhuận
$year = 2024; // Thay đổi năm để kiểm tra
if (isLeapYear($year)) {
    echo "$year là năm nhuận.";
} else {
    echo "$year không phải là năm nhuận.";
}
?>
