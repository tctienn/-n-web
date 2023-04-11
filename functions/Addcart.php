<?php

    function push_session($id_user,$id_sp,$gia,$soluong,$ngaynhap){
      $pro = new stdclass; //// tạo lại biến đối tượng không thì sẽ bị trùng tất cả các giá trị trong mảng khi thay đổi giá trị biến 
      $pro->id=$id_sp;
      $pro->cout=$soluong;
      $pro->id_user=$id_user;
      $pro->gia=$gia;
      $pro->ngaythem=$ngaynhap;
      // var_dump($pro); exit;
      array_push($_SESSION['cart'], $pro);
    }

    function addcart($id_user,$id_sp,$gia,$soluong,$ngaynhap){ 
      // thêm sản phẩm vào cart 
      $dbConnection = new dbConnection();
      $conn = $dbConnection->getConnection();
      try {
          $time=time();
          $result = mysqli_query($conn,"
          INSERT INTO `cart` (`id_vaicut`, `id_user`, `id_sp`, `soluong`, `gia`, `ngaythem`) VALUES (NULL, '".$id_user."', '".$id_sp."', '".$soluong."', '".$gia."', '".$ngaynhap."') 
                  ");
          // if (!$result) { echo "Lỗi: " . mysqli_error($conn);exit; }
          
          $error=false;
          // echo "ui";exit;
          ?>
            <Script>
                alert("thêm  thành công");
            </Script>
          <?php
        }
        catch (Exception $e) {
          //Xử lý ngoại lệ ở đây
          $errorMsg="thêm sản phẩm thất bại";
          $error=true;
        }
    }

    function updatecart_c($id_user,$id_sp,$gia,$soluong,$ngaynhap){  // update cộng dồn
      // thêm sản phẩm vào cart 
      $dbConnection = new dbConnection();
      $conn = $dbConnection->getConnection();
      try {
          // thêm mới cart khi xuất hiện sản phẩm khấc biệt về giá 
          $giacu = $conn->query("SELECT gia FROM cart WHERE id_sp = '".$id_sp."' AND id_user ='".$id_user."' AND gia = '".$gia."'");
          $row = $giacu->fetch_assoc();
          // var_dump($row);exit;
          if($row == null){
            $soluong=1;
            $result_insert = mysqli_query($conn," INSERT INTO `cart` (`id_vaicut`, `id_user`, `id_sp`, `soluong`, `gia`, `ngaythem`) VALUES (NULL, '".$id_user."', '".$id_sp."', '".$soluong."', '".$gia."', '".$ngaynhap."') ");
            push_session($id_user,$id_sp,$gia,$soluong,$ngaynhap)
            ?>
              <Script>
                  alert(" thêm ");
              </Script>
            <?php
          }
          else{
            $result = mysqli_query($conn,"
              UPDATE `cart` set `soluong` = soluong + '".$soluong."' where id_sp = '".$id_sp."' AND id_user = '".$id_user."' AND gia = '".$gia."'  
            ");
            if (mysqli_affected_rows($conn) == 0) {
              // Không có hàng nào được cập nhật
              
              ?>
                <Script>
                  alert("ko update");
                </Script>
              <?php
              
            } else {
              // Có ít nhất một hàng được cập nhật
              ?>
              <Script>
                  alert(" update ");
              </Script>
            <?php
            }


          }

          
          // if (!$result) { echo "Lỗi: " . mysqli_error($conn);exit; }
          $error=false;
          // echo "ui";exit;
          ?>
            <!-- <Script>
                alert(" cập nhật thành công");
            </Script> -->
          <?php
        }
        catch (Exception $e) {
          //Xử lý ngoại lệ ở đây
          $errorMsg="thêm sản phẩm thất bại";
          $error=true;
        }
    }

    function updatecart($id_user,$id_sp,$gia,$soluong,$ngaynhap){ //// update cứng
      // thêm sản phẩm vào cart 
      $dbConnection = new dbConnection();
      $conn = $dbConnection->getConnection();
      try {
          
          $giacu = $conn->query("SELECT * FROM cart WHERE id_sp = '".$id_sp."' AND id_user ='".$id_user."' AND gia = '".$gia."'");
          $row = $giacu->fetch_assoc();
          // var_dump($row);exit;
          if($row == null){
            $result_insert = mysqli_query($conn," INSERT INTO `cart` (`id_vaicut`, `id_user`, `id_sp`, `soluong`, `gia`, `ngaythem`) VALUES (NULL, '".$id_user."', '".$id_sp."', '".$soluong."', '".$gia."', '".$ngaynhap."') ");
            ?>
            <!-- <Script>
                alert(" thêm ");
            </Script> -->
          <?php
          }
          else{
            $result = mysqli_query($conn,"
              UPDATE `cart` set `soluong` =  '".$soluong."' where id_sp = '".$id_sp."' AND id_user = '".$id_user."' AND gia = '".$gia."' AND soluong < ".$soluong." 
            ");
            if (mysqli_affected_rows($conn) == 0) {  // trả về số dòng bị thay đổi 
              // Không có hàng nào được cập nhật

              // trường hợp update giảm
              $result = mysqli_query($conn,"
              UPDATE `cart` set `soluong` =  '".$soluong."' where id_sp = '".$id_sp."' AND id_user = '".$id_user."' AND gia = '".$gia."' AND soluong > ".$soluong." 
              ");

              if (mysqli_affected_rows($conn) != 0){
                // var_dump($row);
                // var_dump($conn->fetch_assoc());exit;
                update_product_t($id_sp , ($row['soluong']-$soluong));
              }

              ?>
                <!-- <Script>
                  alert("ko update 2");
                </Script> -->
              <?php
              
            } else {
              // Có ít nhất một hàng được cập nhật
              update_product($id_sp , ($soluong- $row['soluong'])); /////////// đang sửa
              // var_dump($soluong);
              ?>
              <Script>
                  alert(" update 2");
              </Script>
            <?php
            }


          }


        }
        catch (Exception $e) {
          //Xử lý ngoại lệ ở đây
          $errorMsg="thêm sản phẩm thất bại";
          $error=true;
        }
    }
    // function updatecart($id_user,$id_sp,$gia,$soluong,$ngaynhap){ // thêm sản phẩm vào cart 
    //   $dbConnection = new dbConnection();
    //   $conn = $dbConnection->getConnection();
    //   try {
    //       $time=time();
    //       $result = mysqli_query($conn,"INSERT INTO `cart` (`id_vaicut`, `id_user`, `id_sp`, `soluong`, `gia`, `ngaythem`) VALUES (NULL, '".$id_user."', '".$id_sp."', '".$soluong."', '".$gia."', '".$ngaynhap."') ON DUPLICATE KEY  UPDATE `soluong` = `soluong` + '".$so."'");
    //       $error=false;
    //       // echo "ui";exit;

    //     }
    //     catch (Exception $e) {
    //       //Xử lý ngoại lệ ở đây
    //       $errorMsg="thêm sản phẩm thất bại";
    //       $error=true;
    //     }
    // }

    function update_product($id_sp , $soluong){ // update giảm 

        try{
          $dbConnection = new dbConnection();
          $conn = $dbConnection->getConnection();
            // $time=time();
            $result = mysqli_query($conn,"UPDATE `sanpham` SET `soluong` = soluong - '".$soluong."' WHERE `sanpham`.`id` =".$id_sp." ");
            if (mysqli_affected_rows($conn) == 0) {
              // Không có hàng nào được cập nhật
              
              ?>
                <Script>
                  alert("Lỗi: Điều kiện số lượng không đủ hoặc sản phẩm không tồn tại.");
                </Script>
              <?php
              
            } else {
              // Có ít nhất một hàng được cập nhật
              ?>
              <Script>
                  alert("cập nhật  thành công");
              </Script>
            <?php
            }
            

        }
        catch(Exception $e)
        {
           echo 'lỗi update ';exit;

        } 
    }

    function update_product_t($id_sp , $soluong){ // update theo chiều tăn của sản phẩm 

      try{
        $dbConnection = new dbConnection();
        $conn = $dbConnection->getConnection();
          // $time=time();
          $result = mysqli_query($conn,"UPDATE `sanpham` SET `soluong` = soluong + '".$soluong."' WHERE `sanpham`.`id` =".$id_sp."  ");
          if (mysqli_affected_rows($conn) == 0) {
            // Không có hàng nào được cập nhật
            
            ?>
              <Script>
                alert("Lỗi: Điều kiện số lượng không đủ hoặc sản phẩm không tồn tại.");
              </Script>
            <?php
            
          } else {
            // Có ít nhất một hàng được cập nhật
            ?>
            <Script>
                alert("cập nhật  thành công");
            </Script>
          <?php
          }
          

      }
      catch(Exception $e)
      {
         echo 'lỗi update ';exit;

      } 
  }


  /////////  xóa cart 

   function remote_cart($id_user,$id_sp,$gia,$soluong){
    try{
      $dbConnection = new dbConnection();
      $conn = $dbConnection->getConnection();
        // $time=time();
        $result = mysqli_query($conn,"DELETE FROM `cart` WHERE `cart`.`id_sp` = ".$id_sp." AND `cart`.`id_user`=".$id_user." AND `cart`.`gia`=".$gia." ");
        if (mysqli_affected_rows($conn) == 0) {
          // Không có hàng nào được cập nhật
          
          ?>
            <Script>
              alert("Lỗi: không xóa được");
            </Script>
          <?php
          
        } else {
          // Có ít nhất một hàng được cập nhật
          update_product_t($id_sp , $soluong)

          ?>

          <Script>
              alert("cập nhật  thành công");
          </Script>
        <?php
        }
        

    }
    catch(Exception $e)
    {
       echo ' có lỗi remote   ';

    } 
   }
?>

