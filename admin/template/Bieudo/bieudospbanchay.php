<?php
function bieuDospthinhhanh($year)
{
    require_once('./Bieudo/locSPTuPhieuMuaHang.php');
    $product_hd = array();
    // var_dump($product_count);

    if (count($product_count) <= 0) {
        $product_count = ["không có gì" => 1, "thịnh hành 2" => 0, "thịnh hành 3" => 0];
        $tong_sphd = 0;
    }

    $tong_sphd = array_sum($product_count);
    foreach ($product_count as $product => $count) { // tạo mảng đối tượng rồi tách index và value
        $pro_hd = new stdclass; //// tạo lại biến đối tượng không thì sẽ bị trùng tất cả các giá trị trong mảng khi thay đổi giá trị biến 
        $pro_hd->name = $product;
        $pro_hd->cout = $count;
        array_push($product_hd, $pro_hd);

        // if ($limit == 0)
        //     break;
    }
    // echo $tong_sphd - ($product_hd[0]->cout + (isset($product_hd[1]->cout) ? $product_hd[1]->cout : 0) + (isset($product_hd[2]->cout) ? $product_hd[2]->cout : 0));


    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Document</title>
    </head>

    <body>

        <div>
            <canvas id="myChart_quat"></canvas>
        </div>

        <script>



            const data_quat = {
                labels: [
                    '<?= $product_hd[0]->name ?>',
                    '<?= isset($product_hd[1]->name) ? $product_hd[1]->name : '_' ?>',
                    '<?= isset($product_hd[2]->name) ? $product_hd[2]->name : '_' ?>',
                    'sản phẩm còn lại'
                ],
                datasets: [{
                    label: 'tỉ lệ mua',
                    data: [<?= $product_hd[0]->cout ?>, <?= isset($product_hd[1]->cout) ? $product_hd[1]->cout : 0 ?>, <?= isset($product_hd[2]->cout) ? $product_hd[2]->cout : 0 ?>, <?= $tong_sphd - ($product_hd[0]->cout + (isset($product_hd[1]->cout) ? $product_hd[1]->cout : 0) + (isset($product_hd[2]->cout) ? $product_hd[2]->cout : 0)) ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(100, 20, 100)'
                    ],
                    hoverOffset: 4
                }]
            };

            const config_quat = {
                type: 'doughnut',
                data: data_quat,
            };
            const myChart_quat = new Chart(
                document.getElementById('myChart_quat'),
                config_quat
            );
        </script>

    </body>

    </html>

    <?php
}

?>