<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <!-- <form action="testform.php" method="get"> -->
    <!-- <form action="testform.php" method="post"> -->
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Name: <input type="text" name="fname"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php
    
     if(isset($_POST['save'])){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
     }

    ?>
</body>
</html>