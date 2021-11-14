<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            width:500px;
            margin:auto;
            padding:20px;
            border:1px solid black;
        }
        td{
            padding:5px;
            text-align: center;
            border:1px solid black;
        }
        .dayoff{
            background-color:pink;
        }
        .special-date{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <h1>線上月曆</h1>

    <?php
    $specialDate=['2021-11-15'=>'發薪水','2021-12-25'=>'聖誕節'];
   //echo $specialDate['2011-11-11'];
/*     $firstDay=date("Y-m-01");
    $month=date("m"); */
    $firstDay=date("Y-m-01"); //設定變數 當前年月份第一天
    $month=date("m"); //設定變數 當前月份
    $firstWeekWhiteDays=date("w",strtotime($firstDay)); //找出該月第一天是星期幾 = 第一周有幾個空白天
    $monthDays=date("t",strtotime($firstDay)); //該月有幾天 t
    $firstWeekDays=7-$firstWeekWhiteDays; //第一周有幾個實際天
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7); // (空白天+當月天數)/7 無條件進位 = 需列出幾周
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7; //當月最後一周有幾個實際天
    $lastWeekWhiteDays=7-$lastWeekDays; //當月最後一周有幾個空白天
    echo "最後一天天數".$lastWeekDays;
    echo "<br>";
    echo "weeks".$weeks;
    echo "<br>";
        echo "第一周的天數".$firstWeekDays;
        echo "<br>";
        echo "monthDays".$monthDays;
        echo "<br>";
    echo "firstday".$firstDay;
    echo "<br>";
    echo "month".$month;
    echo "<br>";
    echo "firstWeekWhiteDays".$firstWeekWhiteDays;
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    
    echo "</tr>";
    for($i=0;$i<$weeks;$i++){ //迴圈印出當月需要幾周 
        echo "<tr>";
        if($i==0){ //第一周
            for($k=0;$k<$firstWeekWhiteDays;$k++){
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            } //印空白日

            
            for($l=0;$l<$firstWeekDays;$l++){ //印出一周日期 i=0開始
                $date=date("Y-m-").($i*7+$l+1);
                
                $w=date('w',strtotime($date));
                
                if(array_key_exists($date,$specialDate)){ //印出特別日
                    $sp='special-date';
                }else{
                    $sp='';
                }

                if($w==0 || $w==6){ //印出周末
                    echo "<td class='dayoff $sp'>";
                }else{
                    echo "<td class='$sp'>";
                }

                echo $i*7+$l+1; //印出日期
                echo "<br>";
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
            
        }elseif($i==$weeks-1){
            for($m=0;$m<$lastWeekDays;$m++){
                $date=date("Y-m-").($i*7+$m+1-$firstWeekWhiteDays);
                $w=date('w',strtotime($date));
                if(array_key_exists($date,$specialDate)){
                    $sp='special-date';
                }else{
                    $sp='';
                }
                if($w==0 || $w==6){

                    echo "<td class='dayoff $sp'>";
                    
                }else{
                    echo "<td class='$sp'>";

                }
                echo $i*7+$m+1-$firstWeekWhiteDays;
                echo "<br>";
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
            for($n=0;$n<$lastWeekWhiteDays;$n++){
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

        }else{

            for($j=0;$j<7;$j++){
                $date=date("Y-m-").($i*7+$j+1-$firstWeekWhiteDays);
                $w=date('w',strtotime($date));
                if(array_key_exists($date,$specialDate)){
                    $sp='special-date';
                }else{
                    $sp='';
                }
                if($w==0 || $w==6){

                    echo "<td class='dayoff $sp'>";
                    
                }else{
                    echo "<td class='$sp'>";

                }
                echo $i*7+$j+1-$firstWeekWhiteDays;
                echo "<br>";
                if(!empty($sp)){
                    echo $specialDate[$date];
                }
                echo "</td>";
    
            }
        }
        echo "</tr>";   
    }
    echo "</table>";
    ?>

<style>
.cell{
    width:50px;
    height:50px;
    border:1px solid #999;
    /* display:inline-block; */
    margin:0;
    box-sizing:border-box;
}

.calendar{
    width:352px;
    height:352px;
    margin:auto;
    border:1px solid red;
    box-sizing:border-box;
    display:flex;
    flex-wrap:wrap;
    align-content:start;
    justify-content:start;
}

</style>
<?php
    $specialDate=['2021-11-15'=>'發薪水','2021-12-25'=>'聖誕節'];
   //echo $specialDate['2011-11-11'];
/* $firstDay=date("Y-m-01");
    $month=date("m"); */
    $firstDay=date("Y-m-01");
    $month=date("m");
    $firstWeekWhiteDays=date("w",strtotime($firstDay));
    $monthDays=date("t",strtotime($firstDay));
    $firstWeekDays=7-$firstWeekWhiteDays;
    $weeks=ceil(($firstWeekWhiteDays+$monthDays)/7);
    $lastWeekDays=($firstWeekWhiteDays+$monthDays)%7;
    $lastWeekWhiteDays=7-$lastWeekDays;
    $allCells=($weeks+1)*7;
    //陣列中加入首列資料
    $td=['周日','周一','周二','周三','周四','周五','周六'];

    //陣列中加入月前空白;
    for($i=0;$i<$firstWeekWhiteDays;$i++){
        $td[]="";
    }
    for($i=0;$i<$monthDays;$i++){ //決定當月有幾周
        $td[]=($i+1);
    }
   for($i=0;$i<$lastWeekWhiteDays;$i++){
        $td[]="";
    }

    ?>
<div class="calendar">
    
<?php


for($i=0;$i<$allCells;$i++){
    if(is_numeric($td[$i])){
        $date=date("Y-m-").$td[$i];
        $w=date("w",strtotime($date));
    }
    
    if($w==0 || $w==6){

        echo "<div class='dayoff cell'>";
    }else{

        echo "<div class='cell'>";
    }
    echo $td[$i];
    if(array_key_exists($date,$specialDate)){
        echo $specialDate[$date];
    }
    echo "</div>";
}

?>
</div>
</body>
</html>