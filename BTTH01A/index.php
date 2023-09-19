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


<!-- Bài  3 -->
