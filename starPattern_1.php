<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" METHOD="POST">
    NO OF LINES : <input type="number" value ="<?php echo $a ?>" name="lines">
    <input type="submit" value="submit" >
    <br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $a = $_POST['lines'];

    }

$i ="";
$j = "";
for($i =1 ; $i<=$a;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
      
    }
    echo "<br>";
}



?>


</form>
</body>
</html>