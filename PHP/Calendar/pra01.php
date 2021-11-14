<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期，計算中間間隔天數</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <span>開始日期:2021-10-1</span><br>
    <span>結束日期:2021-11-3</span>
    <hr>
    <?php
        date_default_timezone_set('Asia/Taipei'); //設定時區
        echo "開始的秒數".strtotime('2021-10-1'); //strtotime()日期轉換成秒數
        echo "<br>";
        echo "結束的秒數".strtotime('2021-11-3');

        $gapDays=(strtotime('2021-11-3')-strtotime('2021-10-1'))/(24*60*60); //減法求出秒數 除以一天幾秒
        echo "<br>間隔".$gapDays."天";


    ?>
</body>
</html>