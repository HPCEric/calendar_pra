<?php


echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";
echo "******<br>";

for($i=0;$i<6;$i++){

    echo "*<br>";
}


for($j=1;$j<=10;$j++){
    for($i=0;$i<$j;$i++){
        echo "*";
    }
 echo "<br>";
}


echo "<br><hr>";

//echo "手打的******<br>";

/* 起始值=> $i=0;
條件 => 星星數 $i<星星數(1~6)
遞增值=> $i=$i+1; */
/*
起始值:$a = 6 
條件: $a>0  $a>=1
遞增值:$a=$a-1


*/

for($a = 8 ; $a>0 ;$a=$a-1){

    for($i=0;$i<$a;$i++){

        echo "*";

    }
    echo "<br>";
}

//echo "*****<br>";
/* for($i=0;$i<$a;$i++){
    echo "*";
}
echo "<br>";
//echo "****<br>";
4
for($i=0;$i<$a;$i++){，
    echo "*";
}
echo "<br>";
//echo "***<br>";
for($i=0;$i<$a;$i++){
    echo "*";
}
echo "<br>";
//echo "**<br>";
for($i=0;$i<$a;$i++){
    echo "*";
}
echo "<br>";
//echo "*<br>";
for($i=0;$i<$a;$i++){
    echo "*";
}
echo "<br>"; */
echo "<hr>";
echo "&ensp;&ensp;&ensp;&ensp;*<br>";
echo "&ensp;&ensp;&ensp;***<br>";
echo "&ensp;&ensp;*****<br>";
echo "&ensp;*******<br>";
echo "*********<br>";

$row=5;
for($j=1;$j<=$row;$j++){
    $fontsize=30-$j*2;
    for($i=0;$i<($row-$j);$i++){
        echo "<span style='color:red;font-size:{$fontsize}px'>&ensp;</span>";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "<span style='color:blue;font-size:{$fontsize}px'>*</span>";
    }
    echo "<br>";
}
/* //--------------------
$row=2;
for($i=0;$i<(5-$row);$i++){
    echo "&ensp;";
}

for($i=0;$i<(2*$row-1);$i++){
    echo "*";
}
echo "<br>";
//--------------------
$row=3;
for($i=0;$i<(5-$row);$i++){
    echo "&ensp;";
}

for($i=0;$i<(2*$row-1);$i++){
    echo "*";
}
echo "<br>";
//--------------------
$row=4;
for($i=0;$i<(5-$row);$i++){
    echo "&ensp;";
}

for($i=0;$i<(2*$row-1);$i++){
    echo "*";
}
echo "<br>";
//--------------------
$row=5;
for($i=0;$i<(5-$row);$i++){
    echo "&ensp;";
}

for($i=0;$i<(2*$row-1);$i++){
    echo "*";
}
 */

?>


<h2>菱形</h2>
<hr>
<?php
$row=18;

if($row%2 == 0){
     $row=$row+1;
 }

for($i=1;$i<=$row;$i++){

    $mid=($row+1)/2;

    if($i<=$mid){
        $stars=2*$i-1;
        $space=$mid-$i;
    }else{
        $stars=($row-$i)*2+1;
        $space=($mid-1)-($row-$i);
    }

    for($k=1;$k<=$space;$k++){

        echo "&ensp;";
    }
    for($j=1;$j<=$stars;$j++){
        echo "*";
    }

    echo "<br>";
}



?>