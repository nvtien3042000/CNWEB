<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        if(isset($_COOKIE["username"])){
            setcookie("username", $_COOKIE["username"], time() - 1, "/");
            header("location:index.php");
        }
        
        header("location:index.php");
    ?>
</body>
</html>