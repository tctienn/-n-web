<?php
    session_start();
    require ('../classes/dbConnection.php');
    $dbConnection = new dbConnection();
    $conn = $dbConnection->getConnection();
    if(!isset($_GET['id']))
    {
        echo "lỗi trang";exit;
    }
        // echo "lỗi trang";exit;
    $sql ="SELECT sanpham.id as sp_id , sanpham.name as sp_name, sanpham.mota as sp_mota , sanpham.gia as sp_gia,sanpham.img as img, danhmuc.name as cat_name  ,  sanpham.soluong sp_soluong  FROM sanpham , danhmuc WHERE sanpham.danhmuc_id = danhmuc.id AND deleted=1 and sanpham.id= ".$_GET['id']."  ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        
    }
    else
    {
        echo " lỗi : không tìm thấy sản phẩm <br> <a href= './index.php' >về trang chủ</a> ";exit;
    }


    if(isset($_GET['id']) && isset($_GET['them']))
    {
        if(isset($_POST['soluong']))
            $soluong=$_POST['soluong'];
        $pro = new stdclass;
        $pro->id="";
        $pro->cout=0;
        $a=0;  //phần này để kiểm tra xem sản phẩn đã có trong giỏ hàng chưa nếu chưa có thì sẽ cộng 1 để hiển thị số trong icon giỏ hàng
        for($i=0;$i<count($_SESSION['cart']);$i++)
        {
            if($_SESSION['cart'][$i]->id==$_GET['id'])
            {
                $a=1;
                $_SESSION['cart'][$i]->cout+=$soluong;
                $soluong=0;// chỉ thêm số lượng cho 1 sản phẩm có id đang xét (chức năng này ko có tác dụng)
            }
        }
        if($a!=1)
        {

            $pro->id=$_GET['id'];
            $pro->cout=$soluong;
            array_push($_SESSION['cart'], $pro);
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trangchu.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <title>product</title>
</head>

<body>
    <!--header-->
    <?php
        require_once('../component/Hea_der.php');
    ?>
    <br>
    <div style=" width: 100%; aspect-ratio: 65/1;">
        
    </div>

    <div class="container row" style="margin: auto;">
        <div class="col-md-7" style="border-right:solid 1px rgb(169, 169, 169) ;">
           
            <div>
                <img src="<?=$row['img']?>"
                    style="width: 70%; aspect-ratio: 2/2;" alt="">
                <center><i><?=$row['sp_name']?></i></center>
            </div>
            
            <br>
            <div style="clear: right ;">
                <small>
                    <b>Lưu ý:</b>
                    Thông tin trong bài viết chỉ mang tính chất tham khảo, vui lòng
                    liên hệ với Bác sĩ, Dược
                    sĩ hoặc
                    chuyên viên y tế để được tư vấn cụ thể.
                </small>
            </div>
            <hr>
            <br>
            <div class="row" style="display: flex;
            justify-content: space-evenly;">
                <h4>Bài viết liên quan</h4>
                <hr>
                <div class="col-md-3">
                    <img src="../image/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small.jpg" style="    width: 100%;
                    aspect-ratio: 3/2;" alt="">
                    <small>
                        Da bị cháy nắng: đừng làm những điều này để tình hình tệ hơn
                        <small>Thứ Sáu ngày 29/09/2017</small>
                    </small>
                </div>
                <div class="col-md-3">
                    <img src="../image/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small.jpg" style="    width: 100%;
                    aspect-ratio: 3/2;" alt="">
                    <small>
                        Da bị cháy nắng: đừng làm những điều này để tình hình tệ hơn
                        <small>Thứ Sáu ngày 29/09/2017</small>
                    </small>
                </div>
                <div class="col-md-3">
                    <img src="../image/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small.jpg" style="    width: 100%;
                    aspect-ratio: 3/2;" alt="">
                    <small>
                        Da bị cháy nắng: đừng làm những điều này để tình hình tệ hơn
                        <small>Thứ Sáu ngày 29/09/2017</small>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <h4 style="color: #072d94; "><?=$row['sp_name']?></h4>
            <?php
                foreach($_SESSION['cart'] as $value)
                {
                    if($_GET['id']==$value->id)
                    {
                        echo "sản phẩm đã nằm trong giỏ hàng";
                    }
                }
            ?>
            <hr >
            <h4>giá: <?=number_format($row["sp_gia"],0,",",".")?> đ</h4>
            
            <div>
                <b>danh mục: </b> <i style="color: #1d48ba;"> <?= $row['cat_name']?></i>
            </div>
            <b>nội dung: </b>
            <div style=" width: 100%; aspect-ratio: 21/10;">
                <p><?=$row['sp_mota']?> </p>
            </div>
            chọn ố lượng: <input form="them"  style="width: 10%; border-radius: 25px;"  type="number" name="soluong" id="" min=1 value="1">
            <form   id="them" action="?id=<?=$_GET['id']?>&them"  method="POST">
                <input type="submit" name="" id="" value="thêm vào giỏ hàng">
            </form>

            
        </div>
    </div>

    <br>
    <hr>
    <br>
    <!--footer-->
    <?php
        require_once("../component/footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>