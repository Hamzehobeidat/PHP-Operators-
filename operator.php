<?php
echo "<table border = '1'>";
    echo "<tr>";
        echo "<th>Funtion</th>";
        echo "<th>Result</th>";
    echo "</tr>";

echo "<hr>";

echo "write a php script to see if the specified year is a leap year or not" . "<br><br>";

function year_check($my_year) {
  if ($my_year % 4 == 0) {
    echo " It is a leap year";
  }else {
    echo " It is not a leap year";
  }
}
$my_year = 2020;
year_check($my_year);



echo "<hr>";

echo "Write a PHP script to check the season depending on set temperature if the
temperature is below 20 we are in winter otherwise the season is summer." . "<br><br>";

function season_check($my_temperature) {
  if ($my_temperature > 20) {
    echo " the season is summer";
  }else {
    echo " the season is winter";
  }
}
$my_temperature = 25;
season_check($my_temperature);


echo "<hr>";
echo "Write a PHP script to calculate the sum of the two mapped integers. If the two
values are the same, then three times their sum is returned." . "<br><br>";

function sum ($num1, $num2) {
  if ($num1 === $num2) {
    return $num1 * 3;
  }else {
    return $num1 + $num2;
  }
}
$num1 = 20;
$num2 = 20;
echo sum($num1, $num2);


echo "<hr>";
echo " Write a PHP script to get the absolute difference between n and 100. If n is
greater than 100, return triple the absolute difference.
" . "<br><br>";

function absolute ($num1) {
// $result =  100 -  $num1;
  if ($num1 > 100) {
    return ($num1 - 100) * 3;
  }else {
    return 100 - $num1;
  }
}
$num1 = 50;

echo absolute($num1);




echo "<hr>";
echo "Write PHP script to check two integers, and return true if one is 30 or if their sum
is 30." . "<br><br>";

function check ($num1, $num2) {
$sum =  $num2 + $num1;
  if ($num1 == 30 || $num2 == 30 || $sum == 30) {
    return true;
}else {
  return "error";
}
}
$num1 = 30;
$num2 = 50;

echo check($num1, $num2);



echo "<hr>";
echo "Write a PHP script to check an integer and return an integer if it is within 10 of
100 or 200." . "<br><br>";

function test($x)
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89));


echo "<hr>";
echo "Write in PHP script to check if the given positive number is a multiple of 3 or a
multiple of 7" . "<br><br>";

function multiple($x)
{
   if($x % 3 == 0 ){
     echo $x . " is a multiple of 3 "."<br>";
   }elseif($x % 7 == 0) {
     echo $x . " a multiple of 7"."<br>";
   }

}
multiple(15);
multiple(10);
multiple(14);
multiple(144);
multiple(70);





echo "<hr>";
// // echo "Write a PHP script to create a new string where "if" is added to the front of a
// // particular string. If the series really begins with "if," then return the string
// // unchanged.
// " . "<br><br>";

// function multiple($x)
// {
//    if($x % 3 == 0 ){
//      echo $x . " is a multiple of 3 "."<br>";
//    }elseif($x % 7 == 0) {
//      echo $x . " a multiple of 7"."<br>";
//    }
//
// }

echo "<hr>";
// echo " Write a PHP script to remove the character in a specific position from a specific
// string. The position selected in range 0..1 string length inclusive" . "<br><br>";
// $rees = multiply(14);
// echo "<tr>";
//
// echo  "<td>check14</td>";
// echo  "<td>$rees</td>";
//
// echo "</tr>";
//
// $rees = multiply(81);
// echo "<tr>";
//
// echo  "<td>check81</td>";
// echo  "<td>$rees</td>";
//
// echo "</tr>";

function checkifstr($str){
    if (substr($str,0,2) === "if")
        {
          return $str;
         }else {
            return "if," . $str;
         }
    }

$chec1 = checkifstr("if i camee to jordan");

echo "<tr>";

echo  "<td>checkif</td>";
echo  "<td>$chec1</td>";

echo "</tr>";


$chec1 = checkifstr("i love if i camee to jordan");

echo "<tr>";

echo  "<td>checkif2</td>";
echo  "<td>$chec1</td>";

echo "</tr>";

function removespcstr($str, $pos){

   // $result1 = substr($str,$pos,strlen($str));
   $str1 = substr($str,0,$pos);
    $str2 = substr($str,($pos+1),strlen($str));
    return $str1.$str2;
}

$chec2 = removespcstr("Romove v from string",4);

echo "<tr>";

echo  "<td>removespcstr</td>";
echo  "<td>$chec2</td>";

echo "</tr>";

function rang100($n1,$n2){

    if (($n1 >=100 && $n1 <= 200) || ($n2 >=100 && $n2 <= 200) ){
        return "true";
    }else {
        return "false" ;
    }
}

$test135 = rang100(135,250);

echo "<tr>";

echo  "<td>rang100-200</td>";
echo  "<td>$test135</td>";

echo "</tr>";

function rang2050($n3,$n4){
    if (($n3 >=20 && $n3 <= 50) && ($n4 >=20 && $n4 <= 50)){
        return "true";
} else {
    return "false";
}
}
$test135_2 = rang2050(30,60);

echo "<tr>";

echo  "<td>rang20-50</td>";
echo  "<td>$test135_2</td>";

echo "</tr>";

function largestnum($x,$y,$z){
    if($x > $y && $x > $z) {
        return "the largest num is $x";
        }
        elseif($y > $z){
            return "the largest num is $y";
        }else{
            return "the largest num is $z";
        }
    }


$largcheck = largestnum(18,50,150);

echo "<tr>";

echo  "<td>largestnum18-50-150</td>";
echo  "<td>$largcheck</td>";

echo "</tr>";


$largcheck = largestnum(18,250,150);

echo "<tr>";

echo  "<td>largestnum18-250-150</td>";
echo  "<td>$largcheck</td>";

echo "</tr>";


$largcheck = largestnum(180,50,150);

echo "<tr>";

echo  "<td>largestnum180-50-150</td>";
echo  "<td>$largcheck</td>";

echo "</tr>";

function closto100($a,$b){
    if(abs($a - 100) < abs($b - 100)){
        return "closest is $a ";
    }
    elseif(abs($a - 100) == abs($b - 100)) {
        return "0";
    }else {
        return "closest is $b ";
    }

}
$closenum = closto100(120,110);

echo "<tr>";

echo  "<td>closesestnum120-110</td>";
echo  "<td>$closenum</td>";

echo "</tr>";

$closenum = closto100(120,120);

echo "<tr>";

echo  "<td>closesestnum120-120</td>";
echo  "<td>$closenum</td>";

echo "</tr>";


$closenum = closto100(140,200);

echo "<tr>";

echo  "<td>closesestnum140-200</td>";
echo  "<td>$closenum</td>";

echo "</tr>";


function accept($n1,$n2){
    if($n1 == 5 || $n2 == 5 ){
        return true;
    }
    if ($n1 + $n2 == 5 || abs($n1 - $n2) == 5)
    {
      return true;
    }
}

$final = accept(7,6);
echo "<tr>";

echo  "<td>final7-6</td>";
echo  "<td>$final</td>";

echo "</tr>";

$final = accept(7,5);
echo "<tr>";

echo  "<td>final7-5</td>";
echo  "<td>$final</td>";

echo "</tr>";

$final = accept(2,3);
echo "<tr>";

echo  "<td>final2-3</td>";
echo  "<td>$final</td>";

echo "</tr>";






















?>
