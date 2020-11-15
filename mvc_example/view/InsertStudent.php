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
    <div  style="margin: 50px auto; width: 35%;">
    <table>
        <form action="../controller/C_InsertStudent.php" method="get">
        <colgroup>
            <col width="150px">
            <col width="100px">
            <col width="150px">
        </colgroup>
        <caption><h3>Thêm Sinh Viên</h3></caption>
        <tr>
            <td>Họ Tên:</td>
            <td colspan="2" ><input type="text" name="name" style="width: 250px;" value="" required></td>
        </tr>
        <tr>
            <td>Tuổi:</td>
            <td colspan="2"><input type="text" name="age" style="width: 250px;"value="" required></td>
        </tr>
        <tr>
            <td>University:</td>
            <td colspan="2"><input type="text" name="university" style="width: 250px;" value="" required></td>
        </tr>
        <tr>
            <td style="text-align: right;"><input type="submit" value="Submit" name="submit"></td>
            <td></td>
            <td><input type="button" value="Cancel" name="cancel" id="cancel"></td>
            <script>
                document.getElementById("cancel").onclick = function (){
                    location.href = "../index.php";
                }
            </script>
        </tr>
        </form>
        </table>
        <?php if(isset($_GET["true"])) echo "<div style='margin-top: 10px; font-size: 25px'>Chèn Thành Công</div>" ?>
    </div>
    <?php echo "</div></div></div></div>";?>
</body>
</html>