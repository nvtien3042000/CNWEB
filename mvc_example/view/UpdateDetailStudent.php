<?php
    include("../index.php");
    $_SESSION["ID"] = $student->id;
?>

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
        <form action="../controller/C_UpdateStudent.php" method="get">
            <table>
                <colgroup>
                    <col width='100' >
                    <col width='200'>
                </colgroup>
                <tr>
                    <td>Họ tên: </td>
                    <td><input type="text" name="name" value="<?php echo $student->name; ?>" required></td>
                </tr>
                <tr>
                    <td>Tuổi: </td>
                    <td><input type="text" name="age" value="<?php echo $student->age; ?>" required></td>
                </tr>
                <tr>
                    <td>Trường: </td>
                    <td><input type="text" name="university" value="<?php echo $student->university; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="Submit" value="submit"></th>
                    <th><input type="button" name="Cancel" value="Cancel" id="cancel"></th>
                    <script>
                        document.getElementById("cancel").onclick = function (){
                            location.href = "C_UpdateStudent.php";
                        }
                    </script>
                </tr>
            </table>
        </form>
    </div>
    <?php echo "</div></div></div></div>";?>
</body>
</html>