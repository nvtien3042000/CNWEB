<?php 
    session_start();

    include("index.php");
    // header("location:CapNhapNV.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- cập nhập -->
    <?php
        if(isset($_GET["Submit"])){
            $servername = "localhost:3307";
            $username = "root";
            $passwork = "";
            $dbname = "dulieu";
            $conn = mysqli_connect($servername, $username, $passwork, $dbname);
            
            $IDNV = $_SESSION["IDNV"];
            $Hoten = $_GET["Hoten"];
            $IDPB = $_GET["IDPB"];
            $Diachi = $_GET["Diachi"];

            $sql = "UPDATE nhanvien SET IDNV = '$IDNV', Hoten = '$Hoten', IDPB = '$IDPB', Diachi = '$Diachi' WHERE IDNV = '$IDNV'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            unset($_SESSION["IDNV"]);
            header("location:CapNhapNV.php");
        }
    ?>

    <!--Form cập nhập -->
    <?php
    
        if(isset($_GET["IDNV"])){

            $servername = "localhost:3307";
            $username = "root";
            $passwork = "";
            $dbname = "dulieu";
            $conn = mysqli_connect($servername, $username, $passwork, $dbname);
            
            $IDNV = $_GET["IDNV"];
            $sql = "SELECT * FROM nhanvien where IDNV = '$IDNV'";
            $result =  mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $IDNV = $row["IDNV"];
            $Hoten = $row["Hoten"];
            $IDPB = $row["IDPB"];
            $Diachi = $row["Diachi"];
            $_SESSION["IDNV"] = $row["IDNV"];

            echo '<div style="width: 650px; position: absolute;top: 250px;left: 27%;">
            <form action="" method="GET" id="form">
                <table style="margin: 50px auto">
                    <caption><h2>Thông tin nhân viên</h2></caption>
                    <colgroup>
                        <col width="150px">
                        <col width="100px">
                        <col width="150px">
                    </colgroup>
                    <tr>
                        <td>IDNV:</td>
                        <td colspan="2"><input type="text" name="IDNV" value = "'.$IDNV.'" style="width: 250px" disabled ></td>
                    </tr>
                    <tr>
                        <td>Họ tên:</td>
                        <td colspan="2"><input type="text" name="Hoten" value = "'.$Hoten.'" style="width: 250px"></td>
                    </tr>
                    <tr>
                        <td>IDPB:</td>
                        <td colspan="2"><input type="text" name="IDPB" value = "'.$IDPB.'" style="width: 250px"></td>
                    </tr>  
                    <tr>
                        <td>Địa chỉ:</td>
                        <td colspan="2"><input type="text" name="Diachi" value = "'.$Diachi.'" style="width: 250px"></td>
                    </tr> 
                    <tr>
                        <td colspan="3"></br></td>
                    </tr>
                    <tr>
                        <td style="text-align: right"><input type="submit" value="Submit" name="Submit"></td>
                        <td></td>
                        
                        <td style="text-align: left;"><input type="button" value="Cancel" name="cancel" id="myCancel">
                            <script type="text/javascript">
                                document.getElementById("myCancel").onclick = function () {
                                    location.href = "CapNhapNV.php";
                                };
                            </script>
                        </td>
                    </tr>
    
                </table>
            </form>
        </div>';
            mysqli_close($conn);
        }
    ?>
</body>
</html>