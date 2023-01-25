<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        table {
            border:1px solid black;
            border-collapse:collapse;
        }
        #cs {
            
            border: 1px solid black;
        }
     </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?> "METHOD="GET">
    NUMBER : <input type="number" name="num" value ="<?PHP echo $num;?>">
    <input type="submit" value="submit">
    </form>
    <?php
    echo "<table>";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        
        $num = $_GET['num'];
    }
    for($i=1;$i<=$num;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            echo "<td id='cs'>".$i*$j."</td>";
        }
        echo "</tr>";
    }
    ?>

</body>
</html>