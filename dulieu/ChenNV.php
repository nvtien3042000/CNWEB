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
            header("location:Dangnhap.php?ChenNV=''");
        }
    ?>

    <div style='width: 650px; position: absolute;top: 250px;left: 28%;'>
        <form action="" method="get">
        <table style="margin: 50px auto;">
            <caption><h2>Chèn nhân viên</h2></caption>
            <colgroup>
                <col width="100px">
                <col width="100px">
                <col width="100px">
            </colgroup>
            <tr>
                <td>IDNV:</td>
                <td colspan="2"><input type="text" style = "width: 200px" name="IDNV" id="IDNV" required autofocus></td>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td colspan="2"><input type="text" style = "width: 200px" name="Hoten" id="Hoten" required></td>
            </tr>
            <tr>
                <td>IDPB:</td>
                <!-- <td colspan="2"><input type="text" style = "width: 200px" name="IDPB" id="IDPB" required></td> -->
                <td><?php
                    $servername = "localhost:3307";
                    $username = "root";
                    $password = "";
                    $dbname = "dulieu";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    $sql = "select * from phongban";
                    $result = mysqli_query($conn, $sql);
    
                    if(mysqli_num_rows($result) > 0){
                        echo "<select name='IDPB' id='IDPB'>";
                    while($row = mysqli_fetch_assoc($result)){
                        $IDPB = $row["IDPB"];
                        echo "
                        <option value='$IDPB' name='IDPB'>$IDPB</option>";
                    }
                    }else{
                        echo "</select>";
                    }

                    echo "</select>";
                    mysqli_close($conn);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td colspan="2"><input type="text" style = "width: 200px" name="Diachi" id="Diachi" required></td>
            </tr>
            <tr>
                <td colspan="3"></br></td>
            </tr>
            <tr>
                <td style="text-align: center;"><input type="submit" name="submit" value="Submit"></td>
                <td style="text-align: center;"><input type="button" id="reset" value="Reset"></td>
                <script>
                    document.getElementById("reset").onclick = function (){
                        document.getElementById("IDNV").value = "";
                        document.getElementById("Hoten").value = "";
                        document.getElementById("Diachi").value = "";
                    }
                </script>
                <td style="text-align: center;"><input type="button" id="cancel" value="Cancel"></td>
                <script>
                    document.getElementById("cancel").onclick = function (){
                        location.href = "index.php";
                    }
                </script>
            </tr>
        </table>
        </form>
        <?php
        if(isset($_GET["submit"])){
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname =  "dulieu";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $IDNV = $_GET["IDNV"];
            $Hoten = $_GET["Hoten"];
            $IDPB = $_GET["IDPB"];
            $Diachi = $_GET["Diachi"];
            $sql = "INSERT INTO nhanvien (IDNV, Hoten, IDPB, Diachi) values ('$IDNV', '$Hoten', '$IDPB', '$Diachi')";
            if(mysqli_query($conn, $sql)){
                echo '<h1 style="margin: 50px auto; text-align: center;"> Đã chèn dữ liệu thành công</h1>';
            }else{
                // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                echo '<h3 style="margin: 50px auto; text-align: center;">IDNV không hợp lệ</h3>';
            }
            mysqli_close($conn);
        }
    ?>
    </div>
</body>
</html>

