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
            header("location:Dangnhap.php?XoaNV=''");
        }
    ?>

    <?php
        if(isset($_GET["submit"])){
            // $IDNV = $_GET["IDNV"];
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "dulieu";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $arrKey = array_keys($_GET);
            for($i = 0;$i<sizeof($arrKey)-1;$i++){
                $sql = "DELETE FROM nhanvien WHERE IDNV = '$arrKey[$i]'";
                mysqli_query($conn, $sql);
            } 
            mysqli_close($conn);
            header("location:XoaTatCaNV.php");
        }
    ?>

    <?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "dulieu";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * from nhanvien";
        $result = mysqli_query($conn, $sql);
        echo '<div style="width: 650px; position: absolute;top: 250px;left: 28%;">
        <input type="button" value="Back" id="back" style="margin-top: 25px;">
        <script>document.getElementById("back").onclick = function(){
            location.href = "./index.php";
        }</script>';
        if(mysqli_num_rows($result) > 0){
            echo "<form action='' method='GET'><table border='1' style='margin: 25px auto'>
            <colgroup>
              <col width='100' >
              <col width='150' >
              <col width='150'>
              <col width='200' >
              <col width='50' >
            </colgroup>
            <caption>
              <h2>Xóa nhân viên</h2>
            </caption>
            <tr>
              <th>IDNV</th>
              <th>Họ và tên</th>
              <th>IDPB</th>
              <th>Địa chỉ</th>
              <th>Xóa</th>
            </tr>";
            while($row = mysqli_fetch_assoc($result)){
                $IDNV = $row["IDNV"];
                $Hoten = $row["Hoten"];
                $IDPB = $row["IDPB"];
                $Diachi = $row["Diachi"];
                $url = "./XoaNV.php?IDNV=$IDNV";
                echo "<tr>
                <td>$IDNV</td>
                <td>$Hoten</td>
                <td>$IDPB</td>
                <td>$Diachi</td>
                <td><input type='checkbox' name='$IDNV' value='Xóa' checked></td>
              </tr>";
            }
            echo '<td colspan = 5 style="text-align: right;" border="0"><input type="submit" name="submit" value="Xóa Tất Cả"></td>';
            
            echo "</table></form></div>";
        }
    ?>
</body>
</html>