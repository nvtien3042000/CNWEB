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
    <div  style="margin: 50px auto; width: 40%;">
    <input type='button' value='Back' onclick='homeBack()' style='margin-left: 17px;'>
    <script>
        function homeBack(){
            location.href = "../index.php";
        }
    </script>
        <form action="../controller/C_FindStudent.php" method="get">
            <table cellspacing=10>
                <colgroup>
                    <col width = "150">
                    <col width = "150">
                    <col width = "150">
                    <col width = "150">
                </colgroup>
                <caption><h1>Tìm Kiếm Sinh Viên</h1></caption>
                <tr>
                    <td><input type="radio" name="findCheck" value="name" checked
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "name") echo " checked" ?>>Hoten</td>
                    <td><input type="radio" name="findCheck" value="age"
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "age") echo " checked" ?>>Tuoi</td>
                    <td><input type="radio" name="findCheck" value="university" 
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "university") echo " checked" ?>>Truong</td>
                </tr>
                
                <tr>
                    <td colspan="4" style="text-align: left;">
                        <input type="text" style="width: 200px; margin-left: 5px;" name="input" 
                        value="<?php if(isset($_GET["input"])){echo $_GET["input"];}?>">
                        <input type="submit" name="find" value="Search" id="find">
                    </td>
                </tr>
            </table>
            
        </form>
    </div>
    <?php
        if(isset($_GET["find"])){
            echo '<div style="margin: 50px auto; width: 25%;">
            
            <h2>Danh Sách Sinh Viên</h2>';
                for($i = 0; $i < sizeof($students); $i++){
                    echo "<p>" .($i+1)."- <a href='./C_DisplayStudent.php?ID=" .$students[$i]->id."'>".$students[$i]->name."</a></p>";
                }
            echo '</div>';
        }
    ?>
    <?php echo "</div></div></div></div>";?>
</body>
</html>