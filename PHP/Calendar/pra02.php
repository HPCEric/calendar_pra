<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <div>我的生日10-7</div>
    <div>下一次生日2022-10-7</div>
    <?php
        date_default_timezone_set('Asia/Taipei'); //定義時區
        $now=strtotime('now'); //指定變數為當前時間秒數 [ now 當前時間函式 ]
        $nextBirthday=strtotime('2022-10-7');
        $gap=($nextBirthday-$now)/86400; //天

        echo floor($gap) . "天"; //floor 無條件捨去 ceil 無條件進位
        echo "<br>";
        $year=floor(floor($gap)/365);
        echo $year;
        echo "<br>";
        $month=floor(floor(floor($gap)%365)/30); // %365 求出剩餘天數 /30 有幾個月並無條件捨去天
        echo $month;
        echo "<br>";
        $days=floor(floor($gap)%365)%30;
        echo $days;

        echo "<br>";
        echo "我的下次生日還有".$year."年".$month."月".$days."天";
    ?>
</body>
</html>