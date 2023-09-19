!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Danh sách sách</title>
</head>
<body>
  <header>
    <h1>Danh sách sách</h1>
  </header>
  <main>
    <ul>
      <?php
        // Lấy tất cả các thể loại
        $theloai = mysqli_query($conn, "SELECT * FROM theloai");

        // Lặp qua tất cả các thể loại
        while ($theloai_row = mysqli_fetch_assoc($theloai)) {
          // Lấy tất cả các sách thuộc thể loại hiện tại
          $baiviet = mysqli_query($conn, "SELECT * FROM baiviet WHERE theloai_ma = {$theloai_row['ma_theloai']}");

          // Lặp qua tất cả các sách
          while ($baiviet_row = mysqli_fetch_assoc($baiviet)) {
            echo "<li>";
            echo "<a href='baiviet.php?ma_baiviet={$baiviet_row['ma_baiviet']}'>";
            echo $baiviet_row['ten_baiviet'];
            echo "</a>";
            echo "</li>";
          }
        }
      ?>
    </ul>
  </main>
  <footer>
    <p>Copyright &copy