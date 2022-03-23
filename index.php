<?php

include_once "./functions.php";

// Get Result with Grade and GPA

echo getGradeWithGpa(80);
echo "<hr>";
// Get Age

echo getAge('Prince',1998,2022);

echo "<hr>";
// Get BMI

echo getBMI(74, 1.77);
echo "<hr>";

// Currency Convertor

echo getBDT(100, "USD");
echo "<hr>";

// Get Area of Rectangle, Square & Circle

echo getArea('s',7);
echo "<hr>";

//Uppercase or Lowercase

changeCase('u', 'I am prince');
echo "<hr>";

// Dynamic heading

echo heading('Laravel', 'h2', '100px', 'left', 'impact', 'orangered');