<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
            border-collapse: collapse;
        }
        table td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
<body>
    <!-- Bài 1 -->
<?php
function tinhMang($arrs) {
    // Tính tổng
    $tong = 0;  // Khởi tạo tổng với giá trị ban đầu là 0
    $dem = count($arrs);  // Lấy số lượng phần tử trong mảng

    for($i = 0; $i < $dem; $i++) {
        $tong += $arrs[$i];  // Cộng giá trị của mỗi phần tử vào tổng
    }

    // Tính hiệu
    $hieu = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $hieu -= $arrs[$i];
    }

    // Tính tích
    $tich = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $tich *= $arrs[$i];
    }

    // Tính thương
    $thuong = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $thuong /= $arrs[$i];
    }

    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br/>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br/>";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br/>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinhMang($arrs);
?>

<br>
<br>
<!-- Bài 2 -->
<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$finalString = '';

// Duyệt qua mảng và xây dựng chuỗi
for ($i = 0; $i < count($arrs); $i++) {
    $finalString .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}";
    
    // Xử lý phần cuối
    if ($i === count($arrs) - 2) {
        $finalString .= ", còn màu yêu thích của tôi là ";
    } elseif ($i === count($arrs) - 1) {
        $finalString .= ".";
    } else {
        $finalString .= ", ";
    }
}

echo $finalString;
?>

<br>
<br>
<!-- Bài  3 -->
<table>
    <?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
    echo '<tr>'.'Tên khóa học'.'</tr>';
    for ($i = 0; $i < count($arrs); $i++) {
        echo '<tr><td>' . $arrs[$i] . '</td></tr>';
    }
    ?>
</table>


<br>
<br>
<!-- Bài 4 -->
<?php
$arrs = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris", 
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", 
    "Spain" => "Madrid", 
    "Sweden" => "Stockholm", 
    "United Kingdom" => "London", 
    "Cyprus" => "Nicosia", 
    "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", 
    "Estonia" => "Tallin", 
    "Hungary" => "Budapest", 
    "Latvia" => "Riga", 
    "Malta" => "Valetta", 
    "Austria" => "Vienna", 
    "Poland" => "Warsaw"
);

foreach ($arrs as $country => $capital) {
    echo "Thủ đô của {$country} là {$capital}". "<br />";
}
?>

<br>
<br>
<!-- Bài 5 -->
<br>
<br>
<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị có key 'b'
$valueB = $a['b']['o']['b'];

// Lấy giá trị có key 'c'
$valueC = $a['a']['c'];

// Lấy thông tin của phần tử có key 'a'
$elementA = $a['a'];

// Hiển thị kết quả
echo "Giá trị với key 'b' là: $valueB<br>";
echo "Giá trị với key 'c' là: $valueC<br>";
echo "Thông tin của phần tử với key 'a':<br>";
print_r($elementA);
?>

<br>
<br>
<!-- Bài 6 -->
<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array();

foreach ($keys as $key => $value) {
    $valuesKey = $value . 'value';
    if (isset($values[$valuesKey])) {
        $keysAndValues[$value] = $values[$valuesKey];
    }
}

// Hiển thị mảng kết quả
print_r($keysAndValues);
?>



</body>
</html>