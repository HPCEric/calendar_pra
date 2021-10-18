<h2>請使用迴圈列出3,5,7,11,13,17……97</h2>
<?php

for($i=3;$i<100;$i++){
    $test=false; //表示質數
    for($j=2;$j<$i;$j++){
        if($i % $j ==0){
            $test=true; //表示不是質數
        }
    }
    if($test == false){
        echo $i . ",";
    }
}


?>