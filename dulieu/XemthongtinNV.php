<?php
    include("index.php");
?>
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "dulieu";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "select * from nhanvien";
    echo "<div style='width: 650px; position: absolute;top: 250px;left: 28%;'>";
    
    if(isset($_GET["IDPB"])){
        echo "<input type='button' value='Back' onclick='back()' style='margin-left: 17px;'>";
        $IDPB = $_GET["IDPB"];
        $sql = "select * from nhanvien where IDPB = '$IDPB'";
    } else{
        echo "<input type='button' value='Back' onclick='homeBack()' style='margin-left: 17px;'>";
    }
    

    $result = mysqli_query($conn, $sql);

    
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1' style='margin-left: 17px;'>
    <colgroup>
        <col width='100' >
        <col width='150' >
        <col width='150'>
        <col width='200' >
    </colgroup>
    <caption><h1>Thông Tin Nhân Viên</h1></caption>
    <tr>
        <th>IDNV</th>
        <th>Họ và tên</th>
        <th>IDPB</th>
        <th>Địa chỉ</th>
    </tr>";
        while($row = mysqli_fetch_assoc($result)){
            $IDNV = $row["IDNV"];
            $Hoten = $row["Hoten"];
            $IDPB = $row["IDPB"];
            $Diachi = $row["Diachi"];
            echo "
            <tr>
                <td>$IDNV</td>
                <td>$Hoten</td>
                <td>$IDPB</td>
                <td>$Diachi</d>
            </tr>";
        }
    }else{
        echo "<h3 style='margin: 15px;'>Không tìm thấy</h3>";
    }

    echo "</table></div>";
    mysqli_close($conn);
?>

<script>
    function homeBack(){
        location.href = "./index.php";
    }

    function back(){
        location.href = "./XemthongtinPB.php";
    }
</script>

