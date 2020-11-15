<?php include("index.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE["username"])){
            header("location:Dangnhap.php?ChenPB=''");
        }

        
    ?>
    <div style='width: 650px; position: absolute;top: 250px;left: 28%;'>
    <table style="margin: 100px auto;">
        <form action="" method="get">
        <colgroup>
            <col width="150px">
            <col width="100px">
            <col width="150px">
        </colgroup>
        <caption><h3>Thêm Phòng Ban</h3></caption>
        <tr>
            <td>IDPB:</td>
            <td colspan="2" ><input type="text" name="IDPB" style="width: 250px;" value="" required></td>
        </tr>
        <tr>
            <td>Tên phòng ban:</td>
            <td colspan="2"><input type="text" name="Tenpb" style="width: 250px;"value="" required></td>
        </tr>
        <tr>
            <td>Mô tả:</td>
            <td colspan="2"><input type="text" name="Mota" style="width: 250px;" value="" required></td>
        </tr>
        <tr>
            <td style="text-align: right;"><input type="submit" value="Submit" name="Submit"></td>
            <td></td>
            <td><input type="button" value="Cancel" name="cancel" id="cancel"></td>
            <script>
                document.getElementById("cancel").onclick = function (){
                    location.href = "./index.php";
                }
            </script>
        </tr>
        </form>
        </table>
    <?php
    if(isset($_GET["Submit"])){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "dulieu";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $IDPB = $_GET['IDPB'];
        $Tenpb = $_GET['Tenpb'];
        $Mota = $_GET['Mota'];
        $sql = "INSERT INTO phongban(IDPB, Tenpb, Mota) values ('$IDPB', '$Tenpb','$Mota');";
        if(mysqli_query($conn, $sql)){
            echo '<h1 style="margin: 50px auto; text-align: center;"> Đã chèn dữ liệu thành công</h1>';
        }else{
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo '<h3 style="margin: 50px auto; text-align: center;">IDPB không hợp lệ</h3>';
        }
        mysqli_close($conn);
    }
    ?>
    
    </div>
</body>
</html>



