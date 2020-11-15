<?php session_start();
    include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="import" href="Trangchu.html">
    <title>Document</title>
</head>
<script>
    function homeBack(){
        location.href = "./index.php";
    }

    function ok(){
        location.href = "./TimkiemNV.php?findCheck="+"<?php if(isset($_GET['findCheck'])) echo $_GET['findCheck'] ?>"
                        +"&input="+"<?php if(isset($_GET['input']))echo $_GET['input'] ?>";
    }

    function reset(){
        location.href = "./TimkiemNV.php";
    }

    function exit(){
        location.href = "./index.php"
    }
    
</script>
<body>
    <div style="width: 650px; position: absolute;top: 250px;left: 30%;" >
    <input type='button' value='Back' onclick='homeBack()' style='margin-left: 17px;'>
        <form action="" method="get">
            <table cellspacing=10>
                <colgroup>
                    <col width = "150">
                    <col width = "150">
                    <col width = "150">
                    <col width = "150">
                </colgroup>
                <caption><h1>Tìm Kiếm Nhân Viên</h1></caption>
                <tr>
                    <td><input type="radio" name="findCheck" value="IDNV" checked
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "IDNV") echo " checked" ?>>IDNV</td>
                    <td><input type="radio" name="findCheck" value="Hoten"
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "Hoten") echo " checked" ?>>Hoten</td>
                    <td><input type="radio" name="findCheck" value="IDPB" 
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "IDPB") echo " checked" ?>>IDPB</td>
                    <td><input type="radio" name="findCheck" value="Diachi" 
                    <?php if(isset($_GET["findCheck"]) && $_GET["findCheck"] == "Diachi") echo " checked" ?>>Diachi</td>
                </tr>
                
                <tr>
                    <td colspan="4" style="text-align: left;">
                        <input type="text" style="width: 200px; margin-left: 5px;" name="input" 
                        value="<?php if(isset($_GET["input"])){echo $_GET["input"];}?>">
                        <input type="submit" name="find" value="Search" id="find">
                    </td>
                </tr>
            </table>
            
        </form>
        
        <?php
        if(isset($_GET["findCheck"]) && isset($_GET["find"])){
        
        $findID = $_GET["findCheck"];
        $findInput = $_GET["input"];
        $findInput = trim($findInput);
        $sql = "select * from nhanvien where $findID LIKE '%$findInput%';";
        $_SESSION["find"]="true";

        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "dulieu";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
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
    
        echo "</table>";
        mysqli_close($conn);

        echo "<table style='margin-top: 15px'>
        <colgroup>
            <col width='193'>
            <col width='194'>
            <col width='193'>
        </colgroup>
        <tr>
            <th><input type='button' value='Ok' id='ok' onclick='ok()'></th>
            <th><input type='button' value='Reset' id='reset' onclick='reset()'></th>
            <th><input type='button' value='Exit' id='exit' onclick='exit()'></th>
        </tr>
        </table>";
    }
?>
    </div>

</body>
</html>
