<!DOCTYPE html>
<body>
    <form >
<input type="search" name="search">
<input type="submit" value="GO">

    </form>
<?php
  $url = $_GET['search'];
    header("Location: $url");
?>

</body>
</html>