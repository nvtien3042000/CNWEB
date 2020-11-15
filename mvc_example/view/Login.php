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
    <div style='width: 650px; position: absolute;top: 150px;left: 28%;'>
        <form action="../controller/C_Login.php" method="POST">
            <table border="0" style="margin: 100px auto;" cellspacing=20 cellpading=0>
                <colgroup>
                    <col width = "100px">
                    <col width = "100px">
                    <col width = "100px">
                </colgroup>
                <caption><h2>Đăng Nhập</h2></caption>
                <tr>
                     <td>Tài khoản: </td>
                     <td colspan="2"><input type="text" id="username" name="username" style="width: 200px" required placeholder="username" autofocus></td>
                </tr>
                <tr>
                     <td>Mật khẩu: </td>
                     <td colspan="2"><input type="password" id="password" name="password" style="width: 200px" required placeholder="password"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td colspan="2" style="color: red;"><?php if(isset($_POST["ok"])){echo "Sai tài khoản hoặc mật khẩu";} ?></td>
                </tr>

                <tr>
                    <td style="text-align: center;"><input type="submit" value="Ok" name="ok"></td>
                    <td style="text-align: center;"><input type="button" value="Reset" id="reset"></td>
                    <script>document.getElementById("reset").onclick = function (){
                        document.getElementById("username").value = "";
                        document.getElementById("password").value = "";
                    }</script>
                    <td style="text-align: center;"><input type="button" value="Cancel" id="cancel"></td>
                    <script>
                        document.getElementById("cancel").onclick = function (){
                            location.href = "../index.php";
                        }
                    </script>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>