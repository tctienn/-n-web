<?php
    session_start();
    require_once ("../classes/dbConnection.php"); 
     $dbConnection = new dbConnection();
     $conn = $dbConnection->getConnection();
     if(isset($_GET['id']))
     {
        $sql="select * from blog where id= ".$_GET['id'];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        $row = $result->fetch_assoc();
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
    <title>Blog</title>
</head>

<body>
    <!--header-->
    <?php
        require_once('../component/Hea_der.php')
    ?>
    <br>


    <div class="container row" style="margin: auto;">
        <div class="col-md-7" style="border-right:solid 1px rgb(169, 169, 169) ;">
            <h2><?=$row['title']?></h2>
            <i>Chủ Nhật ngày 28/08/2022</i>
            <br>
            <hr>
            <p>
               <?=$row['nd']?>
            </p>
            <div>
                <img src="<?=$row['img1']?>"
                    style="width: 90%; aspect-ratio: 3/2;" alt="">
                <center><i>Niacinamide thuộc nhóm vitamin B và phức hợp vitamin B3</i></center>
            </div>
            <p>
            <h4><b>Tác dụng của Niacinamide trong làm đẹp</b></h4>
                <?=$row['nd2']?>
            <div>
                <br>
                <img src="<?=$row['img2']?>"
                    style="width: 90%; aspect-ratio: 3/2;" alt="">
                <center><i> ảnh minh họa </i></center>
                <br>
            </div>

            </p>
            <div style="float: right ;">Nguồn: Tổng hợp</div>
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
                <?php
                    if(isset($_GET['id']))
                    {
                    $sql="select * from blog ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        for($i=0; $i<4 ;$i++)
                        {
                                $row = $result->fetch_assoc()
                            ?>
                                    <div class="col-md-3">
                                        <img src="<?=$row['img1']?>" style="    width: 100%;
                                        aspect-ratio: 3/2;" alt="">
                                        <small>
                                            <a href="./blog.php?id=<?=$row['id']?>" id="ab"><?=$row['title']?> </a>
                                            <small><?=date('d/m/Y ',$row["create"])?></small>
                                        </small>
                                    </div>
                            <?php
                        }
                    } 
                    
                    }
                ?>
                <!-- <div class="col-md-3">
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
                </div> -->
            </div>
        </div>

        <div class="col-md-5">
            <h4>Bài nổi bật</h4>
            <hr style="width: 80%; margin: auto;">
            <br>

            <?php
                if(isset($_GET['id']))
                {
                   $sql="select * from blog ";
                   $result = $conn->query($sql);
                   if ($result->num_rows > 0)
                   {
                       for($i=0; $i<=4 ;$i++)
                       {
                            $row = $result->fetch_assoc()
                           ?>
                                <div class="container-fluid " style="display: flex; margin-bottom: 20px;">
                                    <img src="<?=$row['img1']?>"
                                        style=" padding: 0; width: 24%; aspect-ratio: 6/5;" alt="">
                                    <div style="display: flex; flex-direction: column; justify-content: space-between;">
                                        <h5><?=$row['title']?></h5>
                                        <small><i><?=date('d/m/Y ',$row["create"])?></i></small>
                                    </div>
                                </div>
                           <?php
                       }
                   } 
                   
                }
            ?>
            <!-- <div class="container-fluid " style="display: flex; margin-bottom: 20px;">
                <img src="../image/tai-sao-moi-cua-ban-bi-nut-ne-cach-duong-moi-ban-nen-biet-styty-1648789248_small.jpg"
                    style=" padding: 0; width: 24%; aspect-ratio: 6/5;" alt="">
                <div style="display: flex; flex-direction: column; justify-content: space-between;">
                    <h5>Tại sao môi của bạn bị nứt nẻ? Cách dưỡng môi bạn nên biết</h5>
                    <small><i>Thứ Hai ngày 21/03/2022</i></small>
                </div>
            </div>
            <div class="container-fluid " style="display: flex; margin-bottom: 20px;">
                <img src="../image/tai-sao-moi-cua-ban-bi-nut-ne-cach-duong-moi-ban-nen-biet-styty-1648789248_small.jpg"
                    style=" padding: 0; width: 24%; aspect-ratio: 6/5;" alt="">
                <div style="display: flex; flex-direction: column; justify-content: space-between;">
                    <h5>Tại sao môi của bạn bị nứt nẻ? Cách dưỡng môi bạn nên biết</h5>
                    <small><i>Thứ Hai ngày 21/03/2022</i></small>
                </div>
            </div>

            <div class="container-fluid " style="display: flex; margin-bottom: 20px;">
                <img src="../image/tai-sao-moi-cua-ban-bi-nut-ne-cach-duong-moi-ban-nen-biet-styty-1648789248_small.jpg"
                    style=" padding: 0; width: 24%; aspect-ratio: 6/5;" alt="">
                <div style="display: flex; flex-direction: column; justify-content: space-between;">
                    <h5>Tại sao môi của bạn bị nứt nẻ? Cách dưỡng môi bạn nên biết</h5>
                    <small><i>Thứ Hai ngày 21/03/2022</i></small>
                </div>
            </div>

            <div class="container-fluid " style="display: flex; margin-bottom: 20px;">
                <img src="../image/tai-sao-moi-cua-ban-bi-nut-ne-cach-duong-moi-ban-nen-biet-styty-1648789248_small.jpg"
                    style=" padding: 0; width: 24%; aspect-ratio: 6/5;" alt="">
                <div style="display: flex; flex-direction: column; justify-content: space-between;">
                    <h5>Tại sao môi của bạn bị nứt nẻ? Cách dưỡng môi bạn nên biết</h5>
                    <small><i>Thứ Hai ngày 21/03/2022</i></small>
                </div>
            </div> -->

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