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
    <input type="button" onclick="back()" value="Back" style="margin: 20px 0;">
    <script>
        function back(){
            location.href="../index.php";
        }
    </script>
    <table>
            <colgroup>
                <col width='150' >
                <col width='100'>
            </colgroup>
        <tr>
            <td style="font-weight: bold;">Họ Tên</td>
            <th>Cập Nhập</th>
        </tr>
    
    <?php
        for($i = 0; $i<sizeof($students);$i++){
            echo "<tr>
            <td>".$students[$i]->name."</td>
            <th><a href='./C_UpdateStudent.php?ID=" .$students[$i]->id."'>Cập nhập</th>
        </tr>";
        }
    ?>
    </table>
    </div>
    <?php echo "</div></div></div></div>";?>
</body>
</html>
