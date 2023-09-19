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
    <span style="color: red;">Bài 1</span>
    <br>
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
<span style="color: red;">Bài 2</span>
    <br>
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
<span style="color: red;">Bài 3</span>
    <br>
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
<span style="color: red;">Bài 4</span>
    <br>
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
<span style="color: red;">Bài 5</span>
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
<span style="color: red;">Bài 6</span>
    <br>
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
    if (isset($values[$key . 'value'])) {
        $keysAndValues[$value] = $values[$key . 'value'];
    }
}

print_r($keysAndValues);
?>


<br>
<br>
<!-- Bài 7 -->
<span style="color: red;">Bài 7</span>
    <br>
<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

echo "Các số từ 100 đến 200 và chia hết cho 5 trong mảng:<br>";

foreach ($array as $value) {
    if ($value >= 100 && $value <= 200 && $value % 5 == 0) {
        echo $value . "<br>";
    }
}
?>

<br>
<br>
<!-- Bài 8 -->
<span style="color: red;">Bài 8</span>
    <br>
<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$minLength = PHP_INT_MAX;
$longestString = '';
$shortestString = '';

foreach ($array as $string) {
    $length = strlen($string);
    if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
    }
    if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength<br>";
echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength<br>";
?>
<br>
<br>
<!-- Bài 9 -->
<span style="color: red;">Bài 9</span>
    <br>
    <?php
function convertToLowercase($arr) {
    foreach ($arr as &$element) {
        if (is_string($element)) {
            $element = strtolower($element);
        }
    }
    return $arr;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

echo "Mảng 1 sau khi chuyển thành ký tự thường: ";
print_r(convertToLowercase($arr1));

echo "Mảng 2 sau khi chuyển thành ký tự thường: ";
print_r(convertToLowercase($arr2));

echo "Mảng 3 sau khi chuyển thành ký tự thường: ";
print_r(convertToLowercase($arr3));
?>

<!-- Bài 10 -->
<br>
<br>
<span style="color: red;">Bài 9</span>
    <br>
<?php
function convertToUppercase($arr) {
    foreach ($arr as &$element) {
        if (is_string($element)) {
            $element = strtoupper($element);
        }
    }
    return $arr;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

echo "Mảng 1 sau khi chuyển thành ký tự in hoa: ";
print_r(convertToUppercase($arr1));

echo "Mảng 2 sau khi chuyển thành ký tự in hoa: ";
print_r(convertToUppercase($arr2));

echo "Mảng 3 sau khi chuyển thành ký tự in hoa: ";
print_r(convertToUppercase($arr3));
?>
<!-- Bài 11 -->
<br>
<br>
<span style="color: red;">Bài 11</span>
    <br>
    <?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
unset($array[2]);

// Đặt lại key để đảm bảo key là tuần tự
$array = array_values($array);

// Hiển thị mảng sau khi xóa phần tử
print_r($array);
?>

<!-- Bài 12 -->
<br>
<br>
<span style="color: red;">Bài 12</span>
    <br>
    <?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo 'Phần tử đầu tiên: ' . $firstElement . "<br>";
echo 'Phần tử cuối cùng: ' . $lastElement . "<br>";

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
$maxValue = max($numbers);
$minValue = min($numbers);
$totalSum = array_sum($numbers);

echo 'Số lớn nhất: ' . $maxValue . "<br>";
echo 'Số nhỏ nhất: ' . $minValue . "<br>";
echo 'Tổng các giá trị: ' . $totalSum . "<br>";

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
sort($numbers);
$ascendingNumbers = $numbers;

rsort($numbers);
$descendingNumbers = $numbers;

echo 'Sắp xếp mảng theo chiều tăng: ' . implode(', ', $ascendingNumbers) . "<br>";
echo 'Sắp xếp mảng theo chiều giảm: ' . implode(', ', $descendingNumbers) . "<br>";

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers);
$ascendingKeys = $numbers;

krsort($numbers);
$descendingKeys = $numbers;

echo 'Sắp xếp mảng theo chiều tăng các key: ' . implode(', ', array_keys($ascendingKeys)) . "<br>";
echo 'Sắp xếp mảng theo chiều giảm các key: ' . implode(', ', array_keys($descendingKeys)) . "<br>";
?>

<!-- Bài 13 -->
<br>
<br>
<span style="color: red;">Bài 13</span>
    <br>
    <?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$average = array_sum($numbers) / count($numbers);

echo 'Giá trị trung bình của mảng: ' . $average . "<br>";

// Liệt kê các số lớn hơn giá trị trung bình
echo 'Các số lớn hơn giá trị trung bình: ';
foreach ($numbers as $number) {
    if ($number > $average) {
        echo $number . ' ';
    }
}
echo "<br>";

// Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
echo 'Các số nhỏ hơn hoặc bằng giá trị trung bình: ';
foreach ($numbers as $number) {
    if ($number <= $average) {
        echo $number . ' ';
    }
}
echo "<br>";
?>


</body>
</html>