<?php
    
    $_SESSION['ay']="";
    $_SESSION['asdn']="";

    $arr = array();
    $pro = new stdclass;
    $pro->id="";
    $pro->cout=0;
    $pro->id_user="";
    $pro->gia=0;
    $pro->ngaythem="";
    $_SESSION['cart']= $arr;
    // array_push($_SESSION['cart'], $pro);
    // var_dump($_SESSION['cart']);exit;

    $sqls = "SELECT *  FROM cart  ";
    $a = $conn->query($sqls);
    $ay = 0;
    if ($a->num_rows > 0) 
        while($rows = $a->fetch_assoc())
        {
            $pro = new stdclass; //// tạo lại biến đối tượng không thì sẽ bị trùng tất cả các giá trị trong mảng khi thay đổi giá trị biến 
            $pro->id=$rows['id_sp'];
            $pro->cout=$rows['soluong'];
            $pro->id_user=$rows['id_user'];
            $pro->gia=$rows['gia'];
            $pro->ngaythem=$rows['ngaythem'];
            // var_dump($pro); exit;
            array_push($_SESSION['cart'], $pro);
            // var_dump($arr)
            
            
            ?>
                
                <div>
                    id user <?= $rows['id_user']?>
                </div>
                <div>
                    id sp <?=$rows['id_sp']?>
                </div>
                <div>
                    so luong <?= $rows['soluong']?>
                </div>
                <div>
                    gia <?=$rows['gia']?>
                </div>
                <div>
                    ngay them <?=$rows['ngaythem']?>
                </div>
                <hr/>
            <?php
        };
        // var_dump($_SESSION['cart']);exit;
        
                // $slide_sql="SELECT *  FROM cart  ";
                // $slide_result2 = $conn->query($slide_sql); 
                //             if ($slide_result2->num_rows > 0) 
                //                 { 
                //                     while ($row2 = $slide_result2->fetch_assoc()){
                                        
                //                     }; exit;
                //                 }



?>