<?php include("index.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Trangchu.html">
    <title>Document</title>
</head>
<body>
   
    

    <?php
    if(isset($_COOKIE["username"])){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "dulieu";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        echo "<div style='width: 650px; position: absolute;top: 250px;left: 27%;'>";
        $sql = "select * from nhanvien";
        
    
        $result = mysqli_query($conn, $sql);
    
        echo '<div><input type="button" value="Back" id="back" style="margin: 25px 15px;"></div>
        <script>document.getElementById("back").onclick = function(){
            location.href = "./index.php";
        }</script>';
        if(mysqli_num_rows($result) > 0){
            echo "<table border='1' style='margin-left: 17px;'>
        <colgroup>
            <col width='100' >
            <col width='150' >
            <col width='150'>
            <col width='200' >
            <col width='100' >
        </colgroup>
        <caption><h1>Thông Tin Nhân Viên</h1></caption>
        <tr>
            <th>IDNV</th>
            <th>Họ và tên</th>
            <th>IDPB</th>
            <th>Địa chỉ</th>
            <th>Cập nhập</th>
        </tr>";
            while($row = mysqli_fetch_assoc($result)){
                $IDNV = $row["IDNV"];
                $Hoten = $row["Hoten"];
                $IDPB = $row["IDPB"];
                $Diachi = $row["Diachi"];
                $url = "CapNhapNVCT.php?IDNV=$IDNV";
                echo "
                <tr>
                    <td>$IDNV</td>
                    <td>$Hoten</td>
                    <td>$IDPB</td>
                    <td>$Diachi</td>
                    <td><a href='$url'>Cập nhập</a></td>
                </tr>";
            }
        }else{
            echo "<h3 style='margin: 15px;'>Không tìm thấy</h3>";
        }
    
        echo "</table></div>";
        mysqli_close($conn);
    } else {
        header("location:DangNhap.php?CapnhapNV=''");
    }
    ?>
</body>
</html>