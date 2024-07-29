<?php
// Tạo mảng liên hợp
$languages = [
    'Java' => [
        'name' => 'Java',
        'year' => 1995,
        'libraries' => ['Spring', 'Hibernate', 'Apache Struts']
    ],
    'C#' => [
        'name' => 'C#',
        'year' => 2000,
        'libraries' => ['ASP.NET', 'Entity Framework', 'Xamarin']
    ],
    'PHP' => [
        'name' => 'PHP',
        'year' => 1995,
        'libraries' => ['Laravel', 'Symfony', 'CodeIgniter']
    ],
    'Javascript' => [
        'name' => 'Javascript',
        'year' => 1995,
        'libraries' => ['React', 'Angular', 'Vue']
    ],
    'Python' => [
        'name' => 'Python',
        'year' => 1991,
        'libraries' => ['Django', 'Flask', 'Pandas']
    ]
];

// Thêm ngôn ngữ
$languages['Golang'] = [
    'name' => 'Golang',
    'year' => 2009,
    'libraries' => ['Gin', 'Beego', 'Echo']
];

$languages['Ruby'] = [
    'name' => 'Ruby',
    'year' => 1995,
    'libraries' => ['Rails', 'Sinatra', 'Padrino']
];

// Xoá ngôn ngữ Javascript
unset($languages['Javascript']);

// Hiển thị thông tin ngôn ngữ lập trình đã cập nhật
echo "<h1>Danh Sách Ngôn Ngữ Lập Trình (Cập Nhật)</h1>";
echo "<ul>";
foreach ($languages as $language) {
    echo "<li><strong>{$language['name']}</strong> - Năm ra đời: {$language['year']}";
    echo "<ul>";
    foreach ($language['libraries'] as $library) {
        echo "<li>{$library}</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
?>
