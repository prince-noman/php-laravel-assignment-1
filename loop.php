<?php


//Increment
for($i = 10000, $j =1; $i<10100; $i+=2, $j++){
echo "{$j}. Loop Value is : $i";
echo "<hr>";
}


//Decrement
for($i = 10000, $j =1; $i>9900; $i-=2, $j++){
    echo "{$j}. Loop Value is : $i";
    echo "<hr>";
    }

// Numbers divided by 3 and 4

for ($i=1; $i<=500; $i++){
    if ($i%3 ==0 && $i%4==0){
        echo "{$i} is divided by 3 and 4";
        echo "<hr>";
    }
}

// Loop breaks if it finds any number divided by 11

for($i=1; $i<1000; $i+=3){
    if ($i%11==0){
        break;
    }else{
        echo "{$i} is not divided by 11";
        echo "<hr>";
    }
}

// Namota 2,3,4,5

for($i=1;$i<=10;$i++){
    $n = 2 * $i;
    echo "2 X {$i} = $n";
    echo "<hr>";
}

for($i=1;$i<=10;$i++){
    $n = 3 * $i;
    echo "3 X {$i} = $n";
    echo "<hr>";
}

for($i=1;$i<=10;$i++){
    $n = 4 * $i;
    echo "4 X {$i} = $n";
    echo "<hr>";
}

for($i=1;$i<=10;$i++){
    $n = 5 * $i;
    echo "5 X {$i} = $n";
    echo "<hr>";
}