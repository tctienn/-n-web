<?php
   
    
    function thanhtoan(){
        // require_once("../../classes/dbConnection.php");
        // require ("../classes/dbConnection.php");
        // include '../classes/dbConnection.php';
        if(isset($_SESSION['login']) && isset($_SESSION['id_user']) && $_SESSION['login']==1)
        {
            $user_id= $_SESSION['id_user'];
        }
        else
        {
            $user_id="";
        }
        $dbConnection = new dbConnection();
        $conn = $dbConnection->getConnection();

        $sp_name="sản phẩm đã thanh toán: ";
        $time=time();
        if(isset($_SESSION['tong']))
        {

            foreach($_SESSION['cart'] as $value)
            {
                $sql = "SELECT * FROM sanpham WHERE id = '$value->id' ";
                $result = $conn->query($sql);
                if ($result->num_rows != 0) 
                {   
                    $row = $result->fetch_assoc();
                    $sp_name.=$row['name'].",";
                    
                }
                else{
                     $sp_name="hóa đơn bị hỏng gio số lượng sản phẩm có vấn đề";
                     echo $sp_name;
                }
            }
            // INSERT INTO `hoadon` (`id`, `order_id`, `note`, `ma_gd`, `money`, `code_bank`, `time`) VALUES (NULL, '1', '1', '1', '1', '1', '".time()."');
            $ay= $_GET['vnp_TxnRef'];
            $date=$_GET['vnp_PayDate']; // chỉ lấy ngày
            // echo date('Y/m/d',strtotime($date));exit;
            $date=date('Ymd',strtotime($date));
            $result = mysqli_query($conn,"INSERT INTO `hoadon` (`id`, `order_id`, `note`, `ma_gd`, `money`, `code_bank`, `time`,`user_id`) VALUES (NULL, '".$ay."', '".$sp_name."', '".$_GET['vnp_TransactionNo']."', '".$_SESSION['tong']."', '".$_GET['vnp_BankCode']."', '".$date."','".$user_id."')"); 
            // echo var_dump($ay);exit;
            // UPDATE `sanpham` SET `deleted` = '1' WHERE `sanpham`.`id` = 49;
            
            $_SESSION['cart']= array();
            $_SESSION['tong']=0;
            // var_dump(date("m/d/y", $_GET['vnp_PayDate']));exit;
        }
       
    }

?>