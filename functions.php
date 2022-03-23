<?php

/* 
Result with Grade and GPA
*/

function getGradeWithGpa ($marks) {
    if ($marks >= 0 && $marks <= 32) {
        echo "<h1 style='color: red'>You are Failed and your GPA is 0</h1>";
    } elseif ($marks >= 33 && $marks <= 39) {
        echo "<h1 style='color: orangered'>You have Got D and your GPA is 1</h1>";
    } elseif ($marks >= 40 && $marks <= 49) {
        echo "<h1 style='color: darkorange'>You have Got C and your GPA is 2</h1>";
    } elseif ($marks >= 50 && $marks <= 59) {
        echo "<h1 style='color: orange'>You have Got B and your GPA is 3</h1>";
    } elseif ($marks >= 60 && $marks <= 69) {
        echo "<h1 style='color: yellow'>You have Got A- and your GPA is 3.5</h1>";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo "<h1 style='color: greenyellow'>You have Got A and your GPA is 4</h1>";
    } elseif ($marks >= 80) {
        echo "<h1 style='color: green'>You have Got A+ and your GPA is 5</h1>";
    } else {
        echo "<h1 style='color: red'>Invalid Result</h1>";
    }
}

/* 
Get Age
*/

function getAge($name, $birthYear, $currentYear){
    $age = $currentYear - $birthYear;
    return "<h1>Hi! {$name}, Your age is {$age}</h1>";
}

/* 
Get BMI
*/

function getBMI($weight, $height){
    $bmi = $weight / ($height * $height);

    if ($bmi < 18.5){
        echo "You are underweight";
    }elseif ($bmi >= 18.5 && $bmi <=24.9){
        echo "You are Normal";
    }elseif($bmi>=25 && $bmi <= 29.9){
        echo "Your are Overweight";
    }else if ($bmi >=30){
        echo "You are Obese";
    }
}

/* 
Currency Convertor
*/

function getBDT($amount, $currency){



switch ($currency) {
    case "USD" :
        $rate = 84;
        break;
    case "GBP" :
        $rate = 113;
        break;
    case "CAD(Canadian Dollar)" :
        $rate = 66;
        break;
    case "Won" :
        $rate = 0.07;
        break;
    case "Euro" :
        $rate = 95.21;
        break;
    default:
        $rate = 0;
        break;
}

$total_amount = $amount * $rate;
return "<h1>$amount $currency = $total_amount BDT</h1>";
}

/* 
Area Calculation
*/
function getArea( $type, $length, $width = null){
    $area= '';
    $area_type = '';

switch($type){
    case 'r':
        $area= $length * $width;
        $area_type = 'Rectangle';
        break;
    case 's':
        $area= $length * $length;
        $area_type = 'Square';
        break;
    case 'c':
        $area= 3.1416 * ($length * $length);
        $area_type = 'Circle';
        break;
    default:
        $area= 'undefined';
        $area_type = 'undefined';
}

    return "Area of this {$area_type} is {$area}";
}



/* 
Dynamic Headline
*/
function heading($title=null, $type= 'h1', $fs=null, $align='center', $ff= 'arial', $color='red'){
return "<{$type} style='text-align: {$align}; font-family: {$ff}; color: {$color}; font-size: {$fs};'>{$title}</$type>";
}


/* 
Lowercase and Uppercase Function
*/

function changeCase($type, $text= null){
    $text_type = '';

    switch($type){
        case 'u':
            $text_type= 'uppercase';
            break;
        case 'l':
            $text_type= 'lowercase';
            break;
        default:
        $text_type= 'uppercase';
    }
    echo "<span style='text-transform: {$text_type};'>{$text}</span>";
}