<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form> 
            <input type="text" name="num1" placeholder="firt number">
            <input type="text" name="ope"  placeholder="What operator do you want to use" >
            <input type="text" name="num2" placeholder="second number"> <br> 
        <br>
            <button type=" submit" name="submit" value="submit">  calculate</button>
        </form>
        
        <?php
        $start_time = microtime(true);


            ####################
                  


#cal**********************************
        if (isset( $_GET['submit'])){ 
            $fnum= $_GET['num1'];
            $operator= $_GET['ope'];
            $snum= $_GET['num2'];
        if (  $operator == "+"){ 
            echo  " the answer is:" . $fnum + $snum  ; 
                echo "<br>";
        }
        elseif ( $operator == "-") {
            echo " the answer is:" . $fnum - $snum;
                echo "<br>";
        }
        elseif ( $operator == "*") {
            echo " the answer is:" . $fnum * $snum;
            echo "<br>";
        }
        elseif ( $operator == "/") {
            echo " the answer is:" . $fnum / $snum;
                echo "<br>";
        }
        else {
            echo "Make sure your inputs are correct";
                echo "<br>";
        }


        echo "<br>" . "<br>";



        ####################




        $end_time = microtime(true);
        $execution_time = $end_time - $start_time;
        echo "Time taken to execute script: " . $execution_time . " seconds.";
        }
        ?>
        <?php 

echo "<br>" . "<br>";



        ####################



#******refresh
        session_start();
        if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views'] + 1;
        }else{
            $_SESSION['views'] = 1;
        }
        



        echo "Total page views = " . $_SESSION['views'];
        echo "<br>" . "<br>";



       ####################

#******time
echo "your req started at " . $date = date("H:i:s");

####################
echo "<br>" . "<br>";
 
#******time
 echo $_SERVER['HTTP_HOST']; 
 
 echo $_SERVER['SERVER_NAME'];
 #######################################
 
 echo "<br>" . "<br>";



#****** #visitors
session_start();


if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

$_SESSION['counter']++;

echo "<h1>Visitor Count: {$_SESSION['counter']}</h1>";


?>


        </body>
        </html>