<?php 
function three($n){
    if($n%3==0){
        return 1;
    }

}
function five($n){
    if($n%5==0){
        return 1;
    }

}
function both($n){
    if($n%3==0 && $n%5==0){
        return 1;
    }

}
for($i=1;$i<101;$i++){
    if(both($i)){
        echo $i."FizzBuzz";
    }
    elseif(three($i)){
        echo $i."Fizz";
    }
    elseif(five($i)){
        echo $i."Buzz";
    }
    else{
        echo $i;
    }
    echo "<br>";
}




?>