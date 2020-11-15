<?php include("../index.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../index.css"/>
</head>
<body>
    <div style="margin: 50px auto; width: 25%;">
    <?php if(!isset($_GET["find"])) echo '<input type="button" onclick="back()" value="Back">' ?>
    <script>
        function back(){
            location.href="../index.php";
        }
    </script>
    <h2>Danh Sách Sinh Viên</h2>
    <?php
        for($i = 0; $i < sizeof($students); $i++){
            echo "<p>" .($i+1)."- <a href='./C_DisplayStudent.php?ID=" .$students[$i]->id."'>".$students[$i]->name."</a></p>";
        }
    ?>
    </div>
    <?php echo "</div></div></div></div>";?>
</body>
</html>