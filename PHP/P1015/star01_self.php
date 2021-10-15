<h1>菱形</h1>

<?php

$row=9; // 列數控制項

if($row%2 == 0){
    $row=$row+1;
} // 判斷列數為奇數

for($i=1;$i<=$row;$i++){

    $mid=($row+1)/2; // 找到中間列

    if($i<=$mid){ // 上半部正三角形
        $stars=2*$i-1;
        $space=$mid-$i;
    }else{ // 下半部倒正三角形
        $stars=($row-$i)*2+1;
        $space=($mid-1)-($row-$i);
    }
// 以上為判斷星數和空白個數的條件
    for($k=1;$k<=$space;$k++){

        echo "&ensp;";
    }
// 印空白的部分
    for($j=1;$j<=$stars;$j++){
        echo "*";
    }
// 印星星的部分
    echo "<br>";
}
?>

<h1>菱形2</h1>

<?php

$row=10;
// 正三角形部分 
for($i=0;$i<$row;$i++){ // $i<$row 時執行以下步驟
    for($j=0;$j<($row-$i);$j++){ // 印出空白的條件 
        echo "&ensp;";
        }
// 印出($row-$i)個空白後結束該迴圈 進行下一個迴圈
        for($j=0;$j<(2*$i-1);$j++){ // 印出星星的條件(印出2$i-1顆星星後 結束該迴圈)
            echo "*";
        }
        echo "<br>";
}
// 倒正三角形部分
for($i=0;$i<$row;$i++){
    for($j=0;$j<=$i-1;$j++){
        echo "&ensp;";
        }
        for($j=0;$j<2*($row-$i)-1;$j++){
            echo "*";
        }
        echo "<br>";
}

?>

<h1>矩形</h1>

<?php

$row=6;
for($i=1;$i<=$row;$i=$i+1){

    for($j=1;$j<=$row;$j++){
                
        if($i == 1 || $i == $row){
            echo "*";
        }else{
            if($j == 1 || $j == $row){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
    }
echo "<br>";
}
?>

<h1>矩形對角線</h1>
<?php

$row=7;
for($i=1;$i<=$row;$i=$i+1){

    for($j=1;$j<=$row;$j++){
                
        if($i == 1 || $i == $row){
            echo "*";
        }else{
            if($j == 1 || $j == $row || $j == $i || $j == $row+1-$i){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
    }
echo "<br>";
}

?>