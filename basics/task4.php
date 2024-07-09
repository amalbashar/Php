
<?php
#<!-- Q1 -->

$number = 49;
if  ($number ==2  || $number == 3 ||  $number == 5 ) {
    echo $number . "is  a prime number" . "<br>";

}
else if($number%2 == 0 || $number%3 == 0 || $number%5 == 0 || $number <= 1) {
    echo $number . "is not a prime number" . "<br>";
}
else{
    echo $number . "is  a prime number" . "<br>";}
     


#<!-- Q2 -->

echo "------- q2-------" . "<br>" . "<br>"; 


$word = "remove";
$reverse = strrev($word);
echo $reverse . "<br>" ; 


#<!-- Q3 -->
echo "------- q3-------" . "<br>" . "<br>"; 


$sentence = "Hello world";
$updatedSentence = strtolower($sentence);
if ($sentence === $updatedSentence) {
    echo "Your String is Ok" . "<br>";
}
else{
    echo "Your String is not Ok" . "<br>";
}


#<!-- Q4 -->
echo "------- q4-------" . "<br>" . "<br>"; 


$x = 12 ;
$y = 10 ;
$saveX = $x ; 
$x = $y ;
$y = $saveX ;
echo "y=$y and x=$x" . "<br>";


#<!-- Q5 -->
 echo "------- q5-------" . "<br>" . "<br>"; 


$Number = "407";
$power1 = pow($Number[0],3);
$power2 = pow($Number[1],3);
$power3 = pow($Number[2],3);
$sum = $power1 + $power2 + $power3 ; 
if($sum == $Number){
    echo "$Number is Armstrong Number" . "<br>" ;
}
else{
    echo "$Number is not Armstrong Number" . "<br>" ;
}


#<!-- Q6 -->
echo "------- q6-------" . "<br>" . "<br>"; 


$sentence = "Eva, can I see bees in a cave?";
$sentence = strtolower($sentence);
$sentence = preg_replace('/[^a-z0-9]/', '', $sentence);
$sentence = trim($sentence);
$reversedSentence = strrev($sentence);
if ($sentence == $reversedSentence) {
    echo "Yes it is a palindrome";
}
else{
    echo "No it is not a palindrome";
}
?>
