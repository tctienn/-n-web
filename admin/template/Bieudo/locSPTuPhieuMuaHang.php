<?php




$dbConnection = new dbConnection();
$conn = $dbConnection->getConnection();

// SELECT * FROM hoadon WHERE YEAR (STR_TO_DATE (time, "%Y%m%d")) = 2022; tìm kiếm theo năm 

$sql = "SELECT note FROM hoadon WHERE YEAR (STR_TO_DATE (time, '%Y%m%d')) = " . $year;

// Thực thi câu lệnh SQL và lấy kết quả
$result = mysqli_query($conn, $sql);
// Tạo một mảng để lưu trữ các sản phẩm và số lần xuất hiện của chúng
$product_count = array();
// Kiểm tra kết quả
if (mysqli_num_rows($result) > 0) {


    // Duyệt qua từng hàng trong kết quả
    while ($row = mysqli_fetch_assoc($result)) {
        // Lấy giá trị của cột note trong hàng hiện tại
        $note = $row["note"];

        $note = str_replace('sản phẩm đã thanh toán:', '', $note); // hàm cắt chuỗi thừa



        // Tách các chuỗi con trong cột note bằng dấu phẩy
        $products = explode(',', $note);

        // Duyệt qua từng chuỗi con trong mảng products
        foreach ($products as $product) {
            // Loại bỏ các khoảng trắng dư thừa và chuyển đổi thành chữ thường
            $product = trim($product);
            $product = strtolower($product);

            // Kiểm tra xem sản phẩm có rỗng hoặc là 'sản phẩm đã thanh toán:' không
            if ($product != '') {
                // Kiểm tra xem sản phẩm đã có trong mảng product_count chưa
                if (array_key_exists($product, $product_count)) {
                    // Nếu có thì tăng số lần xuất hiện lên 1
                    $product_count[$product]++; // thay index bằng tên của sản phẩm
                } else {
                    // Nếu không thì thêm sản phẩm vào mảng product_count với số lần xuất hiện là 1
                    $product_count[$product] = 1;
                }
            }
        }
    }

    // Sắp xếp mảng product_count theo số lần xuất hiện giảm dần
    arsort($product_count);
} else {
    echo "không có sản phẩm nào được bán ";
}

// Hiển thị ra các sản phẩm có số lần xuất hiện cao nhất và giới hạn kết quả là 3
// $limit = 3;
// foreach ($product_count as $product => $count) {
//     echo "$product: $count<br>";
//     // $limit--;
//     // if ($limit == 0)
//     //     break;
// }


// Đóng kết nối

?>