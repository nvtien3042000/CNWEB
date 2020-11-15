<?php include("index.php"); ?>

<script>
    function homeBack(){
        location.href = "./index.php";
    }
</script>

<?php
    if(isset($_COOKIE["username"])){
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "dulieu";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "select * from phongban";
    $result = mysqli_query($conn, $sql);
    echo "<div style='width: 650px; position: absolute;top: 250px;left: 27%;'>";
    echo "<input type = 'button' value='Back' id='homeBack' onclick='homeBack()' style='margin: 25px 50px;'/>";
    
    echo "<table border='1' style='margin: 0 auto;'>
    <colgroup>
        <col width='80' >
        <col width='150' >
        <col width='200'>
        <col width='100'>
    </colgroup>
    <caption><h1>Thông Tin Phòng Ban</h1></caption>
    <tr>
        <th>IDPB</th>
        <th>Tên phòng ban</th>
        <th>Mô tả</th>
        <th>Cập nhập</th>
    </tr>";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $IDPB = $row["IDPB"];
            $Tenpb = $row["Tenpb"];
            $Mota = $row["Mota"];
            $url = "./CapNhapPBCT.php?IDPB=$IDPB";
            echo "
                <tr>
                <td>$IDPB</td>
                <td>$Tenpb</td>
                <td>$Mota</td>
                <td><a href='$url'>Cập nhập</a></td>
            </tr>
        ";
        }
        echo "</table></div>";
    }
    }else{
        header("location:Dangnhap.php?CapNhapPB=''");
    }
?>