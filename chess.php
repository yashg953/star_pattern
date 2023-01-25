<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STYLE>
        .table{
            width: 270px; 
            
            border-collapse: collapse;
           
            border: 1px solid black;
        }
        .td{
            height: 30px;
            width : 30px;
        }
        .dark{
    background-color: black;
}
    </STYLE>
    
</head>
<body>
<table >
<?php
echo "<table class='table'>";
for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){
        if($i%2!=0){
            if($j%2!=0){
                echo "<td  class='dark td'></td>";
            }
            else {
                echo "<td class='td'></td>";
            }
        }
        if($i%2==0){
            if($j%2==0){
                echo "<td  class='dark td'></td>";
            }
            else {
                echo "<td class='td'></td>";
            }

        }
        

        

    }
    echo "</tr>";

}



?>
</table>
</body>
</html>