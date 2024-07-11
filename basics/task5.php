<?php 

echo " -----q1------<br>  <br>";
$colors= array("red" , "green" , " white"); 

echo  "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0]
carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. -
Richard M. Nixon  <br>  <br> ";



echo " -----q2------<br>  <br>";
function colorSort($Array)
{
    $color = array('white', 'green', 'red');
    echo "<ul>";
    for ($i = 0; $i < count($color); $i++) {
        echo "<li>$color[$i]</li>";
    }
    echo "</ul>";
}
colorSort($color);

echo " -----q3------<br>  <br>";
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" =>
    "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);


foreach ($cities as $contry => $contry_value) {
    echo "The capital of $contry is $contry_value <br>  <br> ";
    
}
echo " -----q4------<br>  <br>";


$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color);
echo '<br><br>';


echo " -----q5------<br>  <br>";

$nArray = array();
function Add($nArray, $addValue, $Location)
{
    array_splice($nArray, $Location - 1, 0, $addValue);

    echo '<br>';
    for ($i = 0; $i < count($nArray); $i++) {
        echo $nArray[$i] . " ";
    }
};
Add([1, 2, 3, 4, 5], "$", 4);
echo '<br><br>';

echo " -----q6------<br>  <br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $i => $i_value) {
    echo  $i . " = " . $i_value;
    echo "<br>";
};

echo " -----q7------<br>  <br>";

function AvrTemp($Temp)
{

    $ave = array_sum($Temp) / count($Temp);
    echo "Average Temperature is : $ave <br>";
    $newArray = array_unique($Temp);
    sort($newArray);

    echo  "List of Five lowest temperatures : ";
    for ($i = 0; $i < 5; $i++) {
        echo $newArray[$i] . ' ';
    }
    echo "<br>";
    echo  "List of Five highest temperatures : ";
    for ($i = count($newArray) - 1; $i > (count($newArray) - 6); $i--) {
        echo $newArray[$i] . ' ';
    }
    echo "<br>";
}
AvrTemp([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);
echo "<br> <br> ";


echo " -----q8------<br>  <br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

echo "<pre>";
print_r(array_merge($array1,$array2)); 
echo "</pre>";
echo " -----q9------<br>  <br>";


/*function changeStringsToUpperCase($array)
{
    foreach ($array as $key => $value) {
        if (is_string($value)) {
            $array[$key] = strtoupper($value);
        }
    }
    return $array;
}

$colors = array("red", "blue", "white", "yellow");

$upperColors = changeStringsToUpperCase($colors);

echo implode(", ", $upperColors);*/

#####
$colors = array("red", "blue", "white", "yellow");
$toUpperCase = array_map('strtoupper', $colors);
echo implode(' ', $toUpperCase);
echo "<br>";



echo " -----q10------<br>  <br>";
$colors = array("red", "blue", "white", "yellow");
$tolowerCase = array_map('strtolower', $colors);
echo implode(' ', $tolowerCase);
echo "<br>";


echo " -----q11------<br>  <br>";



$array = [200, 204, 208, 212, 216, 220, 224, 228, 232, 236, 240, 244, 248];

foreach ($array as $number) {
    if ($number > 200 && $number < 250 && $number % 4 == 0) {
        echo $number . "<br>";
    }
}

echo " -----q12------<br>  <br>";


$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$new_array = array_map('strlen', $words);

echo "The shortest array length is " . min($new_array) . "<br>";
echo "The longest array length is " . max($new_array) . "<br>";


echo " -----q13 ------<br>  <br>";

$numbers = range(11, 20);
shuffle($numbers);
$RandomNumbers = array_slice($numbers , 0 , 10);
echo implode(" ", $RandomNumbers) ; 
echo "<br>";

echo " -----q14 ------<br>  <br>" ;

$array1 = array(2, 0, 10, 12, 6);
sort($array1);
$array_without_0 = array_diff($array1, [0]);
$lowest = reset($array_without_0);
echo $lowest ;
echo "<br>";



echo " -----q15------<br>  <br>";

$numbers = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
rsort($numbers);
print_r($numbers);
echo "<br>";


echo " -----q16------<br>  <br>";

echo "<br>";
echo "<br>";
$number =1.1555;
$number = strval($number);
$number = str_split($number);
$newNumber =array();
function floorNumber($number , $prec , $sep){
for($i = 0 ; $i < count($number)  ;$i++){
    if(!is_numeric($number[$i])){
        $number[$i] = $sep;
        break;
    }
    
}
for($i=0 ; $i < count($number) - $prec; $i++){
    $newNumber[$i] = $number[$i];
}
echo "the array --->";
echo implode("" ,$newNumber);
// print_r($newNumber);
}
floorNumber($number , 2,".");
echo "<br>";
echo "<br>";

echo " -----q17------<br>  <br>";
$list1 = "4,5,6,7";
$list2 = "4,5,7,8";
$arr1 = explode(',', $list1);
$arr2 = explode(',', $list2);
$merge = array_merge($arr1, $arr2);
$unique = array_unique($merge);
$mergedList = implode(',', $unique);
echo $mergedList;
echo "<br>" ;

echo " -----q18------<br>  <br>";

$numbers = [4, 5, 6, 7, 4, 7, 8];
$unique = array_unique($numbers);
echo implode(" ", $unique);
echo "<br>";

echo " -----q19------<br>  <br>";

$array1 = ['a','1','2','3','4'];
$array2 = ['a','3'];

$result = array_diff($array2 , $array1);
if ($result == []){
    echo " array2 is a subset array from array1";
}
else{
    echo " array2 is not a subset array from array1";
}


?>