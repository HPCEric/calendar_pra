<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列練習</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> 建立陣列練習 <a href="index.html">回目錄</a></h1>
<?php
$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['amo']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['john']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['peter']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['hebe']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];

echo "<pre>";
print_r($name);
echo "</pre>";

print_r($name['judy']);

$students=array_keys($name);

echo "<pre>";
print_r($students);

echo "</pre>";

// $subject=array_keys($name['judy']);
// echo "<pre>";
// print_r($subject);

// echo "</pre>";
//  echo "judy的數學成績為".$name['judy']['數學']."分"
?>    
</body>
</html>