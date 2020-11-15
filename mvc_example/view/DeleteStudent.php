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
    <form action="../controller/C_DeleteStudent.php" method="get">
    <table border="1">
        <colgroup>
            <col width='150' >
            <col width='100'>
        </colgroup>
        <tr>
            <th>Họ Tên</th>
            <th>Xóa</th>
        </tr>
        <?php
        for($i = 0; $i<sizeof($students);$i++){
            echo "<tr>
            <td>".$students[$i]->name."</td>
            <th><input type='checkbox' name='".$students[$i]->id."' value='Xóa'></th>
        </tr>";
        }
        // echo '<td colspan = 5 style="text-align: right;" border="0"><input type="submit" name="submit" value="Xóa"></td>';
    ?>
        <tr>
            <td></td>
            <td colspan = 5 style="text-align: center;" border="0"><input type="submit" name="submit" value="Xóa"></td>
        </tr>
    </table>
    </form>
</div>
<?php echo "</div></div></div></div>";?>
</body>
</html>