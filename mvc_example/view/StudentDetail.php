<?php include("../index.php"); ?>
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
    <input type="button" onclick="back()" value="Back">
    <script>
        function back(){
            history.back();
        }
    </script>
    <h2>Chi Tiết Sinh Viên</h2>
    <?php
        echo "<p>Name: ".$student->name."</p>";
        echo "<p>Age: ".$student->age."</p>";
        echo "<p>University: ".$student->university."</p>";
    ?>
</div>
<?php echo "</div></div></div></div>";?>
</body>
</html>