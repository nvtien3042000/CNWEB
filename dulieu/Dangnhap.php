<?php
    session_start();
    include("index.php");
?>


<?php

    if(isset($_COOKIE["username"])){
        // echo '<div style="margin-top: 50px;"><a href="./index.php" style="margin-left: 600px;">Trở lại</a></div>
        // <div style="width: 200px; margin: 100px auto;"><h1>Đã đăng nhập</h1></div>';
        // exit;
        header("location:index.php");
    }


    
    if(isset($_POST["ok"])){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "dulieu";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "select * from admin";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($_POST["username"] == $row["Username"] && $_POST["password"] == $row['Password']){

                    $username = $row["Username"];
                    $password = $row['Password'];

                    //cookie
                    setcookie("username", $row["Username"], time() + (24*3600*30), "/");
                    // setcookie("password", $row["Password"], time() + (24*3600*30), "/");
                    if(isset($_GET["CapnhapNV"])){
                        header('location:CapNhapNV.php');
                        exit;
                    }
                    if(isset($_GET["CapNhapPB"])){
                        header('location:CapNhapPB.php');
                        exit;
                    }
                    if(isset($_GET["ChenNV"])){
                        header('location:ChenNV.php');
                        exit;
                    }

                    if(isset($_GET["ChenPB"])){
                        header('location:ChenPB.php');
                        exit;
                    }

                    if(isset($_GET["XoaNV"])){
                        header('location:XoaNV.php');
                        exit;
                    }
                    header('location:index.php');
                }
            }
        }
        mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style='width: 650px; position: absolute;top: 250px;left: 28%;'>
        <form action="" method="POST">
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
                            location.href = "index.php";
                        }
                    </script>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>



