<?php
// 時區
date_default_timezone_set('Asia/Taipei');

// 三元運算子 若無設定年月 則使用系統時間年月
$ym = isset($_GET['ym']) ? $_GET['ym'] : date('Y-m') ;

// 當年月的第一天
$timestamp = strtotime($ym . '-01');  

//系統時間
$today = date('Y-m-j');

//標題用時間顯示
$title = date('F, Y', $timestamp);

// 設定前後一月的變數 以 $timestamp 為標準
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// $timestamp 當月有幾天
$day_count = date('t', $timestamp);

// $timestamp 當月第一天是星期幾 1~7
$week_day = date('N', $timestamp); 

// 預設為空陣列
$weeks = [];
$week = '';

// 填入空白欄位( 當月第一天前需要幾格 ) str_repeat( 重複的內容 , 次數 )
$week = str_repeat('<td></td>', $week_day - 1);

// $day 為當月一號開始 最大值為當月天數 
for ($day = 1; $day <= $day_count; $day++, $week_day++) {

    // 設定變數年月日格式
    $date = $ym . '-' . $day;

    // 若為當日 增加效果 若否則不變
    if ($today == $date) { 
        $week = $week . '<td class="today">';
    } else {
        $week = $week . '<td>';
    }
    $week = $week . $day . '</td>'; // $day 印出日期 與 <td></td>格子

    // 當月最後一天或周日
    if ($week_day % 7 == 0 || $day == $day_count) {

        // 當月最後一天且不是周日
        if ($day == $day_count && $week_day % 7 != 0) {
            // 加入後方空白格
            $week = $week . str_repeat('<td></td>', 7 - $week_day % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>'; //當月最後一天或周日時 多加一列
        
        // print_r ($weeks);
        
        $week = '';
   
    }   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .container {
            font-family: 'Montserrat', sans-serif;
            margin: 60px auto;
        }
        .list-inline {
            text-align: center;
            margin-bottom: 30px;
        }
        .title {
            font-weight: bold;
            font-size: 26px;
        }
        th {
            text-align: center;
        }
        td {
            height: 100px;
        }
        th:nth-of-type(6), td:nth-of-type(6) {
            color: blue;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: red;
        }
        .today {
            background-color: ghostwhite;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar.php">Today</a></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>