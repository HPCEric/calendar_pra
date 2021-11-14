<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$weight = $_GET['weight'];
$height = $_GET['height'];
$height = $height/100;
$bmi = $weight / ($height*$height);
?>
<form method="GET" action="">
        <label for="weight">體重</label>
        <input type="number" name="weight" id="weight" value="">
        <label for="height">身高</label>
        <input type="number" name="height" id="height" value="">
<br>
        <button type="reset">重置</button>
        <button type="submit">送出</button>
     
</form>

</body>
</html>
