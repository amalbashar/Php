<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form   >
    
    <input type="email" name="email" > 
    <input type="password" name="password"> <br>
    <input type="submit" value="enter"> 
</form>
<?php
echo "your email is:" . $_GET["email"] . "<br>";
echo "your password is:" . $_GET["password"] . "<br>";
#  method="GET" action="A.php"
?>


</body>
</html>

