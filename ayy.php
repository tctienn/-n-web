<?php
     require ('./classes/dbConnection.php');
     $dbConnection = new dbConnection();
     $conn = $dbConnection->getConnection(); 

     $slide_sql="SELECT * from hoadon ";
     $slide_result = $conn->query($slide_sql);
    $product_count = array();

    // var_dump($slide_result);

     if ($slide_result->num_rows > 0) 
     while ($row = $slide_result->fetch_assoc()){
        //////sư ly mang

        
             $row['note'] = str_replace("sản phẩm đã thanh toán:", "", $row['note']);
            $arr_string = explode (',', $row['note']);
            foreach ($arr_string as $product) {
                $product = trim ($product);
                $product = strtolower ($product);

                if($product != '' && $product != '') {
                    // Kiểm tra xem sản phẩm đã có trong mảng product_count chưa
                    if (array_key_exists ($product, $product_count)){
                      // Nếu có thì tăng số lần xuất hiện lên 1
                      $product_count [$product]++;
                    }else {
                      // Nếu không thì thêm sản phẩm vào mảng product_count với số lần xuất hiện là 1
                      $product_count [$product] = 1;
                    }

            }

        }
        ///////////
        
     }
?>

            <div class="item_product col-md-2 ">
                 
                 <p>
                    leng: <?= sizeof($product_count)?>
                     <?php
                        arsort ($product_count);
                        var_dump($product_count)
                     ?>
                 </p>
             </div>

      


            