<?php
    session_start();
    include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET["Submit"])){
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "dulieu";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $IDPB = $_SESSION["IDPB"];
            $Tenpb = $_GET["Tenpb"];
            $Mota = $_GET["Mota"];
            $sql = "UPDATE phongban SET IDPB = '$IDPB', Tenpb = '$Tenpb', Mota = '$Mota' where IDPB = '$IDPB';";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            unset($_SESSION["IDPB"]);
            header("location:CapNhapPB.php");
            
        }
    ?>

    <?php
        if(isset($_GET["IDPB"])){
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "dulieu";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $IDPB = $_GET["IDPB"];
            $sql = "select * from phongban where IDPB = '$IDPB'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $IDPB = $row["IDPB"];
                $Tenpb = $row["Tenpb"];
                $Mota = $row["Mota"];
                $_SESSION["IDPB"] = $row["IDPB"];
            }
            mysqli_close($conn);
        }
    ?>
    <div style="width: 650px; position: absolute;top: 200px;left: 27%;">
        <table style="margin: 100px auto;">
            <form action="" method="get">
            <colgroup>
                <col width="150px">
                <col width="100px">
                <col width="150px">
            </colgroup>
            <caption><h3>Cập nhập thông tin PB</h3></caption>
            <tr>
                <td>IDPB:</td>
                <td colspan="2" ><input type="text" name="IDPB" style="width: 250px;" value="<?php echo $IDPB ?>" disabled ></td>
            </tr>
            <tr>
                <td>Tên phòng ban:</td>
                <td colspan="2"><input type="text" name="Tenpb" style="width: 250px;"value="<?php echo $Tenpb ?>" ></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td colspan="2"><input type="text" name="Mota" style="width: 250px;" value="<?php echo $Mota ?>"></td>
            </tr>
            <tr>
                <td style="text-align: right;"><input type="submit" value="Submit" name="Submit"></td>
                <td></td>
                <td><input type="button" value="Cancel" name="cancel" id="cancel"></td>
                <script>
                    document.getElementById("cancel").onclick = function (){
                        location.href = "./CapNhapPB.php";
                    }
                </script>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>
