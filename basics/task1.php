<?php 
#1
echo(strtoupper("aaaaaaaaaaaaaaaaaaaaaaaaa"))."<br>";


echo(strtolower("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"))."<br>";

echo(ucfirst("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa")) ."<br>";


#2 
$s= '123456'; 
echo substr(chunk_split($s, 2, ':'), 0, -1) ."<br>";

#3
$sentence = 'I need a mercedes-benz car';

$word = 'need';
if (strpos($sentence, $word) !== false) {
    echo 'Word Found!' ."<br>";
} else {
    echo 'Word Not Found!' ."<br>";
}

#4
$url = 'http://www.example.com/public_html/index.php';

$file_name = basename(parse_url($url, PHP_URL_PATH)); // pars > extract the path // basename >  get the file name from the path

echo 'File name: ' . $file_name ."<br>";

#5
$email = 'jane.smith_123@example.net';

$username = strstr($email, '@', true); 

echo 'Username: ' . $username ."<br>";

#6
$str1 = 'aaaa@bbb.com';   
echo substr($str1, -3) ."<br>";

#7

function get_password($str, $len = 0) { 
      
  // Variable $pass to store password 
  $pass = ""; 
   
  // Variable $str_length to store 
  // length of the given string 
  $str_length = strlen($str); 
 
  // Check if the $len is not provided 
  // or $len is greater than $str_length 
  // then assign $str_length into $len 
  if($len == 0 || $len > $str_length){ 
      $len = $str_length; 
  } 
 
  // Shuffle the string  
  $pass = str_shuffle($str); 
       
  // Extract the part of string 
  $pass = substr($pass, 0, $len); 
   
  return $pass;  //str_shuffle() is better than this function 
} 
$str = "GeeksForGeeks"; 
echo get_password($str, 5) . "\n<br/>";
echo "</br> ";



#8
$q = 'aaa bbb ccc ddd eee fff ggg hhh iii jjj.';
echo preg_replace('/aaa/', 'hhh', $q, 1) ."<br>";




#9





#10
$r = 'aaa bbb ccc ddd eee fff ggg hhh iii jjj.';
$arr = explode(" ", $r);
var_dump($arr);


#11
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha ."<br>";


#12
$original_string = 'The brown fox'; 
// Define the original string.
$string_to_insert ='quick'; 
// Define the string to be inserted.
$insert_pos = 4; 
// Define the position where the insertion will occur.
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0); 
// Insert the substring at the specified position in the original string.
echo $new_string."\n"; 
// Output the modified string.

#13
$number = 105040700.404789;
$numWoutZeroes = str_replace('0', '', $number);
echo "$numWoutZeroes";


#14
$my_str = 'aaa bbb ccc ddd eee';


echo str_replace("bbb", " ", $my_str);

#15

$my_str = 'aaa / / bbb / ccc ddd eee';


echo str_replace("/", " ", $my_str);

#16

  // PHP program to Remove 
  // Special Character From String
  // Function to remove the special 
  function RemoveSpecialChar($str) {

      // Using str_replace() function 
      // to replace the word 
      $res = str_replace( array( '\'', '"',
      ',' , ';', '<', '>' ), ' ', $str);

      // Returning the result 
      return $res;
      }

  // Given string
  $str = "Example,to remove<the>Special'Char;"; 

  // Function calling
  $str1 = RemoveSpecialChar($str); 

  // Printing the result
  echo $str1;



  #17
  $mys = 'The quick brown fox jumps over the lazy dog' ;


echo implode(' ', array_slice(explode(' ', $mys), 0, 5))."\n";

#18
$str1 = "2,543.12";
// Define the original string.

$x = str_replace( ',', '', $str1);
// Remove all commas from the original string.

if( is_numeric($x))
// Check if the resulting string is numeric.
{
  echo $x."\n";
  // If numeric, echo the modified string.
}




#19

for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . " ";
}



?>
