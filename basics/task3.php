<?php
#1
echo "------- q1-------" . "<br>" . "<br>"; 


for ($x = 1; $x <= 10; $x++) {
    if ($x < 10) {
        echo "$x-"  ;
    } else {
        echo "$x" . "<br>";
    }
}

    #2
echo "------- q2-------" . "<br>" . "<br>"; 
$sum = 0;

for($x=1; $x<=30; $x++)
{
    $sum += $x;
}

echo "The sum of the numbers 0 to 30 is $sum" . "<br>";


#3
echo "------- q3-------" . "<br>" . "<br>"; 


$size = 5;

$letter = 'A';

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($j < $size - $i - 1) {
            echo 'A';
        } else {
            echo $letter . ' ';
        }
    }
    $letter++;
    echo "<br>";
}



#4
echo "------- q4-------" . "<br>" . "<br>"; 


$size = 5;

$letter = '1';

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($j < $size - $i - 1) {
            echo '1';
        } else {
            echo $letter . ' ';
        }
    }
    $letter++;
    
    echo "<br>";
}

#5
echo "------- q5-------" . "<br>" . "<br>"; 
$size = 5;

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($j == $i) {
            echo ($i + 1) . ' ';
        } else {
            echo '0 ';
        }
    }
    echo "<br>";
}
#6
echo "------- q6-------" . "<br>" . "<br>"; 


$a = 5;

$b = 1;

for($i = 1; $i <= $a ; $i++)
{
    $b *= $i ; 
}

echo "The factorial of  $a = $b"."<br>";

#7
echo "------- q7-------" . "<br>" . "<br>"; 


//example 7
function fibonacci($x) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    for ($i = 2; $i < $x; $i++) {
        $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    
    return $fibonacci;
}

// Example usage:
$x = 10; // Change the number of Fibonacci numbers to generate
$result = fibonacci($x);

echo implode(', ', $result);
echo "</br> ";
//example 8
$orange="Orange coding academy";
$counter=0;
$ar= str_split($orange);
for ($i=0;$i<sizeof($ar);$i++){
    if($ar[$i]=='a'){
        $counter++;
    }
}
echo ($counter);
echo "</br> ";
//example 9
echo"<table border=1>";
for ($i=1; $i <=6 ; $i++) { 
echo "<tr>";
for ($j=1; $j <=5 ; $j++) { 
    
    echo "<td style='padding-right:10px;'>";
    echo "$i * $j= " . $j*$i ;
    echo "</td>";
}
echo "</tr>";    
}
echo "</table>";


echo "<br>" ;

//example 10
for ($i=1; $i <= 50; $i++) { 
    if ($i % 3 == 0  && $i % 5 == 0) {
        echo "FizzBuzz" . "\t";
    }elseif ($i % 3 == 0){
        echo "Fizz" . "\t";
    }elseif ($i % 5 == 0){
        echo "Buzz" . "\t";
        
    }else {
        echo $i . "\t";
    }
}

echo "<br>" ;
//example 11
function pr($n){
    $num = 1;
    for ($i=1; $i <=$n ; $i++) { 
        for ($j=1; $j <=$i ; $j++) { 
            if($num == $n){
                
                echo $num . " ";
                return;
            }else{
                echo $num . " ";
                
            }
            $num++;
        }
        echo "<br>";
    }
}

pr(10);


echo "<br>" ;


?>



