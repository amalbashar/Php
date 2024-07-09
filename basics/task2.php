    <?php
    # 1-Write a PHP script to see if the specified year is a leap year or not
    function check($year){
    
            if (($year % 400 == 0 )|| ($year % 4 == 0 && $year % 100 != 0) ) {
                echo "$year is a leap year.";
            } else {
                echo "$year isnT a leap year." ."<br>";
            }
        }
        $year=1984;
        check($year) ;




    #2-
    /* Write a PHP script to check the season depending on the inserted temperature if the 
        temperature is below 20, we are in winter otherwise the season is summer.*/

        function season($temp){
    
            if (($temp < 20 ) ) {
                return true;
            } else {
                return false;
            }
        }
        $temp=25;
        if (check($temp)) {
            echo "We are in the winter <3 " ."<br>";
        } else {
            echo "We are in the summer" ;
        }



    
        #3.
        /* Write a PHP script to calculate the sum of the two integers. 
        If the two values are the same, then calculate the triple of their sum.*/
        
        function sum($a , $b){
    
            if (($a == $b) ) {
                return true;
            } else {
                return false;
            }
        }
        $a=5;
        $b=5;
        if (sum($a,$b)) {
            echo ( $a + $b ) ."<br>" ;
            echo 3*( $a + $b) ."<br>";
        
        } else {
            echo "the two values are not the same  " ."<br>";
        }





        #4.
        /* Write PHP to check if the sum of the two given numbers equals 30,
        if the condition is true the return their sum otherwise return false */

        function checksum( $c , $d){
            if( ($c+$d == 30)) { 
                return true;
            } 
            else { 
                return false;
            }
        
        }
        $c=5;
        $d=6;
        if ( checksum( $c , $d)) { 
            echo "30 " ."<br>";
        }
        else { 
            echo " false" ."<br>"; 
        }


        #5. Write in PHP script to check if the given positive number is a multiple of 3.

        function multiples( $e){
        if (( $e % 3 == 0 )) {
                return true;
            }
            else { 
                return false;
            } 
            }
                $e = 9;
                if ( multiples($e)) { 
                echo "$e is  a multiple of 3 " ."<br>";
                }
                else { 
                echo "$e is not a multiple of 3" ."<br>";
                }




            #6. Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
                function inrange ($f) {
                if (( 20 <= $f && $f <= 50)){
                    return true;
                }
                else { 
                    return false;
                }

            } 
            $f=25;
        if ( inrange ($f) ){
            echo " $f is in the range of [20-50] " ."<br>";
        }
        else { 
            echo " $f is not in the range of [20-50] " ."<br>";
        }
        
        

        #7. Write PHP script to find the largest number between the three integers

    function largest( $g , $h , $i) { 
        $largest= $g;
        if ( $h > $largest) {
            $largest = $h;
        }
        if ( $i > $largest) { 
            $largest = $i;
        }
        return $largest;
    }
    $g= 15;
    $h= 20; 
    $i= 25; 

    $largest = largest( $g , $h , $i);
    echo " largest num is $largest" ."<br>";



    #8. Write PHP script to calculate the monthly electricity bill according to these rules
    /*a. For first 50 units - 2.50 JOD/Unit
    b. For next 100 units - 5.00 JOD/Unit
    c. For next 100 units - 6.20 JOD/Unit
    d. For units above 250 - 7.50 JOD/Unit */
    
    function bill( $units) {
        $bill= 0;
        if ($units <= 50) {
            $bill = $units * 2.50;}
            elseif ($units <= 150) {
                $bill = (50 * 2.50) + (($units - 50) * 5.00);
            }
            elseif ($units <= 250) {
                $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
            }
            else {
                $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
            }
            return $bill;
        } 

            $units = 300;
            $bill = bill($units);
            echo "The total electricity bill for $units units is: " . $bill . " JOD" ."<br>";




            #9. Write php script to make a calculator, the calculator should contain the four main operations
            /*e. Addition
    f. Subtraction
    g. Multiplication
    h. Division*/
    
    function calc($num1, $num2, $operation) {
        if ($operation == 'add') {
            return $num1 + $num2;
        } elseif ($operation == 'subtract') {
            return $num1 - $num2;
        } elseif ($operation == 'multiply') {
            return $num1 * $num2;
        } elseif ($operation == 'divide') {
            if ($num2 == 0) {
                return "Error: Division by zero";
            }
            return $num1 / $num2;
        } else {
            return "Error: Invalid operation";
        }
    }

    $num1 = 10;
    $num2 = 5;
    $operation = 'add'; 

    $result = calc($num1, $num2, $operation);
    echo "Result: $result" ."<br>";




    #10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
    function eligiblity( $age ) { 
        if  (  $age < 18) {
            return false; 
        }
        else { 
            return true; 
        }
    }
    $age = 20;
    if ( eligiblity( $age ) ){
    echo "you can vote" ."<br>";  }
    else { 
        echo  "you canT vote" ."<br>"; 
    }








    #11. Write php script to check whether a number is positive, negative or zero
    function  checknum($number){
        if(  $number > 0) {
            echo " $number is positive" ."<br>";
        }
        elseif ($number < 0){ 
                echo " $number is negative" ."<br>";
        }
        else{ 
            echo "$number is zero." ."<br>";
        }
    }
    $number = 10;
    checknum($number);







    #12. Write a PHP to find the grade for the student, after calculating the average of his score in all the subject

    
    function grade( $average ){ 
        if ($average >= 90) {
            echo 'A' ."<br>";
        } elseif ($average >= 80) {
            echo 'B' ."<br>";
        } elseif ($average >= 70) {
            echo 'C' ."<br>" ;
        } elseif ($average >= 60) {
            echo 'D'."<br>";
        } else {
            echo 'F' ."<br>"; 
        }
    }
    $average=64;
    grade( $average );
    ?>
